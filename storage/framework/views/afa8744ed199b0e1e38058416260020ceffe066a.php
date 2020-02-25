<?php $__env->startSection('title', 'Johny Burnz - Staff'); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <col-12>
            <h1>Staff List</h1>
        </col-12>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="staff" method="post" class="pb-4">
                <div class="form-group pb-1">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" class="form-control" />
                    <span class="pb-2" style="color: #ff0000"><strong><?php echo e($errors->first('first_name')); ?></strong></span>
                </div>

                <div class="form-group pb-1">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" class="form-control" />
                    <span class="pb-2" style="color: #ff0000"><strong><?php echo e($errors->first('last_name')); ?></strong></span>
                </div>

                <div class="form-group pb-1">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" />
                    <span class="pb-2" style="color: #ff0000"><strong><?php echo e($errors->first('email')); ?></strong></span>
                </div>

                <button type="submit" class="btn btn-primary">Add New User</button>
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </div>
    <hr>


    <div class="row">
        <div class="col-12">
            <ul>
                <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> <span class="text-muted pl-2">(<?php echo e($user->email); ?>)</span></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/staff.blade.php ENDPATH**/ ?>