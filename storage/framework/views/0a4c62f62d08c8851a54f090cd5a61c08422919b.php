<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>My Posts</h1>
                <div>
                    <div><?php echo e($user->name); ?></div>
                    <div><?php echo e($user->username); ?></div>
                    <div><button class="btn btn-primary" onclick="window.location='<?php echo e(url("newPost/".$user->id)); ?>'">Add New Post</button></div>
                    <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div><?php echo e($post->caption ?? "No Caption"); ?></div>
                        <div><?php echo e($post->image ?? "No Image"); ?></div>
                        <div><?php echo e($post->media ?? "No Media"); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/posts/myPosts.blade.php ENDPATH**/ ?>