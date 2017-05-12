<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MY ORDERS</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	  <link rel="stylesheet" type="text/css" href="/css/app.css">
	  <link rel="stylesheet" type="text/css" href="/css/base.css">
	  <link rel="stylesheet" type="text/css" href="/css/go.css">
       <!-- Styles -->

</head>
<body>
	@if (Route::has('login'))
    <div class='top_bar'>
		<div class='top-middle'>
			<h4 align='middle'>Your Book Store</h4>

		</div>
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

<!-- 搜索框 -->
<div>
	<form class="search" action="">
	<input type="search" placeholder="Find your joy here ... " required>
	<button type="submit">Search</bBookutton>
</form>
</div>

<div id="content-body">
	<!-- 侧栏 -->


	<div id="orders-body">

		<div class='info2'>
			<h3>我的订单</h3>
			<hr>

		 </div>

	</div>

	<div id="orders-body">

			<br>
			<br>

			@foreach ($orders as $order)

        <hr>

            <div class="book" >
                <div class="bookimg" style="background-color:#fff;" >
                    <img src="{{url('/images/'.$order->img)}}"
                        width="130px";
                    >
                </div>

                    <div class="order_info" >
						<div class='temp' style="width:70%;margin:0">
						<h5 style="line-height:150%;font-weight:normal;font-size:120%;">
                            书名 : {{ $order->bookname }}
                            <br>
                            出版信息 : {{ $order->bookinfo }}
                            <br>
                            单价 : {{$order->price_per}}
                            <br>
							数量 : {{$order->amount}}
                            <br>
							总价 : {{$order->amount * $order->price_per}}
                            <br>

							<em style="font-weight:bold;color:red">
							状态 : {{$order->status}}
						</em>
                        </h5>
						</div>
						@if ($order->status == 'unpaid')
            				<a  href="{{ url('my/order/pay/'.$order->id) }}" class="btn btn-lg btn-primary"
							style="background-color:red;color:white;margin-left:0%;margin-top:0;padding:5px; ">
						    	点击付款
							</a>
						@endif

						@if ($order->status == 'pending')
							<a  href="{{ url('my/order/confirm/'.$order->id) }}" class="btn btn-lg btn-primary"
							style="background-color:red;color:white;margin-left:0%;margin-top:0;padding:5px; ">
								确认收货
							</a>
						@endif


							<a  href="{{ url('comment/new/'.$order->sISBN) }}" class="btn btn-lg btn-primary"
							style="background-color:#fff;color:black;margin-left:0%;margin-top:0;padding:5px; ">
								-写评论-
							</a>


                    </div>

            </div>

			 @endforeach


	</div>


</div>


</body>
</html>
