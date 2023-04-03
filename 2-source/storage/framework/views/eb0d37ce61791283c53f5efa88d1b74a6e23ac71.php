<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_admin.'.pages.group-edit'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            
            <?php if($errors->has('model') ): ?>
                <div class="alert alert-danger"><?php echo $errors->first('model'); ?></div>
            <?php endif; ?>

            
            <?php $message = Session::get('message'); ?>
            <?php if( isset($message) ): ?>
                <div class="alert alert-success"><?php echo e($message); ?></div>
            <?php endif; ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin"><?php echo isset($group->id) ? '<i class="fa fa-pencil"></i> Edit' : '<i class="fa fa-users"></i> Create'; ?>

                        group</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            
                            <h4><?php echo trans($plang_admin.'.labels.general-data'); ?></h4>
                            <?php echo Form::model($group, [ 'url' => [URL::route('groups.edit'), $group->id], 'method' => 'post'] ); ?>

                        <!-- name text field -->
                            <div class="form-group">
                                <?php echo Form::label('name',trans($plang_admin.'.labels.group-name').':*'); ?>

                                <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'group name']); ?>

                            </div>
                            <span class="text-danger"><?php echo $errors->first('name'); ?></span>
                            <?php echo Form::hidden('id'); ?>


                            <?php if($group->deleted_at): ?>
                                <a href="<?php echo URL::route('groups.restore',['id' => $group->id, '_token' => csrf_token()]); ?>"
                                   class="btn btn-success pull-right margin-left-5 restore">
                                    <?php echo trans($plang_admin.'.buttons.restore'); ?>

                                </a>
                            <?php else: ?>
                                <a href="<?php echo URL::route('groups.delete',['id' => $group->id, '_token' => csrf_token()]); ?>"
                                   class="btn btn-warning pull-right margin-left-5 delete">
                                    <?php echo trans($plang_admin.'.buttons.delete'); ?>

                                </a>
                            <?php endif; ?>
                            <?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

                            <?php echo Form::close(); ?>

                        </div>
                        <div class="col-md-4 col-xs-6">
                        </div>
                        <div class="col-md-4 col-xs-6">
                            
                            <h4><i class="fa fa-lock"></i><?php echo trans($plang_admin.'.labels.permission-name'); ?></h4>
                            
                            <?php echo $__env->make('package-acl::admin.group.perm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(".delete").click(function () {
            return confirm("<?php echo trans($plang_admin.'.messages.user-delete'); ?>");
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/internship/2-source/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/group/edit.blade.php ENDPATH**/ ?>