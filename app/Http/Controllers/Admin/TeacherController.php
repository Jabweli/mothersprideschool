<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\TeacherFormRequest;
use App\Http\Requests\EditTeacherFormRequest;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::paginate(10);
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create(){
        return view('admin.teachers.create');
    }

    public function store(TeacherFormRequest $request){
        $validatedData = $request->validated();

        $teacher = new Teacher();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;

            $file->move('uploads/teachers/', $filename);
        }

        $teacher->name = $validatedData['name'];
        $teacher->subject = $validatedData['subject'];
        $teacher->class = $validatedData['class'];
        $teacher->phone = $validatedData['phone'];
        $teacher->email = $validatedData['email'];
        $teacher->address = $validatedData['address'];
        $teacher->image = $filename;

        $teacher->save();

        return redirect('admin/teachers')->with('message', 'Tecaher added successfully!');
    }

    public function edit(int $teacher_id){
        $teacher = Teacher::where('id', $teacher_id)->first();
        return view('admin.teachers.edit', compact('teacher'));
    }


    public function update(EditTeacherFormRequest $request, int $teacher_id){
        $validatedData = $request->validated();

        $teacher = Teacher::findOrFail($teacher_id);

        if($request->hasFile('image')){
            $destination = 'uploads/teachers/'.$teacher->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;

            $file->move('uploads/teachers/', $filename);

            $teacher->name = $validatedData['name'];
            $teacher->subject = $validatedData['subject'];
            $teacher->class = $validatedData['class'];
            $teacher->phone = $validatedData['phone'];
            $teacher->email = $validatedData['email'];
            $teacher->address = $validatedData['address'];
            $teacher->image = $filename;

            $teacher->update();
        }else{
            $teacher->name = $validatedData['name'];
            $teacher->subject = $validatedData['subject'];
            $teacher->class = $validatedData['class'];
            $teacher->phone = $validatedData['phone'];
            $teacher->email = $validatedData['email'];
            $teacher->address = $validatedData['address'];

            $teacher->update();
        }

        return redirect('admin/teachers')->with('message', 'Tecaher info updated successfully!');
    }


    public function delete(int $teacher_id){
        $teacher = Teacher::findOrFail($teacher_id);

        if($teacher){
            $destination = 'uploads/teachers/'.$teacher->image;

            if(File::exists($destination)){
                File::delete($destination);
            }

            $teacher->delete();

            return redirect('admin/teachers')->with('message', 'Tecaher data deleted successfully!');
        }else {
            return redirect('admin/teachers')->with('warning', 'Something went wrong!');
        }
    }

}
