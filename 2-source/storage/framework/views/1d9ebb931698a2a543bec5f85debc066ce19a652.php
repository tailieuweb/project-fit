<!------------------------------------------------------------------------------
| List of elements in company form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['company.post', 'id' => @$item->id],  'files'=>true, 'method' => 'post']); ?>


    <!--BUTTONS-->
    <div class='btn-form'>
        <?php if(isset($item) && $item->deleted_at): ?>
            <a href="<?php echo URL::route('company.restore',['id' => $item->id, '_token' => csrf_token()]); ?>"
               class="btn btn-success pull-right margin-left-5 restore">
                <?php echo trans($plang_admin.'.buttons.restore'); ?>

            </a>
        <?php elseif(isset($item)): ?>
            <a href="<?php echo URL::route('company.delete',['id' => @$item->id, '_token' => csrf_token()]); ?>"
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
            <a data-toggle="tab" href="#menu_1">
                <?php echo trans($plang_admin.'.tabs.menu-1'); ?>

            </a>
        </li>
        <!--OTHER-->
        <li>
            <a data-toggle="tab" href="#menu_3">
                <?php echo trans($plang_admin.'.tabs.other'); ?>

            </a>
        </li>
    </ul>
    <!--/TAB MENU-->

    <!--TAB CONTENT-->
    <div class="tab-content">

        <!--MENU 1-->
        <div id="menu_1" class="tab-pane fade in active">

            <!--NAME-->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'company_name',
                'label' => trans($plang_admin.'.labels.company_name'),
                'value' => @$item->company_name,
                'description' => trans($plang_admin.'.descriptions.company_name'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/NAME-->

            <!--SITE SLUG-->
            <?php echo $__env->make('package-category::admin.partials.input_slug', [
                'name' => 'company_slug',
                'id' => 'company_slug',
                'ref' => 'company_name',
                'label' => trans($plang_admin.'.labels.slug'),
                'value' => @$item->company_slug,
                'description' => trans($plang_admin.'.descriptions.slug'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/SITE SLUG-->

            <!--WEBSITE-->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'company_website',
                'label' => trans($plang_admin.'.labels.company_website'),
                'value' => @$item->company_website,
                'description' => trans($plang_admin.'.descriptions.company_website'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /WEBSITE-->

            <!--ADDRESS-->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'company_address',
                'label' => trans($plang_admin.'.labels.company_address'),
                'value' => @$item->company_address,
                'description' => trans($plang_admin.'.descriptions.company_address'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /ADDRESS-->

            <div class="row">
                <div class='col-md-6'>
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

                <div class="col-md-6">
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

             <!--DESCRIPTION-->
            <?php echo $__env->make('package-category::admin.partials.textarea', [
                'name' => 'company_description',
                'label' => trans($plang_admin.'.labels.company_description'),
                'value' => @$item->company_description,
                'description' => trans($plang_admin.'.descriptions.company_description'),
                'rows' => 25,
                'tinymce' => true,
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/DESCRIPTION-->
        </div>
        <!--/END MENU1-->
        <!--OTHER-->
        <div id="menu_3" class="tab-pane fade">
            <!--SITE IMAGE-->
            <?php echo $__env->make('package-category::admin.partials.input_image', [
                'name' => 'company_image',
                'label' => trans($plang_admin.'.labels.company_image'),
                'value' => @$item->company_image,
                'description' => trans($plang_admin.'.descriptions.company_image'),
                'errors' => $errors,
                'lfm_config' => TRUE
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/SITE IMAGE-->
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
| End list of elements in company form
|------------------------------------------------------------------------------>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-company/Views/admin/company-form.blade.php ENDPATH**/ ?>