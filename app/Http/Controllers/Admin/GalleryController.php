<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
  public function index(){
    $images = Image::all();
     return view('admin.gallery.index', compact('images'));
  }

  public function create(Request $request){

    $request->validate([
      'images' => 'required',
      // 'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $images = new Image;

    // adding images to database
    if($request->hasFile('images')){
      $uploadPath = 'uploads/gallery';

      $i = 1;

      foreach($request->file('images') as $imageFile){
          $extension = $imageFile->getClientOriginalExtension();
          $filename = time().$i++.".".$extension;
          $imageFile->move($uploadPath, $filename);

          $finalImagePathName = $uploadPath."/".$filename;  
          
          $images->create([
            'image' => $finalImagePathName
          ]);
      }
      return redirect('admin/gallery')->with('message', "Uploaded successfully");
  }

  }




  public function delete($image_id){
    $image = Image::find($image_id);

    $path = 'uploads/gallery/'.$image->image;
    if(File::exists($path)){
      File::delete($path);
    }

    $image->delete();

    return redirect('admin/gallery')->with('message', "Image deleted successfully");
  }


}
