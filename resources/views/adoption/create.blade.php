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
                    <div class="panel-heading">find me a home </div>
                    <br>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>新增失败</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ url('giveaway') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="text" name="title" class="form-control" required="required"
                                   placeholder="标题">
                            <br>
                            <input type="text" name="category" class="form-control" required="required"
                                   placeholder="宠物品种">
                            <br>
                            <input type="text" name="location" class="form-control" required="required"
                                   placeholder="你在哪儿？">
                            <br>
                            <textarea name="detail" rows="10" class="form-control" required="required"
                                      placeholder="简介"></textarea>
                            <br>
                            <textarea name="contact" rows="4" class="form-control" required="required"
                                      placeholder="联系方式（只有认证用户才能看到）"></textarea>
                            <br>
                            <textarea name="vaccination" rows="4" class="form-control" required="required"
                                      placeholder="疫苗接种情况"></textarea>
                            <br>
                            <textarea name="requirement" rows="10" class="form-control" required="required"
                                      placeholder="对收养者的要求"></textarea>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    Upload a photo
                                    <input type="file" name="image" required="required"/>
                                </div>
                            </div>
                            <br>
                            <button class="ui fluid button primary">find him/her a home</button>
                        </form>

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
