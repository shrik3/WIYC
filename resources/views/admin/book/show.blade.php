
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Books</title>

	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
		<div class="part1">
		</div>
	</div>


	<div id="books-body">


	</div>


</div>


</body>
</html>
