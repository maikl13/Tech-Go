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
                        <label>إسم القسم بالعربية</label>
                        <input type="text" name="name_ar" class="form-control" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?> placeholder="إسم القسم بالعربية" required>

                        <label>إسم القسم بالإنجليزي</label>
                        <input type="text" name="name_en" class="form-control" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?> placeholder="إسم القسم بالإنجليزي" required>
   
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/super_categories/create.blade.php ENDPATH**/ ?>