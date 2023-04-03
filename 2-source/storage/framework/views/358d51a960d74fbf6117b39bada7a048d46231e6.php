<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_front.'.pages.change-password'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo trans($plang_front.'.pages.change-password'); ?>

                    </h3>
                </div>
                <?php if($errors && ! $errors->isEmpty() ): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="panel-body">
                    <?php echo Form::open(array('url' => URL::route("user.reminder.process"), 'method' => 'post') ); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <?php echo Form::label('password', trans($plang_front.'.labels.new-password')); ?>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <?php echo Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans($plang_front.'.labels.new-password'), 'required', 'autocomplete' => 'off']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="<?php echo trans($plang_front.'.buttons.change_password'); ?>"
                           class="btn btn-info btn-block">
                    <?php echo Form::hidden('email',$email); ?>

                    <?php echo Form::hidden('token',$token); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::client.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/changepassword.blade.php ENDPATH**/ ?>