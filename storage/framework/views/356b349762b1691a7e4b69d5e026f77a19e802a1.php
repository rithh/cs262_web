

<?php $__env->startSection('contents'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<div class="register-form">
    <form method="post" action="<?php echo e(route('register')); ?>">
        <h2>Registration</h2>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input type="text" name="name" placeholder="Username" class="form-control p_input">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control p_input">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control p_input">
        </div>
        <button type="submit">Register</button>
    </form>
    <p class="login"> Already have an account? You can <a href="/login">login</a> here.
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web-project\resources\views/register.blade.php ENDPATH**/ ?>