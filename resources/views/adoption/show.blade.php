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
                    <div class="panel-heading">Will you keep me ?</div>
                    <br>

                    <div class="ui items" style="padding: 10px">

                        <div class="item" style="box-shadow: none !important;"
                             onclick="location.href='{{url('adoption/'.$adoption->id)}}'">
                            <div class="content" style="margin-left: 0">

                                <div class="image">
                                    <img src="/images/{{$adoption->img}}" style="width:400px">
                                </div>
                                <br>
                                <a class="header">{{$adoption->title}}</a>
                                <div class="description">
                                    <p>category : {{$adoption->category}} </p>
                                    <p>location : {{$adoption->location}}</p>
                                    <p>updated : {{date('Y-m-d',strtotime($adoption->updated_at))}}</p>

                                </div>

                            </div>


                        </div>

                        <h4 class="ui horizontal divider header">

                            <i class="tag icon"></i>
                            Description
                        </h4>
                        <div class="content" style="margin-left: 0">

                            <br>
                            <div class="description">
                                <p>brief : {{$adoption->detail}}</p>
                                <p>vaccination : {{$adoption->vaccination}} </p>
                                <p>requirement : {{$adoption->requirement}}</p>
                                <br>

                                <div class="ui button basic" onclick="location.href='{{url('get/'.$adoption->id)}}'">I'd like to keep it</div>
                            </div>

                        </div>

                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->