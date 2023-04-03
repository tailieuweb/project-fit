<?php
$withs = [
    'week' => '7%',
    'start_date' => '10%',
    'end_date' => '10%',
    'updated_at' => '25%',
    'operations' => '15%',
];
?>

<?php if(!empty($diaries)): ?>


    <div class="table-responsive">
    <table class="table table-hover">

        <thead>
            <tr style="height: 50px;">

                <!--COUNTER-->
                <th style='width:<?php echo e($withs['week']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.week')); ?>

                </th>

                <!--START DATE-->
                <?php $name = 'start_date' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.start_date'); ?>

                </th>
                <!--END DATE-->
                <?php $name = 'end_date' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.end_date'); ?>

                </th>

                <!--OPERATIONS-->
                <th style='width:<?php echo e($withs['operations']); ?>'>
                    <span class='lb-delete-all'>
                        <?php echo e(trans($plang_admin.'.columns.diary_operations')); ?>

                    </span>
                </th>
            </tr>

        </thead>

        <tbody>
        <?php $counter =  1;  ?>
            <?php $__currentLoopData = $diaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!--COUNTER-->
                    <td>
                        <?php echo $counter; $counter++ ?>
                    </td>

                    <!--START DATE-->
                    <td>
                        <?php echo $item['diary_start_date']; ?>

                    </td>

                    <!--END DATE-->
                    <td>
                        <?php echo $item['diary_end_date']; ?>

                    </td>


                    <!--OPERATOR-->
                    <td>
                        <!--Edit diary-->
                        <?php if($request->get('teacher_id')): ?>
                            <a href="<?php echo URL::route('internship.diary.edit', [   'course_id' => $course_id,
                                                                            'internship_id' => $internship_id,
                                                                            'internship_diary_id' => $item['internship_diary_id'],
                                                                            'student_id' => $request->get('student_id'),
                                                                            'teacher_id' => $request->get('teacher_id'),
                                                                    '_token' => csrf_token()
                                                                ]); ?>">
                                <i class="fa fa-edit f-tb-icon"></i>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo URL::route('internship.diary.edit', [   'course_id' => $course_id,
                                                                            'internship_id' => $internship_id,
                                                                            'internship_diary_id' => $item['internship_diary_id'],
                                                                    '_token' => csrf_token()
                                                                ]); ?>">
                                <i class="fa fa-edit f-tb-icon"></i>
                            </a>
                        <?php endif; ?>


                        <!--Delete diary-->
                        <a href="<?php echo URL::route('internship.diary.delete', [   'course_id' => $course_id,
                                                                            'internship_id' => $internship_id,
                                                                            'internship_diary_id' => $item['internship_diary_id'],
                                                                    '_token' => csrf_token()
                                                                ]); ?>">
                            <i class="fa fa-trash-o f-tb-icon"></i>
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
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-internship/Views/admin/internship-diary-item.blade.php ENDPATH**/ ?>