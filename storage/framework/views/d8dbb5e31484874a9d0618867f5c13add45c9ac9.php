<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::to('src/css/main.css')); ?>">
</head>
<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>



