<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Name;
use App\User;
use Gate;


class PostController extends Controller
{
    public function index(Post $post,Name $name)
     {
       return view('posts/index')->with(['posts' => $post->getPaginateByLimit(),'names' => $name->get()]);
     
        Gate::authorize('isAdmin');
        $users = User::all();
        return view('users.index',compact('users'));
     } 
     
    public function show(Post $post)
     {
       return view('posts/show')->with(['post' => $post]);
     }
     
    public function store(Post $post,Name $name, Request $request)
     {
       $input = $request['post'];
       $post->fill($input)->save();
       return redirect('/posts/' . $post->id,);
       
     }
     
    public function edit(Post $post)
     { 
       return view('posts/edit')->with(['post' => $post]);
     }

    public function update(PostRequest $request, Post $post, $id)
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
 
    public function shimei(name $name)
     {
        return view('names/shimei')->with(['names' => $name->get()]);;
     }
    
    public function bihin(Name $name)
     {
        return view('posts/bihin')->with(['names' => $name->get()]);;
     }
}
