<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_front.'.pages.title-password-recovery'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 text-center v-center">

            <h1>
                <i class="fa fa-download"></i>
                <?php echo trans($plang_front.'.messages.reminder-heading'); ?>

            </h1>
            <p class="lead">
                <?php echo trans($plang_front.'.messages.reminder-sent'); ?>

            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::client.layouts.base-fullscreen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/reminder-success.blade.php ENDPATH**/ ?>