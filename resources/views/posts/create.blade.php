<!DOCTYPE html>
<html lang={{ str_replace("_", "-", app()->getLocale()) }}>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>オタマップ　投稿</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
        <link href="{{ asset('/css/create.css') }}" rel="stylesheet"/>
        <script src="{{ asset('js/scripts.js') }}"></script>

    </head>
    <body id="page-top">
        @extends('layouts.app')　
        @section('content')
       <!-- ハンバーガーアイコン-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="/mypage">マイページ</a></li>
                <li class="sidebar-nav-item"><a href="/">TOP</a></li>
                <li class="sidebar-nav-item"><a href="/search">検索</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h3 class="mb-5"><em>オタク活動支援サイト</em></h3>
                <h1 class="mb-1">オタマップ</h1>
            </div>
        </header>
        
        <div class="main">
            <div class="container">
            
        <form action="{{ action('PostController@store') }}" method ="post" enctype="multipart/form-data">
            @csrf
            <div class="text-left justify-content-center">
            <div class="form-group">
                <h1 class="creation_item"><span>01</span>地名</h1>
                <input type="text" class="form-control" name="post[spot]" placeholder="地名" value="{{ old('post.spot') }}"/>
            </div>
            
            <div class="form-group">
                <h1 class="creation_item"><span>02</span>住所</h1>
                <input type="text" class="form-control" name="post[address]" placeholder="住所" value="{{ old('post.address') }}"/>
            </div>
            
            <div class="form-group">
                <h1 class="creation_item"><span>03</span>作品名</h1>
                <h2>{{ $title->name }}</h2>
                <input type="hidden" name="post[title_id]" value="{{$title->id}}"/>
            </div>
            
           
            <div class="form-group">
                <h1 class="creation_item"><span>04</span>投稿内容</h1>
                <textarea class="form-control" name="post[body]" placeholder="本文">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post/body') }}</p>
            </div>
            
            <h1 class="creation_item"><span>05</span>画像投稿</h1>
                <input type="file" name="image">
            
            <input type="submit" value="保存"/>
            </form>
        
            <a href="/search" class="back">検索一覧に戻る</a>
        
        </div>
        </div>
        </div>
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
       
       
        
        @endsection
    </body>
</html>
