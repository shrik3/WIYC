<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Books</title>

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
	<button type="submit">Search</button>
</form>
</div>

<div id="content-body">
	<!-- 侧栏 -->
	<div id="sidebar">
		<h1>分类</h1>
		<ul class="links">
		  <li><a href=""><p>文学</p></a></li>
		  <li><a href=""><p>科幻</p></a></li>
			<li><a href=""><p>古典</p></a></li>
		  <li><a href=""><p>某分类</p></a></li>
		</ul>
	</div>

	<div id="books-body">

			@foreach ($books as $book)
			<div class="part1">
				<a href="{{url('book/'.$book->sISBN)}}">
					<img height="150" width="150px" src="{{url('/images/'.$book->img)}}"/>
				</a>
				<div class="info">
					<p>Name : {{$book->name}}</p>
					<p>Info : {{$book->info}}</p>
					<p>price : {{$book->sale_price}}</p>


				</div>
			</div>
			@endforeach

	</div>


</div>


</body>
</html>
