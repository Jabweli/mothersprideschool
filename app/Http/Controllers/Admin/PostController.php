<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EditPostRequest;
use App\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::where('status', '1')->get();
        return view('admin.post.create', compact('categories'));
    }

    public function store(PostFormRequest $request){
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        // adding images to database
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;

            $file->move('uploads/posts/', $filename);
        }

        $post = new Post;

        // $post->category_id = $validatedData['category_id'];
        // $post->name = $validatedData['name'];
        // $post->slug = Str::slug($validatedData['name']);
        // $post->short_description = $validatedData['short_description'];
        // $post->description = $validatedData['description'];
        // $post->status = $validatedData['status'];           
        // $post->author_id = auth()->user()->id;
        // $post->image = $filename;

        $post = $category->posts()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['name']),
            'short_description' => $validatedData['short_description'],
            'description' => $validatedData['description'],
            'status' => $validatedData['status'],           
            'author_id' => auth()->user()->id,
            'image' => $filename
        ]);
        $post->save();
        return redirect('admin/posts')->with('message', "Post added successfully!");
    }

    // edit post
    public function edit(int $post_id){
        $post = Post::where('id', $post_id)->first();
        $categories = Category::where('status', '1')->get();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    // update post
    public function update(EditPostRequest $request, int $post_id){
        $validatedData = $request->validated();

        $post = Post::where('id', $post_id)->first();


        if($post){
            // adding images to database
            if($request->hasFile('image')){
                
                $destination = 'uploads/posts/'.$post->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;

                $file->move('uploads/posts/', $filename);

                $post->update([
                    'category_id' => $validatedData['category_id'],
                    'name' => $validatedData['name'],
                    'slug' => Str::slug($validatedData['name']),
                    'short_description' => $validatedData['short_description'],
                    'description' => $validatedData['description'],
                    'status' => $validatedData['status'],
                    'author_id' => auth()->user()->id,
                    'image' => $filename
                ]);
            }
            else{
                $post->update([
                    'category_id' => $validatedData['category_id'],
                    'name' => $validatedData['name'],
                    'slug' => Str::slug($validatedData['name']),
                    'short_description' => $validatedData['short_description'],
                    'description' => $validatedData['description'],
                    'author_id' => auth()->user()->id,
                    'status' => $validatedData['status'],
                ]);
    
            }

            return redirect('admin/posts')->with('message', "Post updated successfully!");
        }
        else{
            return redirect('admin/posts')->with('message', "Oops! Something went wrong! Try again");
        }
    }

    // deleted post
    public function delete(int $post_id){
        $post = Post::findOrFail($post_id);

        if($post){
            $destination = 'uploads/posts/'.$post->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $post->delete();

            return redirect()->back()->with('message', "Post deleted successfully");
        }
        else{
            return redirect()->back()->with('warning', "Something went wrong! Try again");
        }
    }
}
