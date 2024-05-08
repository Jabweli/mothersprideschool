<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Event;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Teacher;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class FrontendController extends Controller
{
   public function index(){
        $teachers = Teacher::orderBy('id', 'DESC')->take(4)->get();
        return view('frontend.index', compact('teachers'));
   }

   public function about(){
        return view('frontend.about');
    }

    public function staff(){
        $teachers = Teacher::paginate(12);
        return view('frontend.staff', compact('teachers'));
    }

    public function events(){
        $events = Event::where('status', '1')->paginate(9);
        return view('frontend.events', compact('events'));
    }

    public function event(string $event_slug){
        $event = Event::where('slug', $event_slug)->first();
        return view('frontend.singlevent', compact('event'));
    }

    public function news(){
        $posts = Post::where('status', '1')->paginate(12);
        return view('frontend.news', compact('posts'));
    }

    public function singleNews(string $post_slug){
        $post = Post::where('slug', $post_slug)->first();
        $settings = Setting::where('id', '1')->first();
        // $commentCount = Comment::where('status', '1')->where('post_id', $post->id)->count();
        return view('frontend.singlenews', compact('post', 'settings'));
    }

    public function gallery(){
        $images = Image::all();
        $imageCount = Image::count();
        return view('frontend.gallery', compact('images', 'imageCount'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function admission(){
        return view('frontend.admission');
    }

    public function gulaama(){
        $teachers = Teacher::where('address', 'Gulaama')->orderBy('id', 'DESC')->take(4)->get();
        return view('frontend.gulaama', compact('teachers'));
    }

    public function mukasa(){
        $teachers = Teacher::where('address', 'Ham-Mukasa')->orderBy('id', 'DESC')->take(4)->get();
        return view('frontend.ham-mukasa', compact('teachers'));
    }

    public function kasangalabi(){
        $teachers = Teacher::where('address', 'Kasangalabi')->orderBy('id', 'DESC')->take(4)->get();
        return view('frontend.kasangalabi', compact('teachers'));
    }


    // submit contact form
    public function submitContact(ContactFormRequest $request){
        $validatedData = $request->validated();

        $contact = new Contact;

        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];
        

        $contact->save();


        // send to email
        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'subject' => $validatedData['subject'],
            'message'=> $validatedData['message']
        ];

        Mail::to('stanlaus645@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('message', "Thank you! You message has been recieved.");
    }


    // file downloads
    public function download(){
        $filePath = public_path("assets/application.pdf");
    	$headers = ['Content-Type: application/pdf'];
    	$fileName = 'ApplicationForm'.'.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    public function nursery(){
        $filePath = public_path("assets/nursery.pdf");
    	$headers = ['Content-Type: nursery/pdf'];
    	$fileName = 'Nursery_Day_Requirements'.'.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    public function primary(){
        $filePath = public_path("assets/primary.pdf");
    	$headers = ['Content-Type: primary/pdf'];
    	$fileName = 'Primary_Day_Requirements'.'.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    public function boarding(){
        $filePath = public_path("assets/boarding.pdf");
    	$headers = ['Content-Type: boarding/pdf'];
    	$fileName = 'Boarding_Requirements'.'.pdf';

    	return response()->download($filePath, $fileName, $headers);
    }

    // school policy page
    public function policy(){
        return view('frontend.policy');
    }

}
