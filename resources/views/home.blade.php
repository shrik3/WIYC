@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br>
                <a  href="my/order" class="btn btn-lg btn-primary" style="width:80%;margin-left:10%">我的订单</a>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
