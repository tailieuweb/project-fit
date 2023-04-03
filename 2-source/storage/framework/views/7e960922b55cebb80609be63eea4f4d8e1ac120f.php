<?php
$withs = [
    'counter' => '7%',
    'id' => '8%',
    'course_name' => '35%',
    'status' => '10%',
    'updated_at' => '25%',
    'operations' => '15%',
];
?>

<?php if(!empty($courses) && (!$courses->isEmpty()) ): ?>
    <div style="min-height: 50px;">
        <div>
            <?php if($courses->total() == 1): ?>
                <?php echo trans($plang_admin.'.descriptions.course_counter', ['number' => 1]); ?>

            <?php else: ?>
                <?php echo trans($plang_admin.'.descriptions.course_counters', ['number' => $courses->total()]); ?>

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

                    <span class="del-checkbox pull-right">
                        <input type="checkbox" id="selecctall" />
                        <label for="del-checkbox"></label>
                    </span>
                </th>

                <!--ID-->
                <?php $name = 'id' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-email' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!--NAME-->
                <?php $name = 'course_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.course_name'); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!--STATUS-->
                <?php $name = 'status' ?>
                <th class="hidden-xs text-center" style='width:<?php echo e($withs['status']); ?>'>
                    <?php echo trans($plang_admin.'.columns.status'); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!-- UPDATED AT -->
                <?php $name = 'updated_at' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs['updated_at']); ?>'><?php echo trans($plang_admin.'.columns.updated_at'); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!--OPERATIONS-->
                <th style='width:<?php echo e($withs['operations']); ?>'>
                    <span class='lb-delete-all'>
                        <?php echo e(trans($plang_admin.'.columns.operations')); ?>

                    </span>
                </th>
            </tr>

        </thead>

        <tbody>
            <?php $counter = $courses->perPage() * ($courses->currentPage() - 1) + 1;  ?>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!--COUNTER-->
                    <td>
                        <?php echo $counter; $counter++ ?>
                        <span class='box-item pull-right'>
                            <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="<?php echo $item->id; ?>">
                            <label for="box-item"></label>
                        </span>
                    </td>

                    <!--ID-->
                    <td>
                        <a href="<?php echo URL::route('teacher.course.edit', [   'id' => $item->course_id,
                                                                        '_token' => csrf_token()
                                                                     ]); ?>">
                            <?php echo $item->course_id; ?>

                        </a>
                    </td>

                    <!--NAME-->
                    <td>
                        <?php echo $item->course_name; ?>

                    </td>

                    <!--STATUS-->
                    <td style="text-align: center;">
                        <?php if(isset($item->status) && (isset($config_status['list'][$item->status]))): ?>
                            <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->status]; ?>" title='<?php echo $config_status["list"][$item->status]; ?>'></i>
                        <?php else: ?>
                            <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                        <?php endif; ?>
                    </td>

                    <!--UPDATED AT-->
                    <td> <?php echo $item->updated_at; ?> </td>

                    <!--OPERATOR-->
                    <td>
                        <!--edit-->
                        <a href="<?php echo URL::route('teacher.course.edit', [   'id' => $item->id,
                                                                    '_token' => csrf_token()
                                                                ]); ?>">
                            <i class="fa fa-edit f-tb-icon"></i>
                        </a>


                        <!--view-->
                        <a href="<?php echo URL::route('teacher.course.view', [ 'id' => $item->id,
                                                        '_token' => csrf_token()
                                                        ]); ?>">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>


                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>
    </div>
    <div class="paginator">
        <?php echo $courses->appends($request->except(['page']) )->render($pagination_view); ?>

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
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-courses/Views/teacher/course-item.blade.php ENDPATH**/ ?>