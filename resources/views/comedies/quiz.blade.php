<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>漫才検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @foreach($quizzes as $quiz) 
        <h1 class="title">
            {{ $quiz->question }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>答え</h3>
                <p>{{ $quiz->answer }}</p>    
            </div>
        </div>
        @endforeach
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>