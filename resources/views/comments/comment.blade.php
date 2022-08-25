<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コメント投稿画面</title>
    </head>
    {{Auth::user()->name}}
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
    <body>
        <h1>コメント投稿画面</h1>
        <form action="/comments" method="POST">
            @csrf
            <div class="title">
                <h2>氏名</h2>
                <input type="text" name="comment[title]"/>
            </div>
            <div class="body">
                <h2>コメント内容</h2>
                <textarea name="comment[body]"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    @endsection
</html>