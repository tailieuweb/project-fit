<?php
$withs = [
    'counter' => '5%',
    'user_name' => '10%',
    'first_name' => '15%',
    'last_name' => '10%',
    'phone' => '15%',
    'email' => '15%',
    'status' => '10%',
    'operations' => '15%',
];
?>

<?php if(!empty($items)): ?>
    <div style="min-height: 50px;">
        <div>
            <?php if(count($items) == 1): ?>
                <?php echo trans($plang_admin.'.descriptions.student_counter', ['number' => 1]); ?>

            <?php else: ?>
                <?php echo trans($plang_admin.'.descriptions.student_counter', ['number' => count($items)]); ?>

            <?php endif; ?>
        </div>

    </div>

    <div class="table-responsive">
    <table class="table table-hover">

        <thead>
            <tr style="height: 50px;">

                <!--COUNTER-->
                <th style='width:<?php echo e($withs['counter']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.counter')); ?>

                </th>

                <!--USER NAME-->
                <?php $name = 'user_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.user_name'); ?>

                </th>

                <!--FIRST NAME-->
                <?php $name = 'first_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.first_name'); ?>

                </th>

                <!--LAST NAME-->
                <?php $name = 'last_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.last_name'); ?>

                </th>

                <!--Email-->
                <?php $name = 'email' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.email'); ?>

                </th>

                <!-- PHONE -->
                <?php $name = 'updated_at' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs['phone']); ?>'>
                    <?php echo trans($plang_admin.'.columns.phone'); ?>

                </th>

                <!--STATUS-->
                <?php $name = 'status' ?>
                <th class="hidden-xs text-center" style='width:<?php echo e($withs['status']); ?>'>
                    <?php echo trans($plang_admin.'.columns.status'); ?>


                </th>

                <!--OPERATIONS-->
                <th style='width:<?php echo e($withs['operations']); ?>'>
                    <span class='lb-delete-all'>
                        <?php echo e(trans($plang_admin.'.columns.teacher_view_student')); ?>

                    </span>
                </th>
            </tr>

        </thead>

        <tbody>
            <?php $counter =  1;  ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!--COUNTER-->
                    <td>
                        <?php echo $counter; $counter++ ?>
                    </td>

                    <!--NAME-->
                    <td>
                        <?php echo $item['user_name']; ?>

                    </td>

                    <!--FIRST NAME-->
                    <td>
                        <?php echo $item['first_name']; ?>

                    </td>

                    <!--LAST NAME-->
                    <td>
                        <?php echo $item['last_name']; ?>

                    </td>

                    <!--Email-->
                    <td>
                        <?php echo $item['email']; ?>

                    </td>

                    <!--PHONE-->
                    <td> <?php echo $item['phone']; ?> </td>

                    <!--STATUS-->
                    <td style="text-align: center;">

                        <?php if(isset($item['company_name']) && (isset($config_status['list'][99]))): ?>
                            <i class="fa fa-circle" style="color:<?php echo $config_status['color'][99]; ?>" title='<?php echo $config_status["list"][99]; ?>'></i>
                        <?php else: ?>
                            <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                        <?php endif; ?>
                    </td>

                    <!--OPERATOR-->
                    <td>


                        <!--View company-->
                        <a href="<?php echo URL::route('internship.edit_company', [
                                                        'course_id' => $item['course_id'],
                                                        'student_id' => $item['user_id'],
                                                        'teacher_id' => $item['course']['teacher_id'],
                                                        '_token' => csrf_token()
                                                        ]); ?>">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                        </a>

                        <!--View diary-->
                        <a href="<?php echo URL::route('internship.diary', [
                                                         'course_id' => $item['course_id'],
                                                        'student_id' => $item['user_id'],
                                                        'teacher_id' => $item['course']['teacher_id'],
                                                        '_token' => csrf_token()
                                                        ]); ?>">
                            <i class="fa fa-th-list" aria-hidden="true"></i>
                        </a>



                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>
    </div>

<?php else: ?>
    <!--SEARCH RESULT MESSAGE-->
    <span class="text-warning">
        <h5>
            <?php echo e(trans($plang_admin.'.descriptions.not-found')); ?>

        </h5>
    </span>
    <!--/SEARCH RESULT MESSAGE-->
<?php endif; ?>

<?php $__env->startSection('footer_scripts'); ?>
    ##parent-placeholder-c55a01b0a8ef1d7b211584e96d51bdf8930d1005##
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-courses/Views/teacher/course-view-item.blade.php ENDPATH**/ ?>