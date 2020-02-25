<?php $__env->startSection('title', 'Johny Burnz - Media'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div style="display: flex; justify-content: center; width: 100%; margin-left: auto; margin-right: auto; font-size: 20px; font-weight: 600; background-color: rgba(87,219,73,0.43); color: #008800;">
            Your payment was successful !
        </div>
        <div style="font-size: 30px; margin-top: 50px; text-align: center;">Download of Premium Music Files</div>
        <span>You may now download the below media</span>
        <span>Warning: Do not leave this page until you have received the downloaded media!</span>
    </div>
    <div class="d-flex row justify-content-center mt-5">

            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="display: inline-block; width: 400px; padding: 10px; margin-right: 5px;">
                    <div style="display: none"><?php echo e($id = $item['item']['id']); ?>

                        <?php echo e($media = \App\Media::find($id)); ?>

                        <?php if($media->image != null): ?>
                            <?php echo e($image = 'storage/'.$media->image); ?>

                        <?php else: ?>
                            <?php echo e($image = 'default/defaultPoster.png'); ?>

                        <?php endif; ?>
                    </div>
                    <div class="row" style="width: 400px; display: flex; flex-direction: row; justify-content: center; align-items: center; padding: 10px;">
                        <div class="" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <span style="font-size: 30px; font-weight: 600;"><?php echo e($item['item']->title); ?></span>
                            <video width="320" height="320" controls="controls" poster="/<?php echo e($image); ?>" preload="none">
                                <source src="/storage/<?php echo e($media->filename); ?>" type="<?php echo e($media->fileType); ?>">
                                Your browser does not support the video tag.
                            </video>
                            <button class="btn btn-primary mt-1" onclick="window.location='<?php echo e(url("/media/download".$media->id)); ?>'">Download Now</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views//shop/downloads.blade.php ENDPATH**/ ?>