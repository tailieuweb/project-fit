<!------------------------------------------------------------------------------
| List of elements in course form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['course.post', 'id' => @$item->id],  'files'=>true, 'method' => 'post']); ?>


    <!--BUTTONS-->
    <div class='btn-form'>
        <?php if(isset($item) && $item->deleted_at): ?>
            <a href="<?php echo URL::route('course.restore',['id' => $item->id, '_token' => csrf_token()]); ?>"
               class="btn btn-success pull-right margin-left-5 restore">
                <?php echo trans($plang_admin.'.buttons.restore'); ?>

            </a>
        <?php elseif(isset($item)): ?>
            <a href="<?php echo URL::route('course.delete',['id' => @$item->id, '_token' => csrf_token()]); ?>"
               class="btn btn-warning pull-right margin-left-5 delete">
                <?php echo trans($plang_admin.'.buttons.delete'); ?>

            </a>
        <?php endif; ?>
        <!-- SAVE BUTTON -->
            <?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

        <!-- /SAVE BUTTON -->
    </div>
    <!--/BUTTONS-->

    <!--TAB MENU-->
    <ul class="nav nav-tabs">
        <!--MENU 1-->
        <li class="active">
            <a data-toggle="tab" href="#menu_1_require">
                <?php echo trans($plang_admin.'.tabs.menu_1_require'); ?>

            </a>
        </li>
        <!--OTHER-->
        <li>
            <a data-toggle="tab" href="#menu_2_other">
                <?php echo trans($plang_admin.'.tabs.menu_2_other'); ?>

            </a>
        </li>
    </ul>
    <!--/TAB MENU-->

    <!--TAB CONTENT-->
    <div class="tab-content">

        <!--MENU 1-->
        <div id="menu_1_require" class="tab-pane fade in active">

            <!--NAME-->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'course_name',
                'label' => trans($plang_admin.'.labels.course_name'),
                'value' => @$item->course_name,
                'description' => trans($plang_admin.'.descriptions.course_name'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/NAME-->

            <!--SLUG-->
            <?php echo $__env->make('package-category::admin.partials.input_slug', [
                'name' => 'course_slug',
                'id' => 'course_slug',
                'ref' => 'course_name',
                'label' => trans($plang_admin.'.labels.slug'),
                'value' => @$item->course_slug,
                'description' => trans($plang_admin.'.descriptions.slug'),
                'errors' => $errors,
                'hidden' => true
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/SLUG-->

            <div class="row">
                <div class='col-md-3'>
                    <!--START DATE-->
                    <?php echo $__env->make('package-category::admin.partials.input_text', [
                        'name' => 'course_start_date',
                        'label' => trans($plang_admin.'.labels.course_start_date'),
                        'value' => @$item->course_start_date,
                        'description' => trans($plang_admin.'.descriptions.course_start_date'),
                        'errors' => $errors,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- /START DATE-->
                </div>
                <div class='col-md-3'>
                    <!--END DATE-->
                    <?php echo $__env->make('package-category::admin.partials.input_text', [
                        'name' => 'course_end_date',
                        'label' => trans($plang_admin.'.labels.course_end_date'),
                        'value' => @$item->course_end_date,
                        'description' => trans($plang_admin.'.descriptions.course_end_date'),
                        'errors' => $errors,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- /END DATE-->
                </div>
                <div class='col-md-3'>
                    <!--CATEGORY ID-->
                    <?php echo $__env->make('package-category::admin.partials.select_single', [
                        'name' => 'category_id',
                        'label' => trans($plang_admin.'.form.category_id'),
                        'value' => @$item->category_id,
                        'items' => $categories,
                        'description' => trans($plang_admin.'.descriptions.category_id'),
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--/CATEGORY ID-->
                </div>

                <div class="col-md-3">
                    <!--STATUS-->
                    <?php echo $__env->make('package-category::admin.partials.select_single', [
                        'name' => 'status',
                        'label' => trans($plang_admin.'.form.status'),
                        'value' => @$item->status,
                        'items' => $status,
                        'description' => trans($plang_admin.'.descriptions.status'),
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--/STATUS-->
                </div>
            </div>

            <div class="row">
                <div class='col-md-6'>
                    <!--TEACHER ID-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'teacher_id',
                    'label' => trans($plang_admin.'.form.teacher_id'),
                    'value' => @$item->teacher_id,
                    'items' => $teachers,
                    'description' => trans($plang_admin.'.descriptions.teacher_id'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--/TEACHER ID-->
                </div>
                <div class='col-md-6'>
                    <!--PEXCEL FILES-->
                <?php echo $__env->make('package-category::admin.partials.input_files', [
                    'name' => 'files',
                    'label' => trans($plang_admin.'.labels.files'),
                    'value' => @$item->course_enroll_file_path,
                    'description' => trans($plang_admin.'.descriptions.files'),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--/PEXCEL FILES-->
                </div>
            </div>

        </div>
        <!--/END MENU1-->
        <!--OTHER-->
        <div id="menu_2_other" class="tab-pane fade">
            <!--SITE IMAGE-->
            <?php echo $__env->make('package-category::admin.partials.input_image', [
                'name' => 'course_image',
                'label' => trans($plang_admin.'.labels.course_image'),
                'value' => @$item->course_image,
                'description' => trans($plang_admin.'.descriptions.course_image'),
                'errors' => $errors,
                'lfm_config' => TRUE
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/SITE IMAGE-->
            <!--DESCRIPTION-->
            <?php echo $__env->make('package-category::admin.partials.textarea', [
                'name' => 'course_description',
                'label' => trans($plang_admin.'.labels.course_description'),
                'value' => @$item->course_description,
                'description' => trans($plang_admin.'.descriptions.course_description'),
                'rows' => 25,
                'tinymce' => true,
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/DESCRIPTION-->
        </div>

    </div>
    <!--/TAB CONTENT-->

    <!--HIDDEN FIELDS-->
    <div class='hidden-field'>
        <?php echo Form::hidden('id',@$item->id); ?>

        <?php echo Form::hidden('context',$request->get('context',null)); ?>

    </div>
    <!--/HIDDEN FIELDS-->

<?php echo Form::close(); ?>

<!------------------------------------------------------------------------------
| End list of elements in course form
|------------------------------------------------------------------------------>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-courses/Views/admin/course-form.blade.php ENDPATH**/ ?>