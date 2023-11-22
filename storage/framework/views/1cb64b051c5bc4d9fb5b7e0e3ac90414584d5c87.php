<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل كلمة مرور (<?php echo e($user->name); ?>)</h3>
                    </div>
                    <form method="POST" action="/admin/users/update_user_password">
                        <?php echo csrf_field(); ?>
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                        <label><span style="color:#ff1f29"><b>*</b></span>تعديل كلمة المرور :</label>
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور الجديدة" required>
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/users/edit_password.blade.php ENDPATH**/ ?>