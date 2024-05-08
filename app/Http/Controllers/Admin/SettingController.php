<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index(){
        $settings = Setting::find(1);
        return view('admin.setting.index', compact('settings'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'logo' => 'nullable',
            'description' => 'nullable',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'copyright_text' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('message', "All fields are mandatory");
        }

        $setting = Setting::where('id', '1')->first();
        if($setting){
   
            $setting->title = $request->title;

            if($request->hasFile('logo')){

                $destination = 'uploads/settings/'.$setting->logo;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;
                $file->move('uploads/settings', $filename);
                
                $setting->logo = $filename;
            }

            $setting->description = $request->description;
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->youtube = $request->youtube;
            $setting->twitter = $request->twitter;
            $setting->copyright = $request->copyright_text;

            $setting->save();

            return redirect('admin/settings')->with('message', "Settings Updated Successfully!");

        }
        else{
            $setting = new Setting;
            $setting->title = $request->title;

            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;
                $file->move('uploads/settings', $filename);

                $setting->logo = $filename;
            }

            $setting->description = $request->description;
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->youtube = $request->youtube;
            $setting->twitter = $request->twitter;
            $setting->copyright = $request->copyright_text;

            $setting->save();

            return redirect('admin/settings')->with('message', "Settings saved Successfully!");
        }
    }
}
