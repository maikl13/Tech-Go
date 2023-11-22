<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">طلبات وظيفة <?php echo e($job->title_ar); ?></h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>رقم الهاتف</th>
                                <th>الوصف</th>
                                <th>السيرة الذاتية</th>
                                <th>التاريخ</th>
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($r->name); ?></td>
                                    <td><?php echo e($r->email); ?></td>
                                    <td><?php echo e($r->phone); ?></td>
                                    <td><?php echo e($r->description); ?></td>
                                    <td>
                                        <a href="/uploads/cv/<?php echo e($r->cv); ?>" download class="btn btn-primary">تحميل</a>
                                    </td>
                                    <td><?php echo e($r->created_at->format('Y-m-d h:i a')); ?></td>

                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/jobs/applicants/<?php echo e($r->id); ?>/delete">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/jobs/applicants.blade.php ENDPATH**/ ?>