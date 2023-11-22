<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#fff">تعديل قسم</h1>
                    </div>
                    <form method="post"
                          action="<?php echo e(action('CategoriesController@update',["category_id",$category->id])); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>"/>
                        <input type="text" name="name" class="form-control" placeholder="إسم القسم"
                               value="<?php echo e($category->name); ?>"
                               <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?> required>

                        <label>القسم الرئيسي</label>
                        <select name="super_category_id" class="form-control col-12"  <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?> required>
                            <?php $__currentLoopData = $super_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"
                                        <?php if($category->super_category_id==$c->id): ?>selected <?php endif; ?>><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label>صورة القسم</label>
                        <input type="file" name="image" class="form-control"
                               accept="image/*">

                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="active" <?php if($category->active=='true'): ?>checked <?php endif; ?>>
                            <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                        </div>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/categories/edit.blade.php ENDPATH**/ ?>