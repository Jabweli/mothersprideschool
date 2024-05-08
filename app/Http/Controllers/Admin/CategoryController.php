<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function store(CategoryFormRequest $request){
        $validatedData = $request->validated();

        $category = new Category();


        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['name']);
        $category->description = $validatedData['description'];
        $category->status = $request->active = true ? '1': '0';

        $category->save();

        return redirect()->back()->with('message', "Category added successfully!");
    }


    public function edit($category_id){
        $category = Category::where('id', $category_id)->first();

        return view('admin.category.edit', compact('category'));
    }

    // edit category
    public function update(CategoryFormRequest $request, int $category_id){
        $validatedData = $request->validated();

        $category = Category::findOrFail($category_id);

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['name']);
        $category->description = $validatedData['description'];
        $category->status = $request->active == true ? '1': '0';
        $category->navbar = $request->navbar == true ? '1': '0';

        $category->update();

        return redirect('admin/categories')->with('message', "Changes saved successfully!");

    }

    // delete category
    public function delete($category_id){
        $category = Category::findOrFail($category_id);
        if($category){
            $category->delete();

            return redirect()->back()->with('message', 'Category deleted');
        }else{
            return redirect()->back()->with('warning', 'Category ID not found');
        }
    }
}
