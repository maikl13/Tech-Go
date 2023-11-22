<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الأقسام الفرعية من فئة فرعية</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <?php if(env('ACCOUNTING_CONNECT','false')=='no'): ?>
                            <div class="add-product">
                                <a href="/admin/SubCategories/create" class="btn btn-outline-primary"> إضافة</a>
                            </div>
                        <?php endif; ?>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th width="100px">الصورة</th>
                                <th>الإسم</th>
                                <th>فعال</th>
                                <th>القسم الرئيسي</th>
                                <th>القسم الفرعي</th>
                                <th width="200px"></th>
                            </tr>
                            <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><img src="/get_image/<?php echo e($r->image); ?>" width="50px"></td>
                                    <td><?php echo e($r->name); ?></td>
                                    <td><?php if($r->active=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td><?php echo e($r->super_category); ?></td>
                                    <td><?php echo e($r->category); ?></td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/SubCategories/<?php echo e($r->id); ?>/edit">تعديل</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/sub_categories/index.blade.php ENDPATH**/ ?>