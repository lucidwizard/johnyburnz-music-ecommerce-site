<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Profile Page</h1>
                <div>
                    <div><?php echo e($user->name); ?></div>
                    <div><?php echo e($user->username); ?></div>
                    <div><?php echo e($user->profile->title ?? "No Title"); ?></div>
                    <div><?php echo e($user->profile->instrument ?? "No Instrument"); ?></div>
                    <div><?php echo e($user->profile->description ?? "No Description"); ?></div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/profile.blade.php ENDPATH**/ ?>