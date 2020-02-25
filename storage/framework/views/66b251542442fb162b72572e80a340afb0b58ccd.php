<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">


        <div class="row">
            <div class="pt-3" style="margin-left: 20px;">
                <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/imageGallery")); ?>'">Back</button>
            </div>

            <div class="col-12" style="">
                <img src="/storage/<?php echo e($post->image); ?>" alt="" style="width: 100%;">
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
                        <?php echo e($post->caption); ?>

                    </div>
                </div>
            </div>



        </div>



    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/showImage.blade.php ENDPATH**/ ?>