<!DOCTYPE HTML>
<html　lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>氏名新規登録</title>
    </head>
    {{Auth::user()->name}}
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
    <body>
        <h1>氏名新規登録</h1>
        <form action="/names" method="POST">
            @csrf
            <div class="title">
                <input type="text" name="name[title]" placeholder="氏名"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
            <div class='names'>
            @foreach ($names as $name)
                <div class='name'>
                    <h2 class='title'>{{ $name->title }}</h2>
                </div>
            @endforeach
        </div>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
    @endsection
</html>
