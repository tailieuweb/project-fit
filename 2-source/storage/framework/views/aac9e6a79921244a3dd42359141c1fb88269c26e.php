<!--
| @TITLE
| Update existing post
| Add new post
|
|-------------------------------------------------------------------------------
| @REQUIRED
| Permission
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
| 1. Admin
| 2. Manager
| 3. User
|
|_______________________________________________________________________________
-->


<?php $__env->startSection('title'); ?>
    <?php echo e(trans($plang_admin.'.pages.title-edit')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-9">
                <div class="panel panel-info">

                    <!--TITLE BAR-->
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin">
                            <?php echo !empty($item->id)
                                ?
                                '<i class="fa fa-pencil"></i>'.trans($plang_admin.'.pages.title-edit')
                                :
                                '<i class="fa fa-users"></i>'.trans($plang_admin.'.pages.title-add'); ?>

                        </h3>
                    </div>

                    <!--DESCRIPTION-->
                    <div class='panel-description'>
                        <?php echo trans($plang_admin.'.descriptions.form'); ?></h4>
                    </div>

                    <!-- ERRORS NAME  -->
                    <?php if($errors->count() > 0): ?>
                        <div class='panel-errors'>
                            <?php echo $__env->make('package-category::admin.partials.errors', ['errors' => $errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endif; ?>
                <!-- /END ERROR NAME -->


                    
                    <?php if(Session::get('message')): ?>
                        <div class='panel-success'>
                            <?php echo $__env->make('package-category::admin.partials.success', ['message' => Session::get('message')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">

                                <?php echo $__env->make('package-post::admin.post-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-md-3'>
                <?php echo $__env->make('package-post::admin.post-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-post/Views/admin/post-edit.blade.php ENDPATH**/ ?>