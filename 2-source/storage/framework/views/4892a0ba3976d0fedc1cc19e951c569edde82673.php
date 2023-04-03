<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i>
            <?php echo trans($plang_admin.'.labels.title-search-courses') ?>
        </h3>
    </div>
    <div class="panel-body">

        <?php echo Form::open(['route' => 'teacher.course','method' => 'get']); ?>


            <!--BUTTONS-->
            <div class="form-group">
                <a href="<?php echo URL::route('teacher.course', ['context' => @$params['context']]); ?>" class="btn btn-default search-reset">
                    <?php echo trans($plang_admin.'.buttons.reset'); ?>

                </a>
                <?php echo Form::submit(trans($plang_admin.'.buttons.search').'', ["class" => "btn btn-info", 'id' => 'search-submit']); ?>

            </div>

            <!-- KEYWORD -->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'keyword',
                'label' => trans($plang_admin.'.form.keyword'),
                'value' => @$params['keyword'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- STATUS -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'status',
                'label' => trans($plang_admin.'.form.status'),
                'value' => @$params['status']?$params['status']:'99',
                'items' => $status,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--SORTING-->
            <?php echo $__env->make('package-category::admin.partials.sorting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class='hidden-field'>
                <?php echo Form::hidden('context',@$request->get('context',null)); ?>

                <?php echo csrf_field(); ?>

            </div>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-courses/Views/teacher/course-search.blade.php ENDPATH**/ ?>