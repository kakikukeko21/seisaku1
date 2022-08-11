<!DOCTYPE HTML>
<html　lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>氏名新規登録</title>
    </head>
    <body>
        <h1>氏名新規登録</h1>
        <form action="/posts" method="POST">
            @csrf
         <div class="title">
             <textarea name="post[title]" placeholder="氏名"></textarea>
        </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
