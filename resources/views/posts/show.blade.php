<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    {{Auth::user()->name}}
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <a>氏名:{{ $post->name->title }}</a>
        <div class="content">
            <div class="content__post">
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <div>
        @can('isAdmin')
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
    　　　@csrf
    　　　@method('DELETE')
    　　　<button onclick="deletePost(this);">delete</button>
　　　　</form>
　　　　</div>
　　　　<script>
　　　　function deletePost(e){
　　　　'use strict';
　　　　    if(confirm('削除すると復元できません\n本当に削除しますか？')){
　　　　    document.getElementById('from_delete ').submit();
　　　　   }
　　　　}
　　　　</script>
　　　　 @endcan
    </body>
    @endsection
</html>