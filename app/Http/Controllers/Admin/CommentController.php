<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Comment;
use App\Mail\CommentMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function viewComments(){
        $comments = Comment::paginate(10);
        return view('admin.post.comments', compact('comments'));
    }


    public function approveComment(int $comment_id){
        $comment = Comment::findOrFail($comment_id);
        if($comment){
            $comment->status = '1';
            $comment->update();
            return redirect()->back()->with('message', 'Comment is approved!');  
        }
        else{
            return redirect()->back()->with('message', 'No such comment found!');  
        }

        
    }

    public function disaproveComment(int $comment_id){
        $comment = Comment::findOrFail($comment_id);
        if($comment){
            $comment->status = '0';
            $comment->update();
            return redirect()->back()->with('message', 'Comment is disapproved!');  
        }
        else{
            return redirect()->back()->with('message', 'No such comment found!');  
        }

        
    }

    public function deleteComment(int $comment_id){
        $comment = Comment::findOrFail($comment_id);
        $comment->delete();

        return redirect()->back()->with('message', 'Comment deleted successfully!');       
    }


    // return comments to front end per post
}
