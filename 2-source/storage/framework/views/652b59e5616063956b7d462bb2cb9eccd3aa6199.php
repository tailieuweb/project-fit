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
                            <?php echo $request->all() ? trans($plang_admin.'.pages.title-list-search-company') : trans($plang_admin.'.pages.title-internship-course'); ?>

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
                        <div class="alert alert-warning" role="alert">
                            <h4>Hồ sơ sinh viên thực tập chỉ <b>hợp lệ</b> khi có đủ thông tin sau</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <caption>Thông tin sinh viên</caption>
                                    <ul class="list-group">
                                        <li class="list-group-item">1. Họ và tên</li>
                                        <li class="list-group-item">2. Số điện thoại</li>
                                        <li class="list-group-item">3. Mã số sinh viên (đã được tạo, là tài khoản đăng nhập)</li>
                                        <li class="list-group-item"><b>4. Lớp (cập nhật tại thông tin công ty)</b></li>

                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <caption>Thông tin công ty</caption>
                                    <ul class="list-group">
                                        <li class="list-group-item">1. Tên công ty</li>
                                        <li class="list-group-item">2. Địa chỉ công ty</li>
                                        <li class="list-group-item">3. Số điện thoại</li>
                                        <li class="list-group-item">4. Người hướng dẫn tại công ty</li>
                                        <li class="list-group-item">5. Số điện thoại người hướng dẫn</li>
                                        <li class="list-group-item">6. Lĩnh vực hoạt động</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <?php echo Form::open(['route'=>['company.delete', 'id' => @$item->id], 'method' => 'get']); ?>


                            <?php echo $__env->make('package-internship::admin.internship-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-internship/Views/admin/internship-items.blade.php ENDPATH**/ ?>