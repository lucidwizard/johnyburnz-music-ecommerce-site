<?php $__env->startSection('title', 'Johny Burnz - Media'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Media Gallery</h1>
                <div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <div><button class="btn btn-primary" onclick="window.location='<?php echo e(url("media/create/".$user->id)); ?>'">Add New Media</button></div>
                    <?php endif; ?>
                        <!--<div class="row" style="border-style: solid">-->

                        <!--</div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex row justify-content-center mt-5">
    <?php $__currentLoopData = $user->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!--<div class="col mb-3 mr-3" style="border-style: dotted; width: 400px; height: 400px;">-->
            <div class="" style="width: 370px; height: 530px; display: inline-block; margin-right: 30px; margin-bottom: 30px; border-style: solid;">
                <div style="display: block; width: 350px; height: 400px; margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 10px;">
                    <div class="" style=" display: flex; flex-direction: column; justify-content: center">

                        <div class="" style="display: block; margin-bottom: 25px;">
                            <p style="text-align: center; height: 10px; font-weight: bold; font-size: x-large;">
                                <?php echo e($media->title ?? "No Title"); ?>

                            </p>
                        </div>

                        <div style="display: none;">
                            {
                            <?php if($media->image != null): ?>
                                <?php echo e($image = 'storage/'.$media->image); ?>

                            <?php else: ?>
                                <?php echo e($image = 'default/defaultPoster.png'); ?>

                            <?php endif; ?>
                            <?php if($media->price != null): ?>
                                <?php echo e($p = '£'); ?>

                            <?php else: ?>
                                <?php echo e($p = ''); ?>

                            <?php endif; ?>
                            }
                        </div>

                        <div class="row d-flex align-items-center" style="align-self: center;">
                            <div class="" style="display: block; position: relative; margin-left: auto; margin-right: auto;">
                                <video width="320" height="320" controls="controls" poster="/<?php echo e($image); ?>" preload="none">
                                    <source src="/storage/<?php echo e($media->filename); ?>" type="<?php echo e($media->fileType); ?>">
                                    Your browser does not support the video tag.
                                </video>
                                <div style="position: absolute; left: 235px; top: 15px; display: flex; flex-direction: column; justify-content: center;">
                                    <p style=" height: 50px; color: #ffffff; font-weight: 600; font-size: x-large; align-self: center; background-color: #7675ff; padding: 5px 10px; border-radius: 15px;"><!-- #c8fffd -->
                                        <?php echo e($p); ?><?php echo e($media->price ?? 'Free'); ?>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-1 mb-2" style="display: block; height: 70px; overflow: auto; overflow-x: hidden;">
                            <p style="text-align: center;">
                                <?php echo e($media->description ?? ""); ?>

                            </p>
                        </div>

                        <div class="row d-flex" style="width: 300px; margin-right: auto; margin-left: auto; justify-content: space-around;">

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $media)): ?>
                                    <button class="btn btn-primary" onclick="window.location='<?php echo e(url("media/show/".$media->id."/edit")); ?>'" style="width: 40%;">Edit</button>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $media)): ?>
                                <form action="/media" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input type="hidden" name="user_id" value="<?php echo e($media->user->id); ?>">
                                    <input type="hidden" name="media_id" value="<?php echo e($media->id); ?>">
                                    <button class="btn" style="width: 120px; background-color: #ff0000; color: #ffffff;">Delete</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--</div>-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/media/show.blade.php ENDPATH**/ ?>