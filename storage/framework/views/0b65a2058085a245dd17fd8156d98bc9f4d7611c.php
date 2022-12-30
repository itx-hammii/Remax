<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    
    <link href="//db.onlinewebfonts.com/c/2622744283657bd23026cb39789aeff4?family=Hazard!" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/bootstrap/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(asset('lib/bootstrap/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/bootstrap/bootstrap.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('lib/jquery-validation/jquery-validation.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH /home/triixa/Learn/Remax/resources/views/layouts/master.blade.php ENDPATH**/ ?>