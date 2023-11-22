<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">تعديل منطقة جغرافية</h1>
                    </div>
                    <form method="post" action="<?php echo e(action('CountriesController@update',["country_id",$countries->id])); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="country_id" value="<?php echo e($countries->id); ?>"/>
                        <label>إسم المنطقة الجغرافية :</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم المنطقة الجغرافية" value="<?php echo e($countries->name); ?>" required>
                        <label>السعر الإفتراضي :</label>
                        <input type="number" name="def_price" class="form-control" placeholder="السعر الإفتراضي للتوصيل" value="<?php echo e($countries->def_price); ?>" required>


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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/countries/edit.blade.php ENDPATH**/ ?>