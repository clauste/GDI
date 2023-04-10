<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>GDI | <?php echo $__env->yieldContent('title'); ?></title>

    <?php echo $__env->make('backend.layout.stylesheets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('stylesheets'); ?>
</head>
<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled show">
            <?php echo $__env->make('backend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('backend.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <!-- Landing Banner -->
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('backend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('backend.layout.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
    <?php echo $__env->yieldContent('scripts'); ?>

    <script>
    </script>

</body>
</html><?php /**PATH C:\Code\xampp\htdocs\clauste\GDI\resources\views/backend/layout/app.blade.php ENDPATH**/ ?>