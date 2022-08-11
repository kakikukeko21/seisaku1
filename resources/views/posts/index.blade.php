<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>今日の備品管理者</h1>
           [<a href='/posts/bihin'>備品新規登録</a>]
            [<a href='/posts/shimei'>氏名新規登録</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                     <select name="shmei[title]"> 
                     <option>氏名</option>
                     @foreach ($posts as $post)
                    <option value="{{$post->id}}">{{ $post->title }}</option>
                     @endforeach
                    </select>
                </div>
            @endforeach
            </div>
         [<a href='/posts/commentcreate'>コメント</a>]
    </body>
</html>