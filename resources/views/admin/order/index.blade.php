@extends('layouts.app')

@section('content')


<link rel="stylesheet" type="text/css" href="/css/go.css">



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Orders</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif


                    @foreach ($orders as $order)
                        <hr>

                        <div class="book" style="background-color:white" >

                            <div class="info" style="margin-left:0">
                                <div class="temp" style="width:60%;float:left">
                                <h5 style="line-height:150%">
                                    Name : {{ $order->bookname }}
                                    <br>
                                    ISBN : {{ $order->sISBN}}
                                    <br>
                                    Order_no : {{ $order->id }}
                                    <br>
                                    Amount : {{$order->amount}}
                                    <br>
                                    Customer : {{$order->true_name}}
                                    <br>
                                    Address : {{$order->address}}
                                    <br>
                                    Tel     :{{$order->tel}}
                                    <br>
                                    Status  :{{$order->status}}
                                </h5>
                                </div>
                                <div class="button-field" style=";
                                width:150px;margin-left:60%">
                                    OPERATIONS: <br><br>
                                    @if($order->status=="unpaid")
                                    <a href="{{ url('admin/mark/paid/'.$order->id) }}" class="btn btn-lg btn-primary" style="
                                    padding:3px;width:130px;margin-bottom:5px">MARK as PAID</a>
                                    @endif

                                    @if($order->status=="paid")
                                    <a href="{{ url('admin/mark/pended/'.$order->id) }}" class="btn btn-lg btn-primary" style="
                                    padding:3px;width:130px;margin-bottom:5px">PEND IT</a>
                                    @endif


                                    <a href="{{ url('admin/order/delete/'.$order->id) }}" class="btn btn-lg btn-primary" style="
                                    padding:3px;width:130px;margin-bottom:5px;background-color:red">DELETE</a>

                                </div>
                            </div>

                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
