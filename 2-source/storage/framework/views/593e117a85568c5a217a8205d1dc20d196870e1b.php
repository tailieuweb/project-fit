<?php
$withs = [
    'counter' => '7%',
    'id' => '8%',
    'course_name' => '35%',
    'company' => '35%',
    'diary' => '35%',
    'status' => '10%',
    'updated_at' => '25%',
    'operations' => '15%',
];
?>

<?php if(!empty($classes)): ?>

    <div class="table-responsive">
    <table class="table table-hover">

        <thead>
            <tr style="height: 50px;">

                <!--COUNTER-->
                <th style='width:<?php echo e($withs['counter']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.counter')); ?>

                </th>

                <!--NAME-->
                <?php $name = 'course_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.internship_course_name'); ?>

                </th>

                <!--COMPANY-->
                <?php $name = 'company' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.internship_company_name'); ?>

                </th>

                <!--DIARY-->
                <?php $name = 'diary' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.internship_diary'); ?>

                </th>

            </tr>

        </thead>

        <tbody>
            <?php $counter =  1;  ?>
            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!--COUNTER-->
                    <td>
                        <?php echo $counter; $counter++ ?>
                    </td>

                    <!--NAME-->
                    <td>
                        <?php echo $item['course']['course_name']; ?>

                    </td>

                    <!--COMPANY-->
                    <td>
                        <!--Edit company-->
                        <a href="<?php echo URL::route('internship.edit_company', [   'course_id' => $item['course_id'],
                                                                    '_token' => csrf_token()
                                                                ]); ?>">
                            <i class="fa fa-edit f-tb-icon"></i>
                        </a>
                    </td>

                    <!--DIARY-->
                    <td>
                        <!--Diary-->
                        <a href="<?php echo URL::route('internship.diary', ['course_id' => $item['course_id'],
                                                                    '_token' => csrf_token()
                                                                ]); ?>">
                            <i class="fa fa-stack-exchange" aria-hidden="true"></i>
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
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-internship/Views/admin/internship-item.blade.php ENDPATH**/ ?>