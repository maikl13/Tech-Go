<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل من نحن</h3>
                    </div>
                    <form method="POST" action="/admin/about/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($about->id); ?>" />
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان (عن الطبيب) عربي</label>
                                <input type="text" name="doctor_about_title_ar" class="form-control"  
                                    value="<?php echo e($about->doctor_about_title_ar); ?>">
                            </div>
                            <div class="col-6">
                                <label>عنوان (عن الطبيب) انجليزي</label>
                                <input type="text" name="doctor_about_title_en" class="form-control"  
                                    value="<?php echo e($about->doctor_about_title_en); ?>">
                            </div>
                            <div class="col-6">
                                <label>تخصص الطبيب عربي</label>
                                <input type="text" name="speciality_ar" class="form-control"  
                                    value="<?php echo e($about->speciality_ar); ?>">
                            </div>
                            <div class="col-6">
                                <label>تخصص الطبيب انجليزي</label>
                                <input type="text" name="speciality_en" class="form-control"  
                                    value="<?php echo e($about->speciality_en); ?>">
                            </div>
                            <div class="col-6">
                                <label>الدرجة العلمية عربي</label>
                                <input type="text" name="degree_ar" class="form-control"  
                                    value="<?php echo e($about->degree_ar); ?>">
                            </div>
                            <div class="col-6">
                                <label>الدرجة العلمية انجليزي</label>
                                <input type="text" name="degree_en" class="form-control"  
                                    value="<?php echo e($about->degree_en); ?>">
                            </div>
                            <div class="col-12">
                                <label>عدد سنين الخبرة</label>
                                <input type="text" name="experience_years" class="form-control"  
                                    value="<?php echo e($about->experience_years); ?>">
                            </div>
                            <div class="col-12">
                                <label>وصف (عن الطبيب) عربي</label>
                                <textarea name="doctor_about_description_ar" class="form-control"><?php echo e($about->doctor_about_description_ar); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>وصف (عن الطبيب) انجليزي</label>
                                <textarea name="doctor_about_description_en" class="form-control"><?php echo e($about->doctor_about_description_en); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>صورة الطبيب : </label>
                                <img src="/storage/images/<?php echo e($about->doctor_about_image); ?>" style="width:150px;display:block" />
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                            </div>

                            <div class="col-12">
                                <label>من نحن عربي</label>
                                <textarea name="about_us_ar" class="form-control"><?php echo e($about->about_us_ar); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>من نحن انجليزي</label>
                                <textarea name="about_us_en" class="form-control"><?php echo e($about->about_us_en); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>رؤيتنا عربي</label>
                                <textarea name="our_vision_ar" class="form-control"><?php echo e($about->our_vision_ar); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>رؤيتنا انجليزي</label>
                                <textarea name="our_vision_en" class="form-control"><?php echo e($about->our_vision_en); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>مهمتنا عربي</label>
                                <textarea name="our_mission_ar" class="form-control"><?php echo e($about->our_mission_ar); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>مهمتنا انجليزي</label>
                                <textarea name="our_mission_en" class="form-control"><?php echo e($about->our_mission_en); ?></textarea>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/dashboard/about.blade.php ENDPATH**/ ?>