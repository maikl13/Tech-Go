<?php $__env->startSection('content'); ?>
    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="tile">
                    <div class="tile-body">
                        <h3>الزيارات</h3>
                        <table class="table table-hover table-bordered" id="">
                            <tr>
                                <th>الصورة</th>
                                <th>المنتج</th>
                                <th>المستخدم</th>
                                <th>السعر</th>
                                <th>نظام التشغيل</th>
                                <th>التاريخ</th>
                                <th>اشعار</th>

                            </tr>
                            <?php $__currentLoopData = $views; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><img src="/storage/small_image/<?php echo e($v->image); ?>" width="70px"></td>
                                    <td><?php echo e($v->product); ?></td>
                                    <td><?php if($v->user==""): ?>-<?php else: ?> <?php echo e($v->user); ?><?php endif; ?></td>
                                    <td><?php echo e($v->price); ?></td>

                                    <td><?php if($v->OS==""): ?>-<?php else: ?> <?php echo e($v->OS); ?><?php endif; ?></td>

                                    <td><?php echo e($v->created_at); ?></td>
                                    <td><a href="/admin/create_notification/<?php echo e($v->user_id); ?>" class="pd-setting">ارسال
                                            إشعار</a></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/Others/views.blade.php ENDPATH**/ ?>