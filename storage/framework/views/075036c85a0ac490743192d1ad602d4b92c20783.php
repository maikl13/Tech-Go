<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">
                    <?php if($type == "project"): ?>
                        المشاريع
                    <?php else: ?>
                        المنتجات
                    <?php endif; ?>
                </h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                    <div class="add-product">
                                <a href="/admin/projects/create?type=<?php echo e($type); ?>" class="btn btn-outline-primary"> إضافة جديد</a>
                            </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>

                                <th>الصورة</th>
                                <th>الاسم</th>
                                <?php if($type == "product"): ?>
                                <th>سعر المنتج</th>
                                <?php endif; ?>
                                <th>خصائص</th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   
                                    <td><img style="width:100px" src="/uploads/images/<?php echo e($r->image); ?>"/></td>
                                    <td><?php echo e($r->title_ar); ?> <br/> <?php echo e($r->title_en); ?></td>
                                    <?php if($type == "product"): ?>
                                    <td><?php echo e($r->price); ?></td>
                                    <?php endif; ?>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/projects/<?php echo e($r->id); ?>/edit">تعديل</a>
                                        <a class="btn btn-danger" href="/admin/projects/<?php echo e($r->id); ?>/delete">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/projects/index.blade.php ENDPATH**/ ?>