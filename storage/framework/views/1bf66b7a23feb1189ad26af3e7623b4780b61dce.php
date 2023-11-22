<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">تعديل إعداد</h1>
                    </div>
                    <form method="post" action="<?php echo e(action('SettingsController@update',["setting_id",$setting->id])); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="setting_id" value="<?php echo e($setting->id); ?>"/>
                        <label>إسم الإعداد :</label>
                        <input type="text" name="key" class="form-control" placeholder="إسم الإعداد" value="<?php echo e($setting->key); ?>" required>
                        <label>قيمة الإعداد :</label>
                        <input type="text" name="value" class="form-control" placeholder="قيمة الإعداد" value="<?php echo e($setting->value); ?>" required>
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/settings/edit.blade.php ENDPATH**/ ?>