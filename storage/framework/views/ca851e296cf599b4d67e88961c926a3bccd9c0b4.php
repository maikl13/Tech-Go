<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">تعديل مدينة</h1>
                    </div>
                    <form method="post" action="<?php echo e(action('CitiesController@update',["city_id",$cities->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="city_id" value="<?php echo e($cities->id); ?>"/>
                        <label>إسم المدينة</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم المدينة" value="<?php echo e($cities->name); ?>" required>
                        <label>المنطقة الجغرافية : </label>
                        <select name="country_id" class="form-control col-12" >
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>" <?php if($c->id==$cities->country_id): ?> selected <?php endif; ?>><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/cities/edit.blade.php ENDPATH**/ ?>