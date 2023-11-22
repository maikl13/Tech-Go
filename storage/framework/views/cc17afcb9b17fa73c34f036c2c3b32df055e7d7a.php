<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل شريحة</h3>
                    </div>
                    <form method="POST" action="/admin/sliders/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($slide->id); ?>" />
                        <div class="row">
                        <div class="col-6">
                                <label>عنوان الشريحة عربي</label>
                                <input type="text" name="title_ar" class="form-control"  
                                    value="<?php echo e($slide->title_ar); ?>">
                            </div>
                            <div class="col-6">
                                <label>عنوان الشريحة انجليزي</label>
                                <input type="text" name="title_en" class="form-control" 
                                value="<?php echo e($slide->title_en); ?>" >
                            </div>
                            <div class="col-12">
                                <label>وصف الشريحة عربي</label>
                                <textarea name="description_ar" class="form-control"><?php echo e($slide->description_ar); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>وصف الشريحة انجليزي</label>
                                <textarea name="description_en" class="form-control"><?php echo e($slide->description_en); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>الرابط : </label>
                                <input type="text" value="<?php echo e($slide->link); ?>" name="link" class="form-control" placeholder="الرابط" >
                            </div>



                            <div class="col-12">
                                <label>صورة الشريحة : </label>
                                <img src="/storage/images/<?php echo e($slide->image); ?>" style="width:150px;display:block" />
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/sliders/edit.blade.php ENDPATH**/ ?>