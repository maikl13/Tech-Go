<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة شريحة جديدة</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('SlidersController@store')); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان الشريحة عربي</label>
                                <input type="text" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان الشريحة انجليزي</label>
                                <input type="text" name="title_en" class="form-control" 
                                       >
                            </div>
                            <div class="col-12">
                                <label>وصف الشريحة عربي</label>
                                <textarea name="description_ar" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label>وصف الشريحة انجليزي</label>
                                <textarea name="description_en" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label>الرابط : </label>
                                <input type="text" name="link" class="form-control" placeholder="الرابط" >
                            </div>



                            <div class="col-12">
                                <label>صورة الشريحة : </label>
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                            </div>

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/sliders/create.blade.php ENDPATH**/ ?>