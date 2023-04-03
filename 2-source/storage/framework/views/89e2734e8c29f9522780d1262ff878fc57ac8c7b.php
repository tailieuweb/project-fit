<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_admin.'.pages.permission-edit'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-9">
            
            <?php if($errors->has('model') ): ?>
                <div class="alert alert-danger"><?php echo e($errors->first('model')); ?></div>
            <?php endif; ?>

            
            <?php $message = Session::get('message'); ?>
            <?php if( isset($message) ): ?>
                <div class="alert alert-success"><?php echo e($message); ?></div>
            <?php endif; ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        <?php echo isset($permission->id) ? '<i class="fa fa-pencil"></i> Edit' : '<i class="fa fa-lock"></i> Create'; ?>

                        permission
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo Form::model($permission, [ 'url' => [URL::route('permissions.edit'), $permission->id], 'method' => 'post'] ); ?>

                    <?php echo Form::hidden('id'); ?>

                    <div clas="row">
                        <div class="col-md-12">
                            <a href="<?php echo URL::route('permissions.delete',['id' => $permission->id, '_token' => csrf_token()]); ?>"
                               class="btn btn-danger pull-right margin-left-5 delete">Delete</a>
                            <?php echo Form::submit('Save', array("class"=>"btn btn-info pull-right ")); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <!-- NAME TEXT FIELD -->
                            <div class="form-group">
                                <?php echo Form::label('name',trans($plang_admin.'.labels.permission_name').':*'); ?>

                                <?php echo Form::text('name', @$permission->name, ['class' => 'form-control', 'placeholder' => 'Permission name', 'id' => 'slugme']); ?>

                            </div>
                            <span class="text-danger"><?php echo $errors->first('name'); ?></span>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <!-- PERMISSION TEXT FIELD -->
                            <div class="form-group">
                                <?php echo Form::label('permission',trans($plang_admin.'.labels.permission-name').':*'); ?>

                                <?php echo Form::text('permission', @$permission->permission, ['class' => 'form-control', 'placeholder' => 'Permission slug', 'id' => 'slug']); ?>

                            </div>
                            <span class="text-danger"><?php echo $errors->first('permission'); ?></span>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <!-- category_id TEXT FIELD -->
                            <div class="form-group">
                                <?php echo Form::label('category_id',trans($plang_admin.'.labels.category').':'); ?>

                                <?php echo Form::select('category_id', $pluck_select_category, @$permission->category_id, ["class" => "form-control"]); ?>

                            </div>
                            <span class="text-danger"><?php echo $errors->first('category_id'); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!--PERMISSION DESCRIPTION-->
                            <?php echo $__env->make('package-category::admin.partials.textarea', [
                            'name' => 'description',
                            'label' => trans($plang_admin.'.labels.permission_description'),
                            'value' => @$item->slideshow_description,
                            'description' => trans($plang_admin.'.descriptions.permission_description'),
                            'rows' => 50,
                            'tinymce' => true,
                            'errors' => $errors,
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!--/PERMISSION DESCRIPTION-->
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <?php echo $__env->make('package-acl::admin.permission.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/vendor/slugit.js'); ?>

    <script>
        $(".delete").click(function () {
            return confirm("<?php echo trans($plang_admin.'.messages.user-delete'); ?>");
        });
        $(function () {
            $('#slugme').slugIt();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/permission/edit.blade.php ENDPATH**/ ?>