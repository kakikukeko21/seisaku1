<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index(Post $post)
     {
       return view('posts/index')->with(['posts' => $comment->get()]);
     } 
     
    public function commentshow(Comment $comment)
     {
       return view('comments/commentshow')->with(['comment' => $comment]);
     }
     
      public function comment(Comment $comment)
     {
        return view('comments/comment')->with(['comments' => $comment->get()]);
     }
     
     public function store(Request $request, Comment $comment)
     {
       $input = $request['comment'];
       $comment->fill($input)->save();
       return redirect('/comments/' . $comment->id);
     }
     
     public function delete(Comment $comment)
     {
       $comment->delete();
       return redirect('/');
     }
}
