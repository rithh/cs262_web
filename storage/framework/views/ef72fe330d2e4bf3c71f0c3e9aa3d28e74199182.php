

<?php $__env->startSection('contents'); ?>
    <div class="container">
        <div class="login-form">
            <form method="post" action="<?php echo e(route('login')); ?>">
                <?php if(session('message')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
                <h2>Login</h2>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit">Submit</button>
            </form>
            <p class="signup">Don't have an acccount?
                You can <a href="/register">Register</a> with us right now.
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\web-project\resources\views/login.blade.php ENDPATH**/ ?>