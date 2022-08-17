<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>オタマップ　検索一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @extends('layouts.app')　
        @section('content')
        
        @csrf
        <form action="/" method="POST">
            <input id="section_form" type="text" placeholder="作品名"/>
        </form>
        <button type="submit" form="serach_form">検索</button><br>
        
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <h3 class="title">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h3>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a><br>
                <p>{{ $post->user->name }}</p>
            </div>
            @endforeach
        </div>
        
        [<a href='/posts/create'>create</a>]<br>
        
        
        @csrf
        @method('DELETE')
        <button type="submit">delete</button> 
        </form>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        @endsection
    </body>
</html>