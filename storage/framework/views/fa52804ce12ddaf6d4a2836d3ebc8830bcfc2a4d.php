<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الفروع</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/branches/create" class="btn btn-outline-primary">إضافة</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <th>العنوان</th>
                                <th>اوقات العمل</th>
                                <th>رقم الهاتف</th>
                               
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    <td><img src="/storage/images/<?php echo e($s->image); ?>" width="150px"/></td>
                                        
                                      
                                        <td><?php echo e($s->title_ar); ?>

                                            </br>
                                            <?php echo e($s->title_en); ?>

                                        </td>
                                        <td><?php echo e($s->address_ar); ?>

                                            </br>
                                            <?php echo e($s->address_en); ?>

                                        </td>
                                        <td><?php echo e($s->worktimes_ar); ?>

                                            </br>
                                            <?php echo e($s->worktimes_en); ?>

                                        </td>
                                        <td><?php echo e($s->phone); ?></td>
                                        
                                        <td>

                                        <a class="btn btn-danger"
                                               href="/admin/branches/<?php echo e($s->id); ?>/delete">حذف</a>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/branches/<?php echo e($s->id); ?>/edit">تعديل</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/dashboard/branches.blade.php ENDPATH**/ ?>