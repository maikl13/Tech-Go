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


                        <input type="text" name="name" class="form-control" placeholder="إسم القسم" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                               value="<?php echo e($category->name); ?>" required>


                        <label>صورة القسم</label>
                        <input type="file" name="image" class="form-control"
                               accept="image/*">
                        <label>صورة الإعلان</label>
                        <input type="file" name="banner" class="form-control"
                               accept="image/*">


                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="active"
                                   <?php if($category->active=='true'): ?>checked <?php endif; ?> >
                            <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                        </div>
                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_home"
                                   <?php if($category->show_home=='true'): ?>checked <?php endif; ?> >
                            <label class="form-check-label" for="inlineCheckbox1">عرض بالرئيسية</label>
                        </div>

                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_home_products"
                                   <?php if($category->show_home_products=='true'): ?>checked <?php endif; ?>>
                            <label class="form-check-label" for="inlineCheckbox1">عرض مع الاقسام بالرئيسية</label>
                        </div>

                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_search"
                                   <?php if($category->show_search=="true"): ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="inlineCheckbox1">عرض بالبحث</label>
                        </div>
                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_left" <?php if($category->show_left=="true"): ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="inlineCheckbox1">عرض بالقائمة</label>
                        </div>
                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_banner" <?php if($category->show_banner=="true"): ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="inlineCheckbox1">عرض الإعلان</label>
                        </div>


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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/super_categories/edit.blade.php ENDPATH**/ ?>