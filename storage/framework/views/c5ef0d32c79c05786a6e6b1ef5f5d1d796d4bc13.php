<style>
    .notification-type-item {
        display:none;
        width: 100%;
        float:left
    }
    .notification-type-item select {
        width: 100%;
    }
    .select2-container {
        width: 100% !important;
        margin-bottom:15px !important
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">إرسال إشعار بإسم الشخص</h1>
                    </div>
                    <form method="POST" action="/admin/SendNotificationName">
                        <?php echo csrf_field(); ?>
                        <div class="cal-12">


                            <select class="form-control" name="os">
                                <option value="android">android</option>
                                <option value="IOS">IOS</option>
                            </select>

                        </div>
                        <div class="cal-12" style="margin-top: 10px">


<input type="text" class="form-control"  placeholder="عنوان الاشعار"
          name="title" />

</div>
                        <div class="cal-12" style="margin-top: 10px">


                            <textarea class="form-control" style="height: 100px;" placeholder="نص الإشعار"
                                      name="body"></textarea>

                        </div>


                       <br/>
                        <select class="form-control notification-type" name="type" required>
                            <option value='' selected disabled>تحديد نوع الاشعار</option>
                            <option value="doctors">الاطباء</option>
                            <option value="users">المرضي</option>
                            <option value="doctors_section">تخصص الاطباء</option>
                            <option value="doctors_city">اطباء مدينة معينة</option>
                            <option value="single_doctor">طبيب محدد</option>
                            <option value="single_user">مريض محدد</option>
                        </select>  
                        
                        <br/>

                        <div class="notification-type-item doctors_section">
                            
                            <select name="super_category_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد التخصص</option>
                                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>

                       

                        <div class="notification-type-item doctors_city">
                            
                            <select name="city_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد المدينة</option>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                        
                        <div class="notification-type-item single_doctor">
                            
                            <select name="doctor_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد الطبيب</option>
                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                     
                        <div class="notification-type-item single_user">
                            
                            <select name="user_id" class="form-control js-example-basic-single">
                                <option selected disabled value=''>تحديد المستخدم</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>

                        <div class="form-group review-pro-edt mg-b-0-pt" style="margin-top: 10px">
                            <input type="submit"
                                   class="btn btn-ctl-bt waves-effect waves-light" value="حفظ"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.js-example-basic-single').select2();
    $(".notification-type").on("change", function() {
        $(".notification-type-item").hide();
        $("." + $(this).val()).show();
    })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/Others/notification.blade.php ENDPATH**/ ?>