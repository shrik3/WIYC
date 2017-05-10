<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Details</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	  <link rel="stylesheet" type="text/css" href="/css/app.css">
	  <link rel="stylesheet" type="text/css" href="/css/base.css">
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
	<div id="sidebar">
			<div class="part2">
				<a href="{{url('book/'.$book->sISBN)}}">
					<img height="150" width="150px" src="{{url('/images/'.$book->img)}}"/>
				</a>
				<div class="info">
					<p>Name : {{$book->name}}</p>
					<p>Info : {{$book->info}}</p>
					<br>
					<p>price : <em class="price">{{$book->sale_price}}</em></p>
					<br>
					<!-- <a href="/book" >
						<button type="button" class="mbutton"  >BUY</button>
					</a> -->
				</div>

				<a href="/my/order/new/{{$book->sISBN}}" >
					<button type="button" class="mbutton"  >BUY</button>
				</a>
			</div>

	</div>

	<div id="books-body">

		<div class='info2'>
			<h3>简介</h3>
			<hr>
			{{$book->brief}}

		 </div>

	</div>
	<div id="books-body">

			<h3>读者评论</h3>
            <a  href="{{ url('admin/comment/create') }}" class="btn btn-lg btn-primary" style="background-color:#ffffff; color:black">写评论</a>
			<br>
			<br>

			@foreach ($comments as $comment)

				 <div class="one" style="border-top: solid 2px #efefef; padding: 5px 20px;">
					 <div class="nickname" data="{{ $comment->nickname }}">

						 <em style="font-weight:bold; font-size:150%">{{$comment->title}} </em>
						 by {{ $comment->user_name }} @ {{$comment->created_at}}
					 </div>
					 <div class="content" style="text-align:left; ">
						 <p style="padding: 5px;font-weight:normal;font-size:120%">
							 {{ $comment->content }}
						 </p>
					 </div>

				 </div>

			 @endforeach


	</div>


</div>


</body>
</html>
