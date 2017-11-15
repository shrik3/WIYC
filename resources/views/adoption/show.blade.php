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
    <div class="image">
        <img src="/images/icon.jpg" style="width: 100%;">
    </div>
    <br>
    <a class="item" href="{{url('userinfo')}}">
        我的信息
        <br>
        <a class="item" href="{{url('adoption')}}">
            我要领养
        </a>
        <a class="item" href="{{url('giveaway')}}">
            我要送养
        </a>
        <br>
        <a class="item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
            退出登陆
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
</div>

<div class="pusher theme_bgc" style="background:#ebe8db">
    <div class="ui button" onclick="toggle()" style="position: fixed !important;top: 0;"><i class="sidebar icon " > </i>></div>
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

                                <div class="image ">
                                    <img src="/images/{{$adoption->img}}"
                                         style="width:400px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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

                                <div class="ui button basic" onclick="location.href='{{url('get/'.$adoption->id)}}'">I'd
                                    like to keep it
                                </div>
                            </div>

                        </div>

                        <br>


                    </div>
                </div>
                <div class="panel panel-default" style="min-width: 750px">
                    <br>
                    <h4 class="ui horizontal divider header">

                        <i class="tag icon"></i>
                        Comments
                    </h4>

                    <br>
                    <br>

                    @foreach ($comments as $comment)

                        <div class="one" style="border-top: solid 2px #efefef; padding: 5px 20px;">
                            <div class="nickname" data="{{ $comment->nickname }}">

                                <em style="font-weight:bold; font-size:100%">{{$comment->title}} </em>
                                by {{ $comment->user_name }} @ {{$comment->created_at}}
                            </div>
                            <div class="content" style="text-align:left; ">
                                <p style="padding: 5px;font-weight:normal;font-size:120%">
                                    {{ $comment->content }}
                                </p>
                            </div>

                        </div>

                    @endforeach
                    <div class="content" style="width:80%;margin-left: 10%" >
                        <form action="{{ url('comment/new/'.$adoption->id) }}" method="POST"
                              enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="text" name="title" class="form-control" required="required"
                                   placeholder="title">
                            <br>
                            <textarea name="content" id="newFormContent" class="form-control" rows="5"
                                      required="required" placeholder="content"></textarea>
                            <br>
                            <button class="ui basic button">Submit comment</button>
                            <br>
                            <br>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->