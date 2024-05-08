<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('admin.product.index', compact('products'));
    }

    // product create
    public function create(){
        $categories = ProductCategory::where('status', '1')->get();
        return view('admin.product.create',  compact('categories'));
    }


    // save product
    public function store(ProductFormRequest $request){
        $validatedData = $request->validated();

        $category = ProductCategory::findOrFail($validatedData['category_id']);

        // adding images to database
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;

            $file->move('uploads/products/', $filename);
        }

        $post = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['slug']),
            'short_description' => $validatedData['short_description'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'quantity' => $validatedData['qtty'],
            'meta_title' => $validatedData['meta_title'],
            'meta_description' => $validatedData['meta_description'],
            'status' => $validatedData['status'],           
            'tags' => $validatedData['tags'],
            'state' => $validatedData['state'],
            'image' => $filename
        ]);
        $post->save();
        return redirect('admin/products')->with('message', "Product added successfully!");
    }


     // edit post
     public function edit(int $product_id){
        $product = Product::where('id', $product_id)->first();
        $categories = ProductCategory::where('status', '1')->get();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    // update post
    public function update(EditProductRequest $request, int $product_id){
        $validatedData = $request->validated();

        $product = Product::where('id', $product_id)->first();


        if($product){
            // adding images to database
            if($request->hasFile('image')){
                
                $destination = 'uploads/posts/'.$product->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;

                $file->move('uploads/posts/', $filename);

                $product->update([
                    'category_id' => $validatedData['category_id'],
                    'name' => $validatedData['name'],
                    'slug' => Str::slug($validatedData['slug']),
                    'short_description' => $validatedData['short_description'],
                    'description' => $validatedData['description'],
                    'price' => $validatedData['price'],
                    'quantity' => $validatedData['qtty'],
                    'meta_title' => $validatedData['meta_title'],
                    'meta_description' => $validatedData['meta_description'],
                    'status' => $validatedData['status'],           
                    'tags' => $validatedData['tags'],
                    'state' => $validatedData['state'],
                    'image' => $filename
                ]);
            }
            else{
                $product->update([
                    'category_id' => $validatedData['category_id'],
                    'name' => $validatedData['name'],
                    'slug' => Str::slug($validatedData['slug']),
                    'short_description' => $validatedData['short_description'],
                    'description' => $validatedData['description'],
                    'price' => $validatedData['price'],
                    'quantity' => $validatedData['qtty'],
                    'meta_title' => $validatedData['meta_title'],
                    'meta_description' => $validatedData['meta_description'],
                    'status' => $validatedData['status'],           
                    'tags' => $validatedData['tags'],
                    'state' => $validatedData['state'],
                ]);
    
            }

            return redirect('admin/products')->with('message', "Product updated successfully!");
        }
        else{
            return redirect('admin/products')->with('message', "Oops! Something went wrong! Try again");
        }
    }

    // deleted product
    public function delete(int $product_id){
        $post = Product::findOrFail($product_id);

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
