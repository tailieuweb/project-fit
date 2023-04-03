<?php $__env->startSection('title'); ?>
    <?php echo e(trans($plang_admin.'.pages.title-course')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

            <!--LIST OF ITEMS-->
            <div class="col-md-9">

                <div class="panel panel-info">

                    <!--HEADING-->
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin"><i class="fa fa-list-ul" aria-hidden="true"></i>
                            <?php echo $request->all() ? trans($plang_admin.'.pages.title-list-search-diary') : trans($plang_admin.'.pages.internship-title-diary'); ?>

                        </h3>
                    </div>


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
                        <div class='row'>
                            <div class="col-md-12">
                            <a href="<?php echo URL::route('internship.diary.edit',['course_id' => $course_id, 'internship_id' => $internship_id, '_token' => csrf_token()]); ?>"
                               class="btn btn-success pull-left margin-left-5 restore">
                                <?php echo trans($plang_admin.'.buttons.diary_add'); ?>

                            </a>
                            </div>
                        </div>
                        <?php echo Form::open(['route'=>['company.delete', 'id' => @$item->id], 'method' => 'get']); ?>


                            <?php echo $__env->make('package-internship::admin.internship-diary-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php echo csrf_field();; ?>


                        <?php echo Form::close(); ?>

                    </div>
                    <!--/BODY-->

                </div>
            </div>
            <!--/LIST OF ITEMS-->

            <!--SEARCH-->
            <div class="col-md-3">
                <?php echo $__env->make('package-internship::admin.internship-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/SEARCH-->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- DELETE CONFIRM -->
    <script>
        $(".delete").click(function () {
            return confirm("<?php echo trans($plang_admin.'.confirms.delete'); ?>");
        });
    </script>
    <!-- /END DELETE CONFIRM -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-internship/Views/admin/internship-diary-items.blade.php ENDPATH**/ ?>