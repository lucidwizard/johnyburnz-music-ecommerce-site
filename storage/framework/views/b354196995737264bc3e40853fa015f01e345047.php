<?php $__env->startSection('title', 'Johny Burnz - Staff Home'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <col-6 class="offset-3">
                                <h1>Staff Home Page</h1>
                            </col-6>
                        </div>
                    </div>

                    <div class="row pt-5">
                        <div class="col-12">
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="pt-5" style="list-style: none">
                                            <li class="pb-2">
                                                    <button class="btn btn-primary" onclick="window.location='<?php echo e(url("profile/show/".$user->id)); ?>'">Profile</button>
                                            </li>
                                            <li class="pb-2">
                                                <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/posts/show/".$user->id)); ?>'">My Posts</button>
                                            </li>
                                            <li class="pb-2">
                                                <button class="btn btn-primary" onclick="window.location='<?php echo e(url("/media/show/".$user->id)); ?>'">My Media</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/staffHomepage.blade.php ENDPATH**/ ?>