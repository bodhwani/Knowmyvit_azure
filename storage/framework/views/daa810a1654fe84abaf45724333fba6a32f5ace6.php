<?php $__env->startSection('content'); ?>
    <?php foreach($movies as $movie): ?>
        <div>
    <?php echo e($movie->text); ?>

        </div>
    <?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>