<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin">
            <i class="fa fa-history" aria-hidden="true"></i>
            <?php echo trans($plang_admin . '.labels.title-backup') ?>
        </h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover">

            <thead>
            <tr style="height: 50px;">

                <!--VERSION-->
                <th style='width:10%'>
                    <?php echo e(trans($plang_admin.'.columns.order')); ?>

                </th>

                <!--FILENAME-->
                <th style='width:90%'>
                    <?php echo e(trans($plang_admin.'.columns.filename')); ?>

                </th>


            </tr>

            </thead>

            <tbody>
            <?php $version = count($backups) ?>
            <?php $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!--COUNTER-->
                    <td> <?php echo 'v.'.$version; $version--; ?>  </td>

                    <!--NAME-->
                    <td>
                        <a href="<?php echo URL::route('contexts.config', ['v' => base64_encode($backup)]); ?>">
                            <?php echo basename($backup); ?>

                        </a>
                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>

    </div>
</div>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-category/Views/admin/context-config-backup.blade.php ENDPATH**/ ?>