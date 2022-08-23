<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>備品登録画面</title>
    </head>
    {{Auth::user()->name}}
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
    <body>
        <h1>備品登録画面</h1>
         [<a href='/names/shimei'>氏名新規登録</a>]
        <form action="/posts" method="POST">
            @csrf
         <div class="title">
            <textarea name="post[title]" placeholder="備品名"></textarea>
        </div>
        <div　class='name'>
            <select name="post[name_id]"> 
                <option>氏名</option>
                @foreach ($names as $name)
                <option value="{{$name->id}}">{{ $name->title }}</option>
                @endforeach
            </select>
        </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
    @endsection
</html>