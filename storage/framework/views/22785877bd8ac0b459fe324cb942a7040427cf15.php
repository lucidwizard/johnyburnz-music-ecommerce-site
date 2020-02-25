<?php $__env->startSection('title', 'Johny Burnz - Cart'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <h1>Cart</h1>
                <?php if(Session::has('cart')): ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">

                            <table class="list-group pt-5 pb-5">
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="list-group-item" style="width: 100%; max-height: 60px; display: flex; flex-direction: row; justify-content: space-between; align-items: baseline;">
                                        <td style="padding-bottom: 10px; width: 100px;">
                                            <strong>
                                                <?php echo e($item['item']['title']); ?>

                                            </strong>
                                        </td>
                                        <td style="padding-bottom: 10px;">
                                            <span style="margin-bottom: 10px; max-height: 28px; padding-right: 4px; padding-left: 4px; display: flex; flex-direction: row; justify-content: center; background-color: rgba(107,113,113,0.65); color: #faebd7; border-radius: 10px;">
                                                <?php echo e($item['price'] > 0 ? $item['price'] : 'Free'); ?>

                                            </span>
                                        </td>
                                        <td style=" width: 100px; align-content: center">
                                            <button type="button" class="btn btn-primary" style="margin-bottom: 10px; max-height: 28px; display: flex; flex-direction: column; justify-content: center;" onclick="window.location='<?php echo e(url("/cart/removeFromCart/".$item['item']->id)); ?>'">
                                                Remove
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <strong>Total to pay: £<?php echo e($totalPrice); ?></strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <button type="button" class="btn btn-success" onclick="window.location='<?php echo e(url("/checkout")); ?>'">Checkout</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views//shop/cart.blade.php ENDPATH**/ ?>