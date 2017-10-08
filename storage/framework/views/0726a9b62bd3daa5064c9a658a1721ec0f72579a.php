<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">User Login</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>            
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required autofocus>
                            </div>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4">Login</button>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo e(route('password.request')); ?>" class="btn btn-link px-0">Forgot password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>
                                Sign up to gain access to this cutting edge Project and Issue Management Web Application. 
                                Use PIWA to increase your team and project productivity and organization!
                            </p>
                            <a href="<?php echo e(route('register')); ?>" class="btn btn-primary active mt-3">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>