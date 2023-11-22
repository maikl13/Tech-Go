<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">إضافة كود خصم</h1>
                    </div>
                    <form method="POST" action="<?php echo e(action('CodeController@store')); ?>">
                        <?php echo csrf_field(); ?>
                        <label>كود الخصم : </label>
                            <input type="text" name="code" class="form-control" placeholder="كود الخصم...">
                        <label>نسبة الخصم : </label>
                            <input type="text" name="percentage" class="form-control" placeholder="نسبة الخصم">
                        <label>عدد الإستخدامات : </label>
                            <input type="text" name="max_using" class="form-control" placeholder="عدد الإستخدامات">
                        <label>أعلى قيمة للإستخدام : </label>
                            <input type="text" name="max_price" class="form-control" placeholder="أعلى قيمة للإستخدام">
                        

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/code/create.blade.php ENDPATH**/ ?>