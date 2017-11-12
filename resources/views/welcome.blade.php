<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your BookStore =w=</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="/css/semantic.min.css">

    <!-- Styles -->
    <style>
    /* <script src="/js/semantic.min.js"> </script> */
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            background-color: #ebe8db;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
        }


        .top-right {
            position: absolute;
            right: 5%;
            top: 18px;
        }

        .links a:hover {
            color: red;
        }

        .content {
            text-align: center;
            padding-bottom: 50px;
        }

        .title {
            font-size: 84px;
        }

        .banner {
            padding: 20px;
            margin: 15px;
        }
        
        .image_container {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .top_bar {
            height: 30px;
            width: auto;
         
        }

        .links > a {
            color: #636b6f;

            padding: 0 25px;
            font-size: 17px;
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
            <div class="image_container">
            <img width="100%" src="/images/11.jpg"/>
            </div>
        </div>
        <div class="title m-b-md">
            Who is your owner ?
        </div>

        <div class="links">
            <a href="/adoption">领养</a>
            <a href="/recommend">送养</a>
            <a href="/review">闲逛</a>
            <a href="/home">我的</a>
        </div>
    </div>

</body>
</html>
