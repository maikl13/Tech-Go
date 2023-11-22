<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل قسم رئيسي</h3>
                    </div>
                    <form method="post"
                          action="<?php echo e(action('SuperCategoriesController@update',["category_id",$category->id])); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>"/>


                        <label>إسم القسم بالإنجليزية</label>
                        <input type="text" name="name_en" class="form-control" placeholder="إسم القسم بالإنجليزية" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                               value="<?php echo e($category->name_en); ?>" required>

                        <label>إسم القسم بالعربية</label>
                        <input type="text" name="name_ar" class="form-control" placeholder="إسم القسم بالعربية" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                               value="<?php echo e($category->name_ar); ?>" required>


                        <button class="btn btn-primary" type="submit" style="margin-top: 10px"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>
                            تعديل
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/super_categories/edit.blade.php ENDPATH**/ ?>