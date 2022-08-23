<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    {{Auth::user()->name}}
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
    <body>
        <h1>今日の備品管理者</h1>
        @can('isAdmin')
        [<a href='/posts/bihin'>備品および氏名氏名新規登録</a>]
        @endcan
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='posts'>
                    <h3 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h3>
                    <a>氏名:{{ $post->name->title }}</a>
                </div>
            @endforeach
        </div>
        [<a href='/posts/commentcreate'>コメント</a>]
    </body>
    @endsection
</html>