@extends('layouts.app')

@section('content')


<style>

.book{

}

</style>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Storage</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <a href="{{ url('admin/book/create') }}" class="btn btn-lg btn-primary">新增</a>

                    @foreach ($books as $book)
                        <hr>
                        <div class="book" style="padding:10px;height:auto; overflow:hidden;">
                            <div class="bookimg" style="float:left; margin:10px; padding:10px; width:200px;">
                                <img src="{{url('/images/'.$book->img)}}"
                                    width="130px";

                                    style="margin-top:15px"
                                >
                            </div>

                            <div class="info" style="margin-left:210px;padding:10px; background-color:red;">
                                <h5 style="line-height:150%">
                                    Name : {{ $book->name }}
                                    <br>
                                    Info : {{ $book->info }}
                                    <br>
                                    Price : {{$book->sale_price}} ￥
                                    <br>
                                    Storage : {{$book->amount}}
                                    <br>
                                    Brief : {{$book->brief}}
                                </h5>
                            </div>

                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
