<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body about-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">بانر الرئيسية</h3>
                    </div>
                    <form method="POST" action="/admin/about/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($about->id); ?>" />
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان عربي</label>
                                <input type="text" name="banner_title_ar" class="form-control"  
                                    value="<?php echo e($about->banner_title_ar); ?>">
                            </div>
                            <div class="col-6">
                                <label>عنوان انجليزي</label>
                                <input type="text" name="banner_title_en" class="form-control"  
                                    value="<?php echo e($about->banner_title_en); ?>">
                            </div>
                            <div class="col-12">
                                <label>وصف عربي</label>
                                <textarea style="height:190px" name="banner_description_ar" class="form-control"><?php echo e($about->banner_description_ar); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>وصف انجليزي</label>
                                <textarea style="height:190px" name="banner_description_en" class="form-control"><?php echo e($about->banner_description_en); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>صورة: </label>
                                <img src="/storage/images/<?php echo e($about->banner_image); ?>" style="width:150px;display:block" />
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
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body about-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">من نحن</h3>
                    </div>
                    <form method="POST" action="/admin/about/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($about->id); ?>" />
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان عربي</label>
                                <input type="text" name="about_title_ar" class="form-control"  
                                    value="<?php echo e($about->about_title_ar); ?>">
                            </div>
                            <div class="col-6">
                                <label>عنوان انجليزي</label>
                                <input type="text" name="about_title_en" class="form-control"  
                                    value="<?php echo e($about->about_title_en); ?>">
                            </div>
                            <div class="col-12">
                                <label>وصف مختصر عربي</label>
                                <textarea style="height:190px" name="about_short_description_ar" class="form-control"><?php echo e($about->about_short_description_ar); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label>وصف مختصر انجليزي</label>
                                <textarea style="height:190px" name="about_short_description_en" class="form-control"><?php echo e($about->about_short_description_en); ?></textarea>
                            </div>


                            <div class="col-12">
                                <label>وصف كامل عربي</label>
                                <textarea style="height:190px" name="about_description_ar" class="form-control"><?php echo e($about->about_description_ar); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>وصف كامل انجليزي</label>
                                <textarea style="height:190px" name="about_description_en" class="form-control"><?php echo e($about->about_description_en); ?></textarea>
                            </div>

                            <div class="col-6">
                                <label>عدد البرامج</label>
                                <input type="number" name="about_programs_count" class="form-control"  
                                    value="<?php echo e($about->about_programs_count); ?>">
                            </div>

                            <div class="col-6">
                                <label>عدد الانشطة</label>
                                <input type="number" name="about_activities_count" class="form-control"  
                                    value="<?php echo e($about->about_activities_count); ?>">
                            </div>

                            <div class="col-12">
                                <label>عدد المتبرعين</label>
                                <input type="number" name="about_donners_count" class="form-control"  
                                    value="<?php echo e($about->about_donners_count); ?>">
                            </div>

                            <div class="col-12">
                                <label>قيمة التبرعات</label>
                                <input type="number" name="about_donations_values" class="form-control"  
                                    value="<?php echo e($about->about_donations_values); ?>">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/about.blade.php ENDPATH**/ ?>