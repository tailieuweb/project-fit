<?php if(!empty($items) && (!$items->isEmpty()) ): ?>
    <?php
    $withs = [
        'order' => '10%',
        'name' => '40%',
        'status' => '10%',
        'updated_at' => '25%',
        'operations' => '15%',
    ];

    global $counter;
    $nav = $items->toArray();
    $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
    ?>
    <caption>
        <?php if($nav['total'] == 1): ?>
            <?php echo trans($plang_admin.'.descriptions.counter', ['number' => $nav['total']]); ?>

        <?php else: ?>
            <?php echo trans($plang_admin.'.descriptions.counters', ['number' => $nav['total']]); ?>

        <?php endif; ?>
    </caption>

    <table class="table table-hover">

        <thead>
        <tr style="height: 50px;">

            <!--ORDER-->
            <th style='width:<?php echo e($withs['order']); ?>'>
                <?php echo e(trans($plang_admin.'.columns.order')); ?>

                <span class="del-checkbox pull-right">
                    <input type="checkbox" id="selecctall"/>
                    <label for="del-checkbox"></label>
                </span>
            </th>

            <!-- NAME -->
            <?php $name = 'post_name' ?>

            <th class="hidden-xs" style='width:<?php echo e($withs['name']); ?>'><?php echo trans($plang_admin.'.columns.name'); ?>

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

            <th class="hidden-xs text-center"
                style='width:<?php echo e($withs['status']); ?>'><?php echo trans($plang_admin.'.columns.status'); ?>

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

            <!-- UPDATE -->
            <?php $name = 'updated_at' ?>

            <th class="hidden-xs" style='width:<?php echo e($withs['updated_at']); ?>'>
                <?php echo trans($plang_admin.'.columns.updated_at'); ?>

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

                <?php echo Form::submit(trans($plang_admin.'.buttons.delete-in-trash'), array(
                                                                            "class"=>"btn btn-danger pull-right delete btn-delete-all del-trash",
                                                                            "title"=> trans($plang_admin.'.hint.delete-in-trash'),
                                                                            'name'=>'del-trash')); ?>

                <?php echo Form::submit(trans($plang_admin.'.buttons.delete-forever'), array(
                                                                            "class"=>"btn btn-warning pull-right delete btn-delete-all del-forever",
                                                                            "title"=> trans($plang_admin.'.hint.delete-forever'),
                                                                            'name'=>'del-forever')); ?>

            </th>
            </th>

        </tr>

        </thead>

        <tbody>
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

                <!--NAME-->
                <td> <?php echo $item->post_name; ?> </td>

                <!--STATUS-->
                <td style="text-align: center;">

                    <?php if($item->status && (isset($config_status['list'][$item->status]))): ?>
                        <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->status]; ?>"
                           title='<?php echo $config_status["list"][$item->status]; ?>'></i>
                    <?php else: ?>
                        <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                    <?php endif; ?>
                </td>

                <!--UPDATED AT-->
                <td> <?php echo date('d-m-Y H:i',strtotime($item->updated_at)); ?> </td>

                <!--OPERATOR-->
                <td>
                    <!--comment-->
                    <?php if(Route::has('comments.by_context')): ?>
                        <a href="<?php echo URL::route('comments.by_context', [   'id' => $item->id,
                                                                       'context' => 'post',
                                                                       '_token' => csrf_token()
                                                            ]); ?>">
                            <i class="fa fa-commenting" aria-hidden="true"></i>
                        </a>&nbsp;
                <?php endif; ?>

                <!--edit-->
                    <a href="<?php echo URL::route('posts.edit', [   'id' => $item->id,
                                                                '_token' => csrf_token()
                                                            ]); ?>">
                        <i class="fa fa-edit f-tb-icon"></i>
                    </a>&nbsp;


                    <!--copy-->
                    <a href="<?php echo URL::route('posts.copy',[    'cid' => $item->id,
                                                                '_token' => csrf_token(),
                                                            ]); ?>"
                       class="margin-left-5">
                        <i class="fa fa-files-o f-tb-icon" aria-hidden="true"></i>
                    </a>&nbsp;

                    <!--delete-->
                    <a href="<?php echo URL::route('posts.delete',['id' => $item->id,
                                                                '_token' => csrf_token(),
                                                                 ]); ?>"
                       class="margin-left-5 delete">
                        <i class="fa fa-trash-o f-tb-icon"></i>
                    </a>

                </td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>
    <div class="paginator">
        <?php echo $items->appends($request->except(['page']) )->render(); ?>

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
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-post/Views/admin/post-item.blade.php ENDPATH**/ ?>