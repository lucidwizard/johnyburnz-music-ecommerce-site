<?php $__env->startSection('title', 'Johny Burnz - Posts'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Picture Gallery</h1>
                <div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <div><button class="btn btn-primary" onclick="window.location='<?php echo e(url("posts/create/".$user->id)); ?>'">Add New Post</button></div>
                    <?php endif; ?>
                        <div class="row">
                            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div style="width: 200px; display: inline-flex; flex-direction: column; justify-content: center; align-content: center; margin: 2px;">
                                <span style="text-align: center"><?php echo e($post->caption ?? "No Caption"); ?></span>

                                <div class="" style="height: 200px; display: flex; flex-direction: row; justify-content: center; align-items: center;  background-color: rgba(99,107,111,0.44);">
                                    <a href="/posts/<?php echo e($post->id); ?>">

                                        <img src="/storage/<?php echo e($post->image); ?>" alt="" class="w-100"  style=" border-radius: 10px;">
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/posts/show.blade.php ENDPATH**/ ?>