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
<div>
  <form action="{{ route('comedies.index') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>
<h1>
  <span>検索結果</span>
  <a href='/quiz'>[クイズ]</a>
</h1>

<table>
  <tr>
    <th>漫才師</th><th>文字起こし</th>
  </tr>

            @forelse ($comedies as $comedy)
    　　<tr>
      <td><a href="/comedies/{{ $comedy->id }}">{{ $comedy->comedian->name }} {{ $comedy->title }} {{ $comedy->year }} {{ $comedy->rank }}</td></a>
      <td>{{ $comedy->script }}</td>
    　　</tr>
  　　　　@empty
    　　<td>該当する漫才がありません</td>
  　　　　@endforelse
　　　　</table>
        </div>
    </body>
</html>