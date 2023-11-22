<?php $__env->startSection('head'); ?>
    <style>
        p{
            margin: 3px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h1 style="color: #333">إضافة سائق </h1>
                    <form method="POST" action="<?php echo e(action('DriversController@store')); ?>">
                        <?php echo csrf_field(); ?>

                        <p>إسم السائق :</p>
                        <input type="text" name="name" class="form-control" placeholder="إسم السائق">
                        <p>رقم الهوية :</p>
                        <input type="number" name="id_number" class="form-control" placeholder="رقم الهوية">
                        <p>رقم الهاتف :</p>
                        <input type="number" name="phone" class="form-control" placeholder="رقم الهاتف">
                        <p>كلمة المرور :</p>
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                        <p>رقم اللوحة :</p>
                        <input type="number" name="plate_number" class="form-control" placeholder="رقم اللوحة">
                        <p>نوع المركبة :</p>
                        <select class="form-control" name="car_type">
                            <option value="motor">دراجة نارية</option>
                            <option value="taxi">تكسي</option>
                            <option value="car">سيارة</option>
                            <option value="bicycle">دراجة هوائية</option>
                        </select>

                        <p>التفعيل :</p>
                        <select class="form-control" name="active">
                            <option value="true" selected>نعم</option>
                            <option value="false">لا</option>
                        </select>
                        <p>الحظر : </p>
                        <select class="form-control" name="block">
                            <option value="true">نعم</option>
                            <option value="false" selected>لا</option>
                        </select>
                        <p>المدينة : </p>
                        <select class="form-control" name="city_id">
                            <?php $__currentLoopData = $cites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/drivers/create.blade.php ENDPATH**/ ?>