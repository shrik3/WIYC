<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your BookStore =w=</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            background-color: #ebe8db;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
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
            font-size: 84px;
        }

        .banner {
            padding: 20px;
            margin: 15px;
        }

        .top_bar {
            height: 20px;
            width: auto;
            background-color: red;
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
    <div c1ass="top_bar"></div>
    @if (Route::has('login'))
    <div class='top_bar'>
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    </div>
    @endif

    <div class="content">
        <div class="banner">
            <img src="/images/11.jpg"
            />
        </div>
        <div class="title m-b-md">
            The answer is 42
        </div>

        <div class="links">
            <a href="/book">Book List</a>
            <a href="/recommend">Recommend</a>
            <a href="/review">Reviews</a>
            <a href="/home">MY</a>
        </div>
    </div>
</div>
</body>
</html>
