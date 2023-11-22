<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الوظائف</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                    <div class="add-product">
                                <a href="/admin/jobs/create" class="btn btn-outline-primary"> إضافة وظيفة</a>
                            </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>عنوان الوظيفة</th>
                                <th>عدد المتقدمين</th>
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($r->title_ar); ?> <br/> <?php echo e($r->title_en); ?></td>
                                    <td>
                                        <?php echo e($r->count); ?>

                                    </td>
         
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/jobs/<?php echo e($r->id); ?>/applicants">طلبات الوظيفة</a>
                                        <a class="btn btn-outline-primary" href="/admin/jobs/<?php echo e($r->id); ?>/edit">تعديل</a>
                                        <a class="btn btn-outline-primary" href="/admin/jobs/<?php echo e($r->id); ?>/delete">حذف</a>
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
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
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/jobs/index.blade.php ENDPATH**/ ?>