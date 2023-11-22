<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الاستشارات</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>السؤال</th>
                                <th>الاسم</th>
                                <th>رقم الهاتف</th>
                                <th>الاجابة</th>
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($r->question); ?></td>
                                    <td><?php echo e($r->name); ?></td>
                                    <td><?php echo e($r->phone); ?></td>
                                    <td>
                                        <?php if(!$r->answer): ?>
                                        <p style="font-weight:bold;color:gold">لم يتم الاجابة</p>
                                        <?php else: ?>
                                            <?php echo e($r->answer); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/questions/<?php echo e($r->id); ?>/edit">تعديل</a>
                                        <a class="btn btn-outline-primary" href="/admin/questions/<?php echo e($r->id); ?>/delete">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/questions/index.blade.php ENDPATH**/ ?>