<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_front.'.pages.change-password-success-title'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 text-center v-center">

            <h1><i class="fa fa-thumbs-up"></i>
                <?php echo trans($plang_front.'.messages.change-password-success'); ?>

            </h1>
            <p class="lead">
                <?php echo trans($plang_front.'.messages.try-again'); ?>

                <a href="<?php echo URL::to('/login'); ?>"><i class="fa fa-home"></i>
                    <?php echo trans($plang_front.'.pages.home-page'); ?>

                </a>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::client.layouts.base-fullscreen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/change-password-success.blade.php ENDPATH**/ ?>