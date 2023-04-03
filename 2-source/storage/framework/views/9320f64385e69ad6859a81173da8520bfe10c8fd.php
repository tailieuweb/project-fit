<?php
$withs = [
    'counter' => '5%',
    'user_name' => '10%',
    'full_name' => '15%',
    'phone' => '10%',
    'class' => '10%',
    'company' => '30%',
    'instructor' => '20%',
];
$plang_admin = 'course-admin';

?>

<?php if(!empty($items)): ?>

        <table>
            <thead>
            <tr>
                <th>Số SV</th>
                <th>Chưa có công ty</th>
                <th>Môn</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo count($items); ?></td>
                    <td><?php echo $counterUnCompany; ?></td>
                    <td><?php echo $courseName; ?></td>
                </tr>
            </tbody>
        </table>

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

                <!--FULL NAME-->
                <?php $name = 'full_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.full_name'); ?>

                </th>

                <!-- PHONE -->
                <?php $name = 'updated_at' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs['phone']); ?>'>
                    <?php echo trans($plang_admin.'.columns.phone'); ?>

                </th>

                <!--CLASS-->
                <?php $name = 'class' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.class'); ?>

                </th>

                <!--COMPANY-->
                <?php $name = 'company' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.company'); ?>

                </th>

                <!--INSTRUCTOR-->
                <?php $name = 'instructor' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.company'); ?>

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

                    <!--USER NAME-->
                    <td>
                        <?php echo $item['user_name']; ?>

                    </td>

                    <!--FULL NAME-->
                    <td>
                        <?php echo $item['first_name'] . ' ' . $item['last_name']; ?>

                    </td>

                    <!--PHONE-->
                    <td>
                        <?php echo @$item['student_phone']; ?>

                    </td>

                    <!--CLASS-->
                    <td>
                        <?php echo @$item['student_class']; ?>

                    </td>

                    <!--COMPANY-->
                    <td> <?php echo htmlentities(@$item['company_name']) . "<br><br>" .
                            htmlentities("Địa chỉ: " . @$item['company_address']) . "<br><br>" .
                            htmlentities("Số điện thoại: " . @$item['company_phone']); ?>

                    </td>

                    <!--INSTRUCTOR-->
                    <td> <?php echo htmlentities(@$item['company_instructor']) . "<br><br>" .
                            htmlentities("Số điện thoại: ". @$item['company_instructor_phone']); ?>

                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>


<?php else: ?>
    <!--SEARCH RESULT MESSAGE-->
    <span class="text-warning">
        <h5>
            <?php echo e(trans($plang_admin.'.descriptions.not-found')); ?>

        </h5>
    </span>
    <!--/SEARCH RESULT MESSAGE-->
<?php endif; ?>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-courses/Views/admin/course-export.blade.php ENDPATH**/ ?>