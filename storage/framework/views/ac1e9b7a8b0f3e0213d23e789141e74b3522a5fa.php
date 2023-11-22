<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <div class="tile-body">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">تسجيل الدخول</h3>
                            <form method="post" action="/admin/sync/connection_arabic">
                                <?php echo csrf_field(); ?>
                                <p>عنوان ip السيرفر : </p>
                                <input type="text" name="ip" class="form-control" placeholder="عنوان السيرفر ip">
                                <p>اسم قاعدة البيانات : </p>
                                <input type="text" name="dbname" class="form-control" placeholder="اسم قاعدة البيانات">
                                <p>اسم المستخدم : </p>
                                <input type="text" name="username" class="form-control" placeholder="اسم المستخدم">
                                <p>كلمة المرور : </p>
                                <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                                <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>إتصال
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="tile">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-md-4">

                                <a class="btn btn-primary" href="/admin/sync/getSync"
                                   style="height: 100px;padding-top:35px;width: 100%;margin-top: 10px">استيراد البيانات</a>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="/admin/sync/sendOrdersSync"
                                   style="height: 100px;padding-top:35px;width: 100%;margin-top: 10px">تصدير الطلبيات</a>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="/admin/sync/imagesuploader"
                                   style="height: 100px;padding-top:35px;width: 100%;margin-top: 10px">تحميل الصور</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/sync/connection.blade.php ENDPATH**/ ?>