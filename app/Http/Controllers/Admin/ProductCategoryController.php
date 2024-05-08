<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryRequest;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = ProductCategory::paginate(10);
        return view('admin.product.category.index', compact('categories'));
    }

    public function store(ProductCategoryRequest $request){
        $validatedData = $request->validated();

        $category = new ProductCategory();


        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        $category->status = $request->active = true ? '1': '0';

        $category->save();

        return redirect()->back()->with('message', "Category added successfully!");
    }


    public function edit($category_id){
        $category = ProductCategory::where('id', $category_id)->first();

        return view('admin.product.category.edit', compact('category'));
    }

    // edit category
    public function update(ProductCategoryRequest $request, int $category_id){
        $validatedData = $request->validated();

        $category = ProductCategory::findOrFail($category_id);

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        $category->status = $request->active == true ? '1': '0';

        $category->update();

        return redirect('admin/product-categories')->with('message', "Changes saved successfully!");

    }

    // delete category
    public function delete($category_id){
        $category = ProductCategory::findOrFail($category_id);
        if($category){
            $category->delete();

            return redirect()->back()->with('message', 'Category deleted');
        }else{
            return redirect()->back()->with('warning', 'Category ID not found');
        }
    }
}
