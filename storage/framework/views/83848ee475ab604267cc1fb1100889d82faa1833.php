<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Add New Post</h1>
                <div>
                    <div><?php echo e($user->name); ?></div>
                    <div><?php echo e($user->username); ?></div>
                    <div><?php echo e($user->post->caption ?? "No Caption"); ?></div>
                    <div><?php echo e($user->post->image ?? "No Image"); ?></div>
                    <div><?php echo e($user->post->media ?? "No Media"); ?></div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/posts/newPost.blade.php ENDPATH**/ ?>