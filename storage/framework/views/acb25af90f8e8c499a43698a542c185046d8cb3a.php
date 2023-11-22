<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة مستخدم</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('UsersController@store')); ?>">
                        <?php echo csrf_field(); ?>
                        <label><span style="color:#ff1f29"><b>*</b></span>إسم المستخدم :</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم المستخدم" required>
                        <label><span style="color:#ff1f29"><b>*</b></span>رقم الهاتف :</label>
                        <input type="number" name="phone" class="form-control" placeholder="رقم الهاتف يبدا بـ 00972"
                               required>
                        <label>البريد الإلكتروني :</label>
                        <input type="text" name="email" class="form-control" placeholder="البريد الإلكتروني">
                        <label><span style="color:#ff1f29"><b>*</b></span>كلمة المرور :</label>
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                        <label>حزمة الأسعار :</label>
                        <select name="package_id" class="form-control col-12" required>
                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label>نظام التشغيل :</label>
                        <select name="OS" class="form-control col-12" required>
                            <option value="android">android</option>
                            <option value="IOS">IOS</option>
                            <option value="web">web</option>
                        </select>
                        <label>الجنس :</label>
                        <select name="gender" class="form-control col-12" required>
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                        <label>الحالة :</label>
                        <select name="active" class="form-control col-12" required>
                            <option value="true">فعال</option>
                            <option value="false">غير فعال</option>
                        </select>
                        <label>تاريخ الميلاد :</label>
                        <input type="date" name="birthdate" class="form-control" placeholder="تاريخ الميلاد">
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/users/create.blade.php ENDPATH**/ ?>