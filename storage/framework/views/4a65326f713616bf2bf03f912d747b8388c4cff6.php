<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<title><?php echo e(config('app.name', 'SSS2')); ?></title>
</head>


<body>
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH D:\UWS 4th Year\SSS\htdocs\SSS2\resources\views/layouts/app.blade.php ENDPATH**/ ?>