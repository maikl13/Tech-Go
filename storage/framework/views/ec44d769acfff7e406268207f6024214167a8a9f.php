<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة منطقة جغرافية</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('CountriesController@store')); ?>">
                        <?php echo csrf_field(); ?>
                        <label>إسم القسم</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم المنطقة الجغرافية">
                        <input type="text" name="def_price" class="form-control" placeholder="سعر التوصيل الإفتراضي" style="margin-top: 10px">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/countries/create.blade.php ENDPATH**/ ?>