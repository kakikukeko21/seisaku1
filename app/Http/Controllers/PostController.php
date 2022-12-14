<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Shimei;
use App\Http\Requests\CommentRequest;
use App\Comment;


class PostController extends Controller
{
     public function index(Post $post)
     {
       return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
     } 
     
    public function show(Post $post)
     {
       return view('posts/show')->with(['post' => $post]);
     }
     
     public function store(Post $post, Request $request)
     {
       $input = $request['post'];
       $post->fill($input)->save();
       return redirect('/posts/' . $post->id);
     }
     
     public function edit(Post $post)
     { 
       return view('posts/edit')->with(['post' => $post]);
     }

     public function update(PostRequest $request, Post $post)
     {
       $input_post = $request['post'];
       $post->fill($input_post)->save();
       return redirect('/posts/' . $post->id);
     }
     
     public function delete(Post $post)
     {
       $post->delete();
       return redirect('/');
     }
     
    public function bihin()
     {
        return view('posts/bihin');
     }
    
     public function shimei()
     {
        return view('posts/shimei');
     }
}
