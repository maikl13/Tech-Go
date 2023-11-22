<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">فريق العمل</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                    <div class="add-product">
                                <a href="/admin/teams/create" class="btn btn-outline-primary"> إضافة</a>
                            </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th width="100px">الصورة</th>
                                <th>الإسم عربي</th>
                                <th>الإسم انجليزي</th>
                                <th>الوظيفة عربي</th>
                                <th>الوظيفة انجليزي</th>
                        
                                <th width="200px"></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><img src="/teams_images/<?php echo e($r->image); ?>" width="50px"></td>
                                    <td><?php echo e($r->name_ar); ?></td>
                                    <td><?php echo e($r->name_en); ?></td>
                                    <td><?php echo e($r->job_ar); ?></td>
                                    <td><?php echo e($r->job_en); ?></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/teams/<?php echo e($r->id); ?>/edit">تعديل</a>
                                        <a class="btn btn-outline-primary" href="/admin/teams/<?php echo e($r->id); ?>/delete">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/teams/index.blade.php ENDPATH**/ ?>