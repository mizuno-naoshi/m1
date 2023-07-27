<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>漫才検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>漫才検索</h1>
        <div class='comedies'>
            @foreach ($comedies as $comedy)
                <div class='comedy'>
                    <h2 class='title'>
                        <a href="/comedies/{{ $comedy->id }}">{{ $comedy->comedian->name }} {{ $comedy->title }} {{ $comedy->year }} {{ $comedy->rank }}</a>
                        </h2>
                    <p class='body'>{{ $comedy->script }}</p>
                </div>
            @endforeach
            <a href='/comedies/quiz'>クイズ</a>
        </div>
    </body>
</html>