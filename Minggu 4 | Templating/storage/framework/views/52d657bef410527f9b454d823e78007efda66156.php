<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main/app-dark.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/logo/favicon.svg')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/logo/favicon.png')); ?>" type="image/png">

    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/shared/iconly.css')); ?>">

</head>

<body>
    <div id="app">
        
        <?php echo $__env->make('mphstar.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="">

        </div>

        <?php echo $__env->yieldContent('main'); ?>

    </div>
    <script src="<?php echo e(asset('admin/assets/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/app.js')); ?>"></script>

    <!-- Need: Apexcharts -->
    <script src="<?php echo e(asset('admin/assets/extensions/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/pages/dashboard.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home/mphstar/Development/Workshop Web/Minggu 4 | Templating/resources/views/mphstar/admin/app.blade.php ENDPATH**/ ?>