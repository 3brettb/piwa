<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Create Account</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input id="firstname" type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo e(old('firstname')); ?>" required autofocus>
                            </div>

                            <div class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('firstname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input id="lastname" type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo e(old('lastname')); ?>" required>
                            </div>

                            <div class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('lastname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon">@</span>
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>