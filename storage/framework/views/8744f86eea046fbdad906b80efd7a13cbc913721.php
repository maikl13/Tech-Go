<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة قسم رئيسي</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('SuperCategoriesController@store')); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <label>إسم القسم</label>
                        <input type="text" name="name" class="form-control" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?> placeholder="إسم القسم" required>
                        <label>صورة القسم</label>
                        <input type="file" name="image" class="form-control"
                               accept="image/*" required>
                        <label>صورة الإعلان</label>
                        <input type="file" name="banner" class="form-control"
                               accept="image/*">


                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="active">
                            <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                        </div>
                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_home">
                            <label class="form-check-label" for="inlineCheckbox1">عرض بالرئيسية</label>
                        </div>

                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_home_products">
                            <label class="form-check-label" for="inlineCheckbox1">عرض مع المنتجات بالرئيسية</label>
                        </div>

                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_search">
                            <label class="form-check-label" for="inlineCheckbox1">عرض بالبحث</label>
                        </div>
                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_left">
                            <label class="form-check-label" for="inlineCheckbox1">عرض بالقائمة</label>
                        </div>
                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="show_banner">
                            <label class="form-check-label" for="inlineCheckbox1">عرض الإعلان</label>
                        </div>

                        <button class="btn btn-primary col-12" type="submit" style="margin-top: 10px"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>
                            حفظ
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    


    
    
    

    
    
    
    
    
    

    
    
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/super_categories/create.blade.php ENDPATH**/ ?>