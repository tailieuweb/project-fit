<?php
$withs = [
    'counter' => '5%',
    'id' => '10%',
    'job_name' => '40%',
    'status' => '10%',
    'updated_at' => '20%'
];
?>
<?php if(!empty($items) && (!$items->isEmpty()) ): ?>
    <div style="min-height: 50px;">
        <div>
            <?php if($items->total() == 1): ?>
                <?php echo trans($plang_admin.'.descriptions.counter', ['number' => 1]); ?>

            <?php else: ?>
                <?php echo trans($plang_admin.'.descriptions.counters', ['number' => $items->total()]); ?>

            <?php endif; ?>
        </div>

        <?php echo Form::submit(trans($plang_admin.'.buttons.delete-in-trash'), array(
                                                                            "class"=>"btn btn-warning delete btn-delete-all",
                                                                            "title"=> trans($plang_admin.'.hint.delete-in-trash'),
                                                                            'name'=>'del-trash')); ?>

        <?php echo Form::submit(trans($plang_admin.'.buttons.delete-forever'), array(
                                                                            "class"=>"btn btn-danger delete btn-delete-all",
                                                                            "title"=> trans($plang_admin.'.hint.delete-forever'),
                                                                            'name'=>'del-forever')); ?>

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

            <!-- ID -->
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
            <?php $name = 'job_name' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                <?php echo trans($plang_admin.'.columns.job_name'); ?>

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
            <th class="hidden-xs text-center" style='width:<?php echo e($withs[$name]); ?>'><?php echo trans($plang_admin.'.columns.status'); ?>

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
            <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'><?php echo trans($plang_admin.'.columns.updated_at'); ?>

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

        </tr>

    </thead>

    <tbody>
        <?php $counter = $items->perPage() * ($items->currentPage() - 1) + 1;  ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <!--COUNTER-->
                <td>
                    <?php echo $counter; $counter++ ?>
                    <span class='box-item pull-right'>
                        <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="<?php echo $item->id; ?>">
                        <label for="box-item"></label>
                    </span>
                </td>

                <td>
                    <a href="<?php echo URL::route('crawler.work.job.edit', ['id' => $item->id]); ?>">
                        <?php echo $item->id; ?>

                    </a>
                </td>

                <!--NAME-->
                <td>
                    <?php echo $item->job_name; ?>

                </td>

                <!--STATUS-->
                <td class="text-center">
                    <?php if($item->status && (isset($config_status['list'][$item->status]))): ?>
                        <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->status]; ?>" title='<?php echo $config_status["list"][$item->status]; ?>'></i>
                    <?php else: ?>
                    <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                    <?php endif; ?>
                </td>

                <!--UPDATED AT-->
                <td> <?php echo $item->updated_at; ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>
</div>
<div class="paginator">
    <?php echo $items->appends($request->except(['page']) )->render($pagination_view); ?>

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
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-crawler/Views/admin/works/jobs/job-item.blade.php ENDPATH**/ ?>