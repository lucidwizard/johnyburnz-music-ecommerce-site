<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('title', 'Johny Burnz')); ?></title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(asset('css/burnz.css')); ?>" type="text/css" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/app.css">-->
    <link rel="stylesheet" href="spin.js/spin.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <?php echo $__env->yieldContent('link'); ?>
    <style><?php echo $__env->yieldContent('style'); ?></style>



</head>
<body>
    <div id="app" style="position: relative">
        <div class="row" style="position: absolute; left: 0px; top: 0px;">
            <div class="col-lg-2 col-md-2 col-sm-3" style="position: absolute; left: 20px; top: 85px;">
                <img src="../../default/burnz_with_colour.svg" style="width: 15vw; height: auto">
            </div>
        </div>
        <div class="container">

            <?php if(auth()->user()): ?>
                <?php echo $__env->make('private.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <?php echo $__env->yieldContent('script'); ?>
    <!--
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
</body>
</html>
<?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/layouts/app.blade.php ENDPATH**/ ?>