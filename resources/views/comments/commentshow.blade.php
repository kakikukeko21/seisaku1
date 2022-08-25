<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comments</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            <p>氏名</p>
            {{ $comment->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $comment->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
         <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post" style="display:inline">
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
    </body>
</html>