<!------------------------------------------------------------------------------
| List of elements in post form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['posts.post', 'id' => @$item->id],  'files'=>true, 'method' => 'post']); ?>


<!--BUTTONS-->
<div class='btn-form'>
    <!-- DELETE BUTTON -->
    <?php if($item): ?>
        <a href="<?php echo URL::route('posts.delete',['id' => @$item->id, '_token' => csrf_token()]); ?>"
           class="btn btn-danger pull-right margin-left-5 delete">
            <?php echo trans($plang_admin.'.buttons.delete'); ?>

        </a>
<?php endif; ?>
<!-- DELETE BUTTON -->

    <!-- SAVE BUTTON -->
<?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

<!-- /SAVE BUTTON -->
</div>
<!--/BUTTONS-->

<!--TAB MENU-->
<ul class="nav nav-tabs">
    <!--BASIC-->
    <li class="active">
        <a data-toggle="tab" href="#menu_1">
            <?php echo trans($plang_admin.'.tabs.basic'); ?>

        </a>
    </li>

    <!--ADVANCED-->
    <li>
        <a data-toggle="tab" href="#menu_2">
            <?php echo trans($plang_admin.'.tabs.advance'); ?>

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

    <!--BASIC-->
    <div id="menu_1" class="tab-pane fade in active">

        <!--POST NAME-->
    <?php echo $__env->make('package-category::admin.partials.input_text', [
        'name' => 'post_name',
        'id' => 'post_name',
        'label' => trans($plang_admin.'.labels.name'),
        'value' => @$item->post_name,
        'description' => trans($plang_admin.'.descriptions.name'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/POST NAME-->

        <!--POST SLUG-->
    <?php echo $__env->make('package-category::admin.partials.input_slug', [
        'name' => 'post_slug',
        'id' => 'post_slug',
        'ref' => 'post_name',
        'label' => trans($plang_admin.'.labels.slug'),
        'value' => @$item->post_slug,
        'description' => trans($plang_admin.'.descriptions.slug'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/POST SLUG-->

        <div class="row">

            <div class='col-md-6'>

                <!-- LIST OF CATEGORIES -->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'category_id',
                    'label' => trans($plang_admin.'.labels.category'),
                    'items' => $categories,
                    'value' => @$item->category_id,
                    'description' => trans($plang_admin.'.descriptions.category', [
                                 'href' => URL::route('categories.list', ['_key' => $context->context_key])
                                 ]),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <div class='col-md-6'>

                <!-- LIST OF CATEGORIES -->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'slideshow_id',
                    'label' => trans($plang_admin.'.labels.slideshow'),
                    'items' => $slideshow,
                    'value' => @$item->slideshow_id,
                    'description' => trans($plang_admin.'.descriptions.slideshow', [
                                 'href' => URL::route('slideshows.list')
                                 ]),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <div class='col-md-6'>
                <!--STATUS-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'status',
                    'label' => trans($plang_admin.'.form.status'),
                    'value' => @$item->status,
                    'items' => $status,
                    'description' => trans($plang_admin.'.descriptions.status'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>

        <!--POST DESCRIPTION-->
    <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'post_description',
        'label' => trans($plang_admin.'.labels.description'),
        'value' => @$item->post_description,
        'description' => trans($plang_admin.'.descriptions.description'),
        'rows' => 70,
        'tinymce' => true,
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/POST DESCRIPTION-->

    </div>

    <!--ADVANCED-->
    <div id="menu_2" class="tab-pane fade">
        <!--POST OVERVIEW-->
    <?php echo $__env->make('package-category::admin.partials.textarea', [
    'name' => 'post_overview',
    'label' => trans($plang_admin.'.labels.overview'),
    'value' => @$item->post_overview,
    'description' => trans($plang_admin.'.descriptions.overview'),
    'tinymce' => false,
    'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/POST OVERVIEW-->

    </div>

    <!--OTHER-->
    <div id="menu_3" class="tab-pane fade">
        <!--POST IMAGE-->
        <?php echo $__env->make('package-category::admin.partials.input_image', [
            'name' => 'post_image',
            'label' => trans($plang_admin.'.labels.image'),
            'value' => @$item->post_image,
            'description' => trans($plang_admin.'.descriptions.image'),
            'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/POST IMAGE-->

        <!--POST FILES-->
    <?php echo $__env->make('package-category::admin.partials.input_files', [
        'name' => 'files',
        'label' => trans($plang_admin.'.labels.files'),
        'value' => @$item->post_files,
        'description' => trans($plang_admin.'.descriptions.files'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/POST FILES-->
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
| End list of elements in post form
|------------------------------------------------------------------------------>
<?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-post/Views/admin/post-form.blade.php ENDPATH**/ ?>