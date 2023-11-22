<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة إعداد</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('SettingsController@store')); ?>">
                        <?php echo csrf_field(); ?>
                        <label>إسم الإعداد</label>
                        <input type="text" name="key" class="form-control" placeholder="إسم الإعداد">
                        <label>قيمة الإعداد</label>
                        <input type="text" name="value" class="form-control" placeholder="قيمة الإعداد">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/settings/create.blade.php ENDPATH**/ ?>