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
                                <label>عنوان الشريحة</label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان الشريحة"
                                       >
                            </div>
                            <div class="col-6">
                                <label>وصف الشريحة</label>
                                <input type="text" name="body" class="form-control" placeholder="وصف الشريحة" >
                            </div>
                            <div class="col-6">
                                <label>الرابط : </label>
                                <input type="text" name="url" class="form-control" placeholder="الرابط" >
                            </div>
                            <div class="col-6">
                                <label>رقم الصنف : </label>
                                <input type="text" name="product_id" class="form-control" placeholder="رقم الصنف"
                                       >
                            </div>
                            <div class="col-6">
                                <label>رقم القسم : </label>
                                <input type="text" name="category_id" class="form-control" placeholder="رقم القسم"
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان فرعي 1 : </label>
                                <input type="text" name="text1" class="form-control" placeholder="عنوان فرعي 1"
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان فرعي 2 :</label>
                                <input type="text" name="text2" class="form-control" placeholder="عنوان فرعي 2"
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان فرعي 3 :</label>
                                <input type="text" name="text3" class="form-control" placeholder="عنوان فرعي 3"
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان فرعي 4 :</label>
                                <input type="text" name="text4" class="form-control" placeholder="عنوان فرعي 4"
                                       >
                            </div>

                            <div class="col-6">

                                <label>عنوان فرعي 5 :</label>
                                <input type="text" name="text5" class="form-control" placeholder="عنوان فرعي 5"
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان فرعي 6 :</label>
                                <input type="text" name="text6" class="form-control" placeholder="عنوان فرعي 6"
                                       >
                            </div>
                            <div class="col-6">
                                <label>صورة الشريحة : </label>
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                            </div>
                            <div class="col-6">
                                <div class="form-check" style="margin-top: 10px">
                                    <input type="checkbox" id="inlineCheckbox1" name="active" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                                </div>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/sliders/create.blade.php ENDPATH**/ ?>