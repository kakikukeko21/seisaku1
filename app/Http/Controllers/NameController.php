<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\name;

class NameController extends Controller
{
     public function index(Post $post)
     {
       return view('posts/index')->with(['posts' => $name->get()]);
     } 
     
    public function nameshow(name $name)
     {
       return view('names/nameshow')->with(['name' => $name]);
     }
     
      public function shimei()
     {
        return view('names/shimei');
     }
     
     public function store(Request $request, name $name)
     {
       $input = $request['name'];
       $name->fill($input)->save();
       return redirect('/names/' . $name->id);
     }
    
}
