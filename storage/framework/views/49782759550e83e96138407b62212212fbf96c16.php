<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة قسم فرعي</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('CategoriesController@store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>


                        <label>إسم القسم</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم القسم" required <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>>

                        <label>القسم الرئيسي</label>
                        <select name="super_category" class="form-control col-12" style="margin-top: 10px" required <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>>
                            <?php $__currentLoopData = $super_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label>صورة القسم</label>
                        <input type="file" name="image" class="form-control"
                               accept="image/*" required>

                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="active">
                            <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                        </div>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/categories/create.blade.php ENDPATH**/ ?>