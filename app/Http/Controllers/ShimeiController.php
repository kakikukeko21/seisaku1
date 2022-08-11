<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Shimei;
use App\Http\Requests\CommentRequest;
use App\Comment;

class ShimeiController extends Controller
{
    public function index(Shimei $shimei)
     {
       return view('shimeis/index')->with(['shimeis' => $shimei->getPaginateByLimit()]);
     } 
     
    public function show(shimei $shimei)
     {
       return view('shimeis/show')->with(['shimei' => $shimei]);
     }
     
     public function store(Shimei $shimei, Request $request)
     {
       $input = $request['shimei'];
       $post->fill($input)->save();
       return redirect('/shimeis/' . $shimei->id);
     }
     public function delete(Shimei $shimei)
     {
       $shimei->delete();
       return redirect('/');
     }
     
     public function shimei()
     {
        return view('shimeis/shimei');
     }
}