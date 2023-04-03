<?php if(!empty($items)): ?>
<?php
$withs = [
    'order' => '10%',
    'col'   => '10%'
];

$counter = 1;
?>
<caption>
    <?php if(count($items) == 1): ?>
    <?php echo trans($plang_admin.'.descriptions.counter', ['number' => 1]); ?>

    <?php else: ?>
    <?php echo trans($plang_admin.'.descriptions.counters', ['number' => count($items)]); ?>

    <?php endif; ?>
</caption>

<table class="table table-hover">

    <thead>
        <tr style="height: 50px;">

            <!--ORDER-->
            <th style='width:<?php echo e($withs['order']); ?>'>
                <?php echo e(trans($plang_admin.'.columns.order')); ?>

            </th>

            <!-- COLUMNS -->
            <?php $item = $items[0]; ?>
            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th style='width:<?php echo e($withs['col']); ?>'>
                    <?php echo $key; ?>

                </th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tr>

    </thead>

    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <!--ORDER-->
            <td> <?php echo $counter;  $counter++; ?> </td>

            <!--COLUMN-->
            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td> <?php echo $value; ?> </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>
<div class="paginator">

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

<?php $__env->stopSection(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-pexcel/Views/admin/pexcel-view-item.blade.php ENDPATH**/ ?>