<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        $newsletters = Newsletter::orderBy('id', 'DESC')->paginate(10);
        return view('admin.newsletter.index', compact('newsletters'));
    }

    public function delete(int $newsletter_id){
        $newsletter = Newsletter::findOrFail($newsletter_id);

        if($newsletter){
            $newsletter->delete();

            return redirect()->back()->with('message', 'Newsletter email deleted successfully!');
        }else{
            return redirect()->back()->with('warning', 'Oops! Something went wrong, try again.');
        }
    }
}
