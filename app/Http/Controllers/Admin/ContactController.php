<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('id', 'DESC')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }


    // view contact
    public function view(int $contact_id){
        $contact = Contact::where('id', $contact_id)->first();
        return view('admin.contact.view', compact('contact'));
    }


    // delete contact
    public function delete(int $contact_id){
        $contact = Contact::findorFail($contact_id);
        if($contact){
            $contact->delete();

            return redirect()->back()->with('message', 'Contact deleted successfully');
        }else{
            return redirect()->back()->with('warning', 'Oops! Something went wrong, try again');
        }
    }
}
