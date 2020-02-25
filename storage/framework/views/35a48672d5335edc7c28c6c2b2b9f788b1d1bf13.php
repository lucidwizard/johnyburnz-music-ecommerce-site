<?php $__env->startSection('title', 'Johny Burnz - Profile Page'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Add New Post</h1>
                <form action="/posts" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row pt-5">
                                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                                <input id="caption"
                                       type="text"
                                       class="form-control <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       name="caption"
                                       value="<?php echo e(old('caption')); ?>"
                                       autocomplete="caption" autofocus>

                                <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label">Add Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <strong><?php echo e($message); ?></strong>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="row pt-4">
                                <button class="btn btn-primary">Add New Post</button>
                            </div>
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
                </form>

            </div>

        </div>
        <div class="pt-3 row">
            <div class="offset-1 pl-5">
                <button class="btn btn-primary" style="width: 125px" onclick="window.location='<?php echo e(url("/posts/show/".$user->id)); ?>'">Go Back</button>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views/private/posts/create.blade.php ENDPATH**/ ?>