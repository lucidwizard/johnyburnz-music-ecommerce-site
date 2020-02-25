<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row offset-1 pb-4">
            <div class="col-9 d-flex  justify-content-center">
                <h1>Profile Page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php if($user->profile->image): ?>
                    <img src="/storage/<?php echo e($user->profile->image); ?>" alt="" class="mt-3" style="max-width: 300px;">
                <?php else: ?>
                    <img src="/default/noimage.png" alt="" class="mt-3" style="max-width: 300px;">
                <?php endif; ?>
                    <div class="col" style="margin-left: 0px;">
                        <div class="row d-flex justify-content-center" style="max-width: 300px;">
                            <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/posts/show/".$user->id)); ?>'">View Picture Gallery</button>
                        </div>
                        <div class="row d-flex justify-content-center mt-3" style="max-width: 300px;">
                            <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/media/show/".$user->id)); ?>'">View Music Gallery</button>
                        </div>
                    </div>
            </div>
            <div class="col py-5 pl-5" style="width: 500px;">
                <div>
                    <label for="name">Name</label>
                    <div id="name" style="font-size: x-large"><?php echo e($user->name); ?></div>
                    <label for="username" class="mt-4">Username</label>
                    <div id="username" style="font-size: x-large"><?php echo e($user->username); ?></div>
                    <label for="title" class="mt-4">Title</label>
                    <div id="title" style="font-size: x-large"><?php echo e($user->profile->title ?? "No Title"); ?></div>
                    <label for="instr" class="mt-4">Instrument</label>
                    <div id="instr" style="font-size: x-large"><?php echo e($user->profile->instrument ?? "No Instrument"); ?></div>
                    <label for="desc" class="mt-4">Description</label>
                    <div id="desc" style="font-size: x-large"><?php echo e($user->profile->description ?? "No Description"); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <div class="pt-3"><button class="btn btn-primary" onclick="window.location='<?php echo e(url("profile/show/".$user->id."/edit")); ?>'">Edit Profile</button></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <hr>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/profile/show.blade.php ENDPATH**/ ?>