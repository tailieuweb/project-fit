<!--
| @TITLE
| Recovery password
|
|-------------------------------------------------------------------------------
| @REQUIRED
|
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
|
------------------------------------------------------------------------------->


<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_front.'.pages.recovery-password'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-info">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo trans($plang_front.'.pages.recovery-password'); ?>

                    </h3>
                </div>

                <?php if($errors && ! $errors->isEmpty() ): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="alert alert-danger"><?php echo e($error); ?></div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <div class="my-acl-form panel-body">

                    <?php echo Form::open(array('url' => URL::route("user.reminder"), 'method' => 'post') ); ?>


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <!--email-->
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                        'name' => 'email',
                                        'placeholder' => trans($plang_front.'.labels.recovery-email'),
                                        'icon' => '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>',
                                        'required' => true,
                                        'errors' => $errors
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>

                    <div class="row">
                        <!--captcha-->
                        <?php if(isset($captcha) ): ?>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <?php echo $__env->make('package-category::front.partials.input_text', [
                                    'name' => 'captcha_text',
                                    'placeholder' => trans($plang_front.'.labels.captcha'),
                                    'icon' => '<span class="input-group-addon"><i class="fa fa-braille" aria-hidden="true"></i></span>',
                                    'required' => true,
                                    'errors' => $errors,
                                    'password' => true
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                    <span id="captcha-img-container">
                                        <?php echo $__env->make('package-acl::client.auth.captcha-image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </span>
                                        <a id="captcha-gen-button" href="#"
                                           class="btn btn-small btn-info margin-left-5">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <input type="submit" value="<?php echo trans($plang_front.'.buttons.recover'); ?>"
                           class="btn btn-info btn-block">

                    <?php echo Form::close(); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                            <a href="<?php echo URL::route('user.login'); ?>">
                                <i class="fa fa-arrow-left"></i>
                                <?php echo trans($plang_front.'.pages.login'); ?>

                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>

    <?php echo $__env->make('package-acl::assets.lib_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    ##parent-placeholder-c55a01b0a8ef1d7b211584e96d51bdf8930d1005##;
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::client.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/reminder.blade.php ENDPATH**/ ?>