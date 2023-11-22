<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل مستخدم</h3>
                    </div>
                    <form method="POST" action="/admin/users/update">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                        <label><span style="color:#ff1f29"><b>*</b></span>تعديل المستخدم :</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>"
                               placeholder="إسم المستخدم" required>
                        <label><span style="color:#ff1f29"><b>*</b></span>رقم الهاتف :</label>
                        <input type="number" name="phone" class="form-control" value="<?php echo e($user->phone); ?>"
                               placeholder="رقم الهاتف يبدا بـ 00972"
                               required>
                        <label>البريد الإلكتروني :</label>
                        <input type="text" name="email" class="form-control" value="<?php echo e($user->email); ?>"
                               placeholder="البريد الإلكتروني">
                        <label>حزمة الأسعار :</label>
                        <select name="package_id" class="form-control col-12" required>
                            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"
                                        <?php if($user->package_id==$c->id): ?> selected <?php endif; ?>><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label>نظام التشغيل :</label>
                        <select name="OS" class="form-control col-12" required>
                            <option value="android" <?php if($user->OS=="android"): ?> selected <?php endif; ?>>android</option>
                            <option value="IOS" <?php if($user->OS=="IOS"): ?> selected <?php endif; ?>>IOS</option>
                            <option value="web" <?php if($user->OS=="web"): ?> selected <?php endif; ?>>web</option>
                        </select>
                        <label>الجنس :</label>
                        <select name="gender" class="form-control col-12" required>
                            <option value="male" <?php if($user->gender=="male"): ?> selected <?php endif; ?>>ذكر</option>
                            <option value="female" <?php if($user->gender=="female"): ?> selected <?php endif; ?>>أنثى</option>
                        </select>
                        <label>الحالة :</label>
                        <select name="active" class="form-control col-12" required>
                            <option value="true" <?php if($user->active=="true"): ?> selected <?php endif; ?>>فعال</option>
                            <option value="false" <?php if($user->active=="false"): ?> selected <?php endif; ?>>غير فعال</option>
                        </select>

                        <label style="margin-top: 10px">صلاحية الدخول :</label>
                        <select name="permission" class="form-control col-12" required style="margin-top: 10px">
                            <option value="user" <?php if($user->permission=="user"): ?> selected <?php endif; ?>>مستخدم</option>
                            <option value="admin" <?php if($user->permission=="admin"): ?> selected <?php endif; ?>>مسؤول</option>
                            <option value="add_data" <?php if($user->permission=="add_data"): ?> selected <?php endif; ?>>مدخل بيانات
                            </option>
                            <option value="orders" <?php if($user->permission=="orders"): ?> selected <?php endif; ?>>متابع الطلبيات
                            </option>
                        </select>
                        <label>تاريخ الميلاد :</label>
                        <input type="date" name="birthdate" value="<?php echo e($user->birthdate); ?>" class="form-control"
                               placeholder="تاريخ الميلاد">

                        <div class="form-check"
                             style="margin-top: 10px;float:left;background-color: #313128;border:2px solid #ff4534;border-radius:5px;padding:5px">
                            <input type="checkbox" id="inlineCheckbox1" name="admin"
                                   <?php if($user->admin==1): ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="inlineCheckbox1" style="color:#ff4534"><b>سماح دخول
                                    لوحة الإدارة</b></label>
                        </div>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/users/edit.blade.php ENDPATH**/ ?>