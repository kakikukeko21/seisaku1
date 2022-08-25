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
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <a>氏名:{{ $post->name->title }}</a>
                </div>
            @endforeach
        </div>
        [<a href='/comments/comment'>コメント投稿</a>]
        <h3>コメント</h3>
        <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                   
                      <a href="/comments/{{ $comment->id }}">氏名:{{ $comment->title }}</a>
                    <p class='body'>{{ $comment->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
    @endsection
</html>