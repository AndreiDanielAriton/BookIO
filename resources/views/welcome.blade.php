<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BookIO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        @if (isset($posts))
            <div class="container">
                <div class="row">
                    @foreach($posts->items as $book)
                        <div class="col">
                            @if(isset($book->volumeInfo->title))
                                <h1>{{$book->volumeInfo->title}}</h1>
                            @endif

                            @if(isset($book->volumeInfo->publisher))
                                <h5>{{$book->volumeInfo->publisher}}</h5>
                            @endif

                            @if(isset($book->volumeInfo->description))
                                <div>{{$book->volumeInfo->description}}</div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </body>
</html>
