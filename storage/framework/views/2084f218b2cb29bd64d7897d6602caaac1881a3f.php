<?php $__env->startSection('title', 'Johny Burnz - Posts'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Cart</h1>
                <?php if(Session::has('cart')): ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <ul class="list-group">
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item">
                                        <strong><?php echo e($item['item']['title']); ?></strong>
                                        <span class="label label-success"><?php echo e($item['price'] > 0 ? $item['price'] : 'Free'); ?></span>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-xs">Remove</button>

                                        </div>
                                    </li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <table>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="padding-bottom: 10px;">
                                            <strong><?php echo e($item['item']['title']); ?></strong>
                                        </td>
                                        <td style="padding-bottom: 10px;">
                                            <span style="margin-bottom: 10px; max-height: 28px; display: flex; flex-direction: column; justify-content: center; background-color: #008800; color: #faebd7; border-radius: 10px;"><?php echo e($item['price'] > 0 ? $item['price'] : 'Free'); ?></span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" style="margin-bottom: 10px; max-height: 28px; display: flex; flex-direction: column; justify-content: center;">Remove</button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <strong>Total: <?php echo e($totalPrice); ?></strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <button type="button" class="btn btn-success">Checkout</button>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <h2>No Items In Cart</h2>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views//cart.blade.php ENDPATH**/ ?>