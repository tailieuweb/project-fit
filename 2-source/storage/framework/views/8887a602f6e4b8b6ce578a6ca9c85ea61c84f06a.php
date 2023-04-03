<!--
| @TITLE
| Sign up page
|
|-------------------------------------------------------------------------------
| @REQUIRED
|
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
|
|------------------------------------------------------------------------------>



<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_front.'.pages.signup'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head_css'); ?>
    <?php echo HTML::style('packages/foostart/css/strength.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">

            <div class="panel panel-info">

                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin"><?php echo trans($plang_front.'.pages.signup'); ?></h3>
                </div>

                <?php $message = Session::get('message'); ?>
                <?php if( isset($message) ): ?>
                    <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>

            <!--panel-body-->
                <div class="my-acl-form panel-body">
                <?php echo Form::open(["route" => 'user.signup.process', "method" => "POST", "id" => "user_signup"]); ?>

                
                <?php echo Form::password('__to_hide_password_autocomplete', ['class' => 'hidden']); ?>


                <!--user name-->
                    <div class="row">

                        <!--first name-->
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                'name' => 'first_name',
                                'placeholder' => trans($plang_front.'.labels.first_name'),
                                'icon' => '<span class="input-group-addon"><i class="fa fa-user"></i></span>',
                                'required' => true,
                                'errors' => $errors
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <!--last name-->
                        <?php $name = 'last_name' ?>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                'name' => 'last_name',
                                'placeholder' => trans($plang_front.'.labels.last_name'),
                                'icon' => '<span class="input-group-addon"><i class="fa fa-user"></i></span>',
                                'required' => true,
                                'errors' => $errors
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                    </div>

                    <!--email-->
                <?php echo $__env->make('package-category::front.partials.input_text', [
                            'name' => 'email',
                            'placeholder' => trans($plang_front.'.labels.email'),
                            'icon' => '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>',
                            'required' => true,
                            'errors' => $errors
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!--password-->
                    <div class="row">
                        <!--password-->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                'name' => 'password',
                                'id' => 'password1',
                                'placeholder' => trans($plang_front.'.labels.password'),
                                'icon' => '<span class="input-group-addon"><i class="fa fa-lock"></i></span>',
                                'required' => true,
                                'errors' => $errors,
                                'type' => 'password'
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                'name' => 'password_confirmation',
                                'id' => 'password2',
                                'placeholder' => trans($plang_front.'.labels.confirm_password'),
                                'icon' => '<span class="input-group-addon"><i class="fa fa-lock"></i></span>',
                                'required' => true,
                                'errors' => $errors,
                                'password' => true,
                                'type' => 'password'
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
                                           class="btn btn-small btn-info margin-left-5"><i
                                                class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>
                    </div>
                    <input type="submit" value="<?php echo trans($plang_front.'.buttons.register'); ?>"
                           class="btn btn-info btn-block">
                    <?php echo Form::close(); ?>


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                            <?php echo link_to_route('user.login', trans($plang_front.'.pages.login')); ?>

                        </div>

                    <!--                        <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                            <?php echo link_to_route('user.login.google', trans($plang_front.'.login-by-google')); ?>

                        </div>-->
                    </div>

                </div>
                <!--end panel body-->

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/password_strength/strength.js'); ?>


    ##parent-placeholder-c55a01b0a8ef1d7b211584e96d51bdf8930d1005##;

<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::client.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/signup.blade.php ENDPATH**/ ?>