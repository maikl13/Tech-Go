<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">السائقين</h3>
                <section>
                    <div class="product-list-cart">
                        <div class="product-status-wrap border-pdt-ct">
                            <a href="<?php echo e(url("/")."/admin/drivers/create"); ?>" class="btn btn-outline-primary"> إضافة
                                سائق</a>
                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th>الإسم</th>
                                    <th>رقم الهاتف</th>
                                    <th>نوع المركبة</th>
                                    <th>تعديل</th>
                                </tr>
                                <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($r->name); ?></td>
                                        <td><?php echo e($r->phone); ?></td>
                                        <td><?php if($r->car_type=="taxi"): ?> تكسي <?php elseif($r->car_type=="car"): ?>
                                                سيارة<?php elseif($r->car_type=="motor"): ?>دراجة
                                                نارية<?php elseif($r->car_type=="bicycle"): ?>دراجة<?php endif; ?></td>
                                        <td>
                                           
                                            <a class="btn btn-outline-primary" href="/admin/areas/<?php echo e($r->id); ?>/edit">تعديل</a>
                                        </td>
                                    </tr>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function edit($name) {
            window.location.href = $name;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/drivers/index.blade.php ENDPATH**/ ?>