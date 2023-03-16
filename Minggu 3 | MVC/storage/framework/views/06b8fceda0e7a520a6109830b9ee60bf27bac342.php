<?php $__env->startSection('content'); ?>
    <div class="div1">
        <h1>Home Page</h1>
        <p>This is the Home Page</p>
        <p><?php echo e($nama); ?></p>
        
        <ul>
            
            <?php $__currentLoopData = $pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('minggu3.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mphstar/Development/Workshop Web/Minggu 3 | MVC/resources/views/minggu3/home.blade.php ENDPATH**/ ?>