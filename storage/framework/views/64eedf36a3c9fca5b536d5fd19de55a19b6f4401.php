<?php $__env->startSection('title', 'Johny Burnz - Media'); ?>

<?php $__env->startSection('link'); ?>
    <link href="https://fonts.googleapis.com/css?family=Handlee|Indie+Flower&display=swap" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(!App\User::find(1)): ?>
        <div class="container">
            <p>hi</p>
            <div class="row justify-content-center" style="">
                <div class="d-flex col-lg-9 col-md-9 col-sm-12 ml-auto mr-auto justify-content-center" style="">
                    <h1 class="w-50" style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold; text-align: center;">Music Gallery</h1>
                </div>
            </div>
        </div>
    <?php else: ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex col-lg-9 col-md-9 col-sm-12 ml-auto mr-auto justify-content-center" style="">
                <h1 class="w-50" style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold; text-align: center;">Music Gallery</h1>
                <div>
                    <div style="display: none;">
                        <?php echo e($user = App\User::find(1)); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 w-100 d-flex ml-auto mr-auto" style="">
        <?php $__currentLoopData = $user->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--<div class="col mb-3 mr-3" style="border-style: dotted; width: 400px; height: 400px;">-->
                <div class="d-inline-flex ml-auto mr-auto col-lg-4 col-md-4 col-sm-12" style="width: 100%; max-height: 100%; margin-bottom: 30px; border-style: solid;">
                    <div class="" style="display: block; width: 100%; max-height: 100%; margin: 10px auto;">
                        <div class="" style=" display: flex; flex-direction: column; justify-content: center;">

                            <div class="d-flex col-12" style="display: block; overflow: auto; overflow-x: hidden;">
                                <p class="w-100" style="max-height: 40px; font-weight: bold; font-size: 200%; text-align: center; font-family: 'Indie Flower', cursive;">
                                    <?php echo e($media->title ?? "No Title"); ?>

                                </p>
                            </div>

                            <div style="display: none;">
                                {
                                <?php if($media->image != null): ?>
                                    <?php echo e($image = 'storage/'.$media->image); ?><!-- storage/app/public/ -->
                                <?php else: ?>
                                    <?php echo e($image = 'default/defaultPoster.png'); ?><!-- storage/app/public/default/ -->
                                <?php endif; ?>
                                <?php if($media->price != null): ?>
                                    <?php echo e($p = '£'); ?>

                                <?php else: ?>
                                    <?php echo e($p = ''); ?>

                                <?php endif; ?>
                                }
                            </div>

                            <div class="row d-flex align-items-center" style="align-self: center;">
                                <div class="d-flex ml-auto mr-auto" style="position: relative;">
                                    <video controls="controls" poster="/<?php echo e($image); ?>" preload="none" style="width: 96%; max-height: 400px;" class="d-flex ml-auto mr-auto"><!-- ../../../burnz/ -->
                                        <source src="/storage/<?php echo e($media->filename); ?>" type="<?php echo e($media->fileType); ?>"><!-- /burnz/storage/app/public/ -->
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="" style="position: absolute; left: 80%; top: 5%; display: flex; flex-direction: column; justify-content: flex-start;">
                                        <span style="display: flex; flex-direction: column; justify-content: center; height: 10%; color: #ffffff; font-weight: 600; font-size: 150%; text-align: center; align-self: center; margin-right: 50%; background-color: #7675ff; padding: 5px 10px; border-radius: 15px;"><!-- #c8fffd -->
                                            <?php echo e($p); ?><?php echo e($media->price ?? 'Free'); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex w-100 ml-auto mr-auto" style="justify-content: space-around;">

                                <?php if($media->price === null || $media->price === 0): ?>
                                    <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/media/download".$media->id)); ?>'">Download Now</button>
                                <?php else: ?>
                                    <a href="<?php echo e(route('cart.add', ['id' => $media->id])); ?>"><button class="btn btn-primary" style="font-family: 'Montserrat Alternates', sans-serif; font-weight: bold;">Add to Cart</button></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/mediaGallery.blade.php ENDPATH**/ ?>