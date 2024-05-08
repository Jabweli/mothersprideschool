<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EditEventRequest;
use App\Http\Requests\EventFormRequest;

class EventController extends Controller
{
    public function index(){
        $events = Event::paginate(10);
        return view('admin.event.index', compact('events'));
    }

    // product create
    public function create(){
        return view('admin.event.create');
    }


    // save product
    public function store(EventFormRequest $request){
        $validatedData = $request->validated();

        $event = new Event;
        // adding images to database
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;

            $file->move('uploads/events/', $filename);
        }

        $event->name = $validatedData['name'];
        $event->slug = Str::slug($validatedData['name']);
        $event->description = $validatedData['description'];
        $event->time = $validatedData['time'];
        $event->location = $validatedData['location'];
        $event->date = $validatedData['date'];
        $event->status = $validatedData['status'];           
        $event->image = $filename;

        $event->save();
        return redirect('admin/events')->with('message', "Event added successfully!");
    }


     // edit post
     public function edit(int $event_id){
        $event = Event::where('id', $event_id)->first();
        return view('admin.event.edit', compact('event'));
    }

    // update post
    public function update(EditEventRequest $request, int $event_id){
        $validatedData = $request->validated();

        $event = Event::where('id', $event_id)->first();


        if($event){
            // adding images to database
            if($request->hasFile('image')){
                
                $destination = 'uploads/events/'.$event->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;

                $file->move('uploads/events/', $filename);

                $event->name = $validatedData['name'];
                $event->slug = Str::slug($validatedData['name']);
                $event->description = $validatedData['description'];
                $event->time = $validatedData['time'];
                $event->location = $validatedData['location'];
                $event->date = $validatedData['date'];
                $event->status = $validatedData['status'];           
                $event->image = $filename;

                $event->update();
            }
            else{
                $event->name = $validatedData['name'];
                $event->slug = Str::slug($validatedData['name']);
                $event->description = $validatedData['description'];
                $event->time = $validatedData['time'];
                $event->location = $validatedData['location'];
                $event->date = $validatedData['date'];
                $event->status = $validatedData['status'];  
                
                $event->update();
            }

            return redirect('admin/events')->with('message', "Event updated successfully!");
        }
        else{
            return redirect('admin/events')->with('message', "Oops! Something went wrong! Try again");
        }
    }

    // deleted product
    public function delete(int $event_id){
        $post = Event::findOrFail($event_id);

        if($post){
            $destination = 'uploads/product/'.$post->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $post->delete();

            return redirect()->back()->with('message', "Product deleted successfully");
        }
        else{
            return redirect()->back()->with('warning', "Something went wrong! Try again");
        }
    }
}
