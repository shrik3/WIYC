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
	<?php if(Route::has('login')): ?>
    <div class='top_bar'>
		<div class='top-middle'>
			<h4 align='middle'>Your Book Store</h4>

		</div>
        <div class="top-right links">
             <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
             <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>">Login</a>
                <a href="<?php echo e(url('/register')); ?>">Register</a>
			<?php endif; ?>
        </div>
    </div>
	<?php endif; ?>


<div id="content-body">
	<!-- 侧栏 -->
	<div id="sidebar">
			<div class="part2">
				<a href="<?php echo e(url('book/'.$book->sISBN)); ?>">
					<img height="150" width="150px" src="<?php echo e(url('/images/'.$book->img)); ?>"/>
				</a>
				<div class="info">
					<p>Name : <?php echo e($book->name); ?></p>
					<p>Info : <?php echo e($book->info); ?></p>
					<br>
					<p>price : <em class="price"><?php echo e($book->sale_price); ?></em></p>
					<br>
					<!-- <a href="/book" >
						<button type="button" class="mbutton"  >BUY</button>
					</a> -->
				</div>

			</div>

	</div>

	<div id="books-body">
		<h3 > Create a new order </h3>
		<hr>

		<?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>failed</strong> <br><br>
                    <?php echo implode('<br>', $errors->all()); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(url('my/order/new/'.$book->sISBN)); ?>" method="POST" enctype="multipart/form-data">
        	<?php echo csrf_field(); ?>

                <input type="text" name="name" class="form-control" style="font-weight:normal" required="required" placeholder="真实姓名">
                    <br>
                <input type="text" name="tel" class="form-control" style="font-weight:normal"  required="required" placeholder="联系电话">
                    <br>
                <input type="text" name="address" class="form-control" style="font-weight:normal"  required="required" placeholder="邮寄地址">
                    <br>
                <input type="text" name="amount" class="form-control" style="font-weight:normal"  required="required" placeholder="输入订购数量">
                    <br>
                <input type="text" name="note" class="form-control" style="font-weight:normal"  placeholder="备注（特殊要求等）">
                    <br>


				<button class="btn btn-lg btn-info">CONFIRM</button>
        </form>



	</div>


</div>


</body>
</html>
