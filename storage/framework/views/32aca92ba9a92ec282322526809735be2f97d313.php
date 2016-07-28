<?php $__env->startSection('title'); ?>
	Movie_review
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
</head>
<body>
<div class='col-lg-4 col-lg-offset-4'>
<div class='form-group'>
	<input type='text' id='search-input' class='form-control' placeholder="Search" onkeydown="down()" onkeyup="up()" />
	<div class="col-lg-12" id='search-results'>

	</div>
	
</div>
</div>
<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
<script src='http://maxcdn.bootstrapodn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
<script src='<?php echo e(asset('js/search.js')); ?>'></script>
</body>
</html>
	<?php foreach( $movies as $movie): ?>
	
		<?php echo e($movie->text); ?>

		<?php echo e($movie->description); ?>

		</br>
		<!-- <img src="<?php echo e(asset("movie_images/lucy1.jpg")); ?>" alt="<?php echo e($movie->image); ?>" id='<?php echo e($movie->id = 1); ?>' /> -->
		<?php echo e($movie->image); ?>

		
		
		
		<p>Hey there</p>
	<?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.look', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>