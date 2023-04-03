<?php $__env->startSection('title'); ?>
    <?php echo e(trans($plang_admin.'.pages.title-config')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">

            <!--LIST OF ITEMS-->
            <div class="col-md-8">

                <div class="panel panel-info">

                    <!--HEADING-->
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin"><i class="fa fa-braille" aria-hidden="true"></i>
                            <?php echo trans($plang_admin.'.pages.title-config'); ?>

                        </h3>
                    </div>

                    <!--DESCRIPTION-->
                    <div class='panel-info panel-description'>
                        <?php echo trans($plang_admin.'.descriptions.config'); ?></h4>
                    </div>
                    <!--/DESCRIPTION-->

                    <!--MESSAGE-->
                    <?php $message = Session::get('message'); ?>
                    <?php if( isset($message) ): ?>
                        <div class="panel-info alert alert-success flash-message"><?php echo $message; ?></div>
                    <?php endif; ?>
                <!--/MESSAGE-->

                    <!--ERRORS-->
                    <?php if($errors && ! $errors->isEmpty() ): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="alert alert-danger flash-message"><?php echo $error; ?></div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <!--/ERRORS-->

                    <!--BODY-->
                    <div class="panel-body">
                        <?php echo Form::open(['route'=>['contexts.config'], 'method' => 'post']); ?>


                        <div class='btn-form'>

                            <!-- SAVE BUTTON -->
                        <?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

                        <!-- /SAVE BUTTON -->

                        </div>

                        <?php echo Form::label('content', trans($plang_admin.'.labels.config')); ?>

                        <?php echo Form::textarea('content', $content, ['class' => 'form-control textarea-margin', 'size' => '30x50']); ?>


                        <?php echo Form::close(); ?>

                    </div>
                    <!--/BODY-->

                </div>
            </div>
            <!--/LIST OF ITEMS-->

            <!--SEARCH-->
            <div class="col-md-4">
                <?php echo $__env->make('package-category::admin.context-config-backup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/SEARCH-->

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-category/Views/admin/context-config.blade.php ENDPATH**/ ?>