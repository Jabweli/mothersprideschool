<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Post;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index(){
        $teacherCount = Teacher::all()->count();
        $contactCount = Contact::all()->count();
        $imageCount = Image::all()->count();
        // return view('admin.dashboard', compact('postCount','productCount'));
        return view('admin.dashboard', compact('teacherCount', 'contactCount', 'imageCount'));
    }
}
