<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wrong Time Clock</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Fugaz One', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 50px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="content">
            The time is not…
            <div class="title m-b-md">
                {!! $time->format('l jS \\of F Y <b\r>h:i:s A') !!}
            </div>
            <small>…it's actually {{ \Carbon\Carbon::now()->diffForHumans($time) }} that!</small>

            {{--<div class="links">--}}
                {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                {{--<a href="https://laracasts.com">Laracasts</a>--}}
                {{--<a href="https://laravel-news.com">News</a>--}}
                {{--<a href="https://forge.laravel.com">Forge</a>--}}
                {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
            {{--</div>--}}
        </div>
    </div>
</body>
</html>