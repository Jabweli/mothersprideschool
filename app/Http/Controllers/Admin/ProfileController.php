<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(){
        $profiles = User::all();
        return view('admin.profile.index', compact('profiles'));
    }

    public function edit(int $user_id){
        $profile = User::where('id', $user_id)->first();
        return view('admin.profile.profile', compact('profile'));
    }


    public function store(Request $request, int $user_id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('message', "All fields are mandatory");
        }

        $profile = User::findOrFail($user_id);

        if($profile){
            if($request->hasFile('image')){

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;
                $file->move('uploads/profile', $filename);
                
                $profile->image = $filename;
            }
            $profile->description = $request->description;  
            $profile->role_as = $request->role_as;     
    
            $profile->update();
    
            return redirect('admin/profile')->with('message', "Profile Updated Successfully!");
        }else{
            return redirect('admin/profile')->with('warning', "Something went wrong! Try again");
        }
        
    }


    // deleted user
    public function delete(int $user_id){
        $user = User::findOrFail($user_id);

        if($user){
            $destination = 'uploads/profile/'.$user->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $user->delete();

            return redirect()->back()->with('message', "User removed successfully");
        }
        else{
            return redirect()->back()->with('warning', "Something went wrong! Try again");
        }
    }



    // return password change page
    public function password(int $profile_id){
        $profile = User::findOrFail($profile_id);
        return view('admin.profile.password', compact('profile'));
    }


    public function updatePassword(Request $request, int $profile_id){
        $request->validate([
            'old_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string','min:8', 'confirmed']
        ]);

        $user = User::findOrFail($profile_id);

        $currentPasswordStatus = Hash::check($request->old_password, $user->password);
        if($currentPasswordStatus){

            $user->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message', 'Password changed successfully');
        }else{
            return redirect()->back()->with('message', 'Current password does not match with Old password');
        }
    }
}
