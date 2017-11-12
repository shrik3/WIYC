<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/go.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
    </script>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/semantic.min.js"></script>
    <script src="/js/my.js"></script>


</head>

<body>

<div class="ui sidebar inverted vertical menu">
    <a class="item">
        1
    </a>
    <a class="item">
        2
    </a>
    <a class="item">
        3
    </a>
</div>

<div class="pusher theme_bgc" style="background:#ebe8db">
    <div class="ui button" onclick="toggle()"><i class="sidebar icon"> </i>></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="min-width: 750px">
                    <div class="panel-heading">Waiting for you . </div>
                    <br>

                    <div class="ui items" style="padding: 10px">
                        <div class="item ">
                            <div class="image">
                                <img src="/images/cat1.jpg">
                            </div>
                            <div class="content">
                                <a class="header">Find him a home ! =w=</a>
                                <div class="meta">
                                    <span>Description</span>
                                </div>
                                <div class="description">
                                    <p>category : who knows </p>
                                    <p>age : 2 month</p>
                                    <p>location : 西安子科技大学（南校区）</p>
                                </div>
                                <div class="extra">
                                    Additional Details
                                </div>
                            </div>
                        </div>

                        <div class="item ">
                            <div class="image">
                                <img src="/images/cat2.jpg">
                            </div>
                            <div class="content">
                                <a class="header"> 珍爱生命，远离毒品</a>
                                <div class="meta">
                                    <span>Description</span>
                                </div>
                                <div class="description">
                                    <p>category : 喵喵喵 </p>
                                    <p>age : 3 months</p>
                                    <p>location : 西安子科技大学（北校区）</p>
                                </div>
                                <div class="extra">
                                    Additional Details
                                </div>
                            </div>
                        </div>

                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->

</body>
</html>
