<?php $__env->startSection('title'); ?>

    Welcome to omdb
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="wrapper">
        <div class="col-md-6">
        <form class="form-signup" method="post" action = "<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>

            <h2 class="form-signup-heading">Register</h2>
            <label >Name</label>
            <input class="form-control" name="first_name" id="first_name"  type="text" value="<?php echo e(Request :: old('first_name')); ?>" />
            <label >Email</label>
            <input class="form-control" name="email" id="email"  type="text" value="<?php echo e(Request :: old('email')); ?>" />
            <label >Password</label>
            <input class="form-control" name="password" id="password"  type="password" value="<?php echo e(Request :: old('password')); ?>" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </form>
        </div>
        <div class="col-md-6">
            <form class="form-signin" method="post" action = "<?php echo e(route('signin')); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <h2 class="form-signin-heading">Sign In</h2>
                <label >Email</label>
                <input class="form-control" name="email" id="email"  type="text" value="<?php echo e(Request :: old('email')); ?>" />
                <label >Password</label>
                <input class="form-control" name="password" id="password"  type="password" value="<?php echo e(Request :: old('password')); ?>" />
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>