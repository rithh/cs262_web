

<?php $__env->startSection('contents'); ?>
    <div class="container">
        <div class="ticket">
            <h1>Booking</h1>
            
            <?php $__currentLoopData = $tpl_bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row mt-3" id="sum_div">
                    <h3>Trip Summary</h3>
                    <div class="col-12">
                        <hr>
                        <p>Direction : <?php echo e($bus->depart_from); ?> to <?php echo e($bus->arrive_at); ?></p>
                        <hr>
                        <p>Departure : February 1, 2023 <?php echo e($bus->depart_time); ?></p>
                        <hr>
                        <p>Operator : <?php echo e($bus->op_name); ?></p>
                        <hr>
                        <p>Type : VIP Van</p>
                        <hr>
                        <p># of Passengers : 1</p>
                        <hr>
                        <p>Total : USD <?php echo e($bus->price); ?></p>
                        <script></script>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\studies\paragon\Y3\SEMESTER 1\CS 262 - Advanced Web\web-project\resources\views/ticket_detail.blade.php ENDPATH**/ ?>