<?php $__env->startSection('title', 'Johny Burnz - Checkout'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <h1>Checkout</h1>


                <form action="/postCheckout" method="post" id="checkout-form" style="margin-top: 100px;"><!-- id=" onsubmit="event.preventDefault(); validateMyForm();" -->
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="clientSecret" value="<?php echo e($intent->client_secret); ?>" id="client_secret">

                    <div id="charge-error" class="alert alert-danger" style="display: <?php echo e(!Session::has('error') ? 'none' : 'block'); ?>; margin-left: auto; margin-right: auto; margin-top: 25px;">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                    <span>Secure Payment:</span>
                    <hr />
                    <label for="card-element" style="width: 100px; border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: rgba(68,81,75,0.54);">Card Details</label>
                    <div id="card-element">
                        <!-- Elements will create input elements here -->
                    </div>

                    <!-- We'll put the error messages in this element -->
                    <div id="card-errors" role="alert" style="color: #b50000; font-weight: 600;"></div>

                    <label for="cardholder-name" style="margin-top: 30px;">Card Holder Name</label>
                    <input id="cardholder-name" type="text" placeholder="*" style="border-style: none; border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: rgba(118,117,255,0.44); margin-left: 25px;">

                    <hr />


                    <div style="margin-top: 100px; font-weight: 600; font-size: 30px;"><hr/>Total: £<?php echo e($total); ?></div>

                    <button id="btnSubmit" style="width: 100px; margin-top: 25px;" class="btn btn-primary">Pay</button>

                    <div id="wait">

                    </div>

                </form>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="javascript/client.js" type="module"></script>

    <script type="text/javascript">
        function validateMyForm()
        {
            const s = document.getElementById("btnSubmit");
            let a = 1;
            if(s.click() && a === 1)
            {
                a++;
                return false;
            } else {
                return true;
            }

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Imad\Projects\2019\New\burnz\resources\views//shop/checkout.blade.php ENDPATH**/ ?>