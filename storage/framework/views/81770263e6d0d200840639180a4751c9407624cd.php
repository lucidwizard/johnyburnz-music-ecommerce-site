<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">


        <div class="row">
            <div class="pt-3" style="margin-left: 20px; z-index: 1;">
                <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/posts/show/".$post->user->id)); ?>'">Back</button>
            </div>

            <div class="col" style="z-index: -1;">
                <img src="/storage/<?php echo e($post->image); ?>" alt="" style="width: 800px;">
            </div>

            <div class="col pt-3">
                <div class="row align-items-center">
                    <div>
                        <img src="/storage/<?php echo e($post->user->profile->image); ?>" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div class="pl-2">
                        <div class="font-weight-bold">
                            <a href="/profile/show/<?php echo e($post->user->id); ?>" class="text-dark">
                                <?php echo e($post->user->username); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="">
                    <div class="text-muted" style="font-weight: bold; font-size: medium">
                        <span class="font-weight-bold">
                            <a href="/profile/show/<?php echo e($post->user->id); ?>" class="text-dark">
                                <?php echo e($post->user->username); ?>

                            </a>
                        </span>
                        <form action="/posts/update" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                            <input type="text" name="caption" value="<?php echo e($post->caption); ?>">

                            <div class="mt-3">
                                <button class="btn btn-primary">Save Caption</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>



    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/posts/edit.blade.php ENDPATH**/ ?>