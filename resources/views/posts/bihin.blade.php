<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>備品登録画面</title>
    </head>
    <body>
        <h1>備品登録画面</h1>
        <form action="/posts" method="POST">
            @csrf
         <div class="title">
            <textarea name="post[title]" placeholder="備品名"></textarea>
        </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>