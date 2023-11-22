<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">
                البرامج
                <?php if($type == "main"): ?>
                    الرئيسية
                <?php elseif($type == "sub"): ?>
                    الفرعية
                <?php endif; ?>

                </h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/programs/create" class="btn btn-outline-primary">إضافة</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الصورة</th>
                                <th>الاسم</th>
                                <?php if($type == "sub"): ?>
                                <th>البرنامج الرئيسي</th>
                                <?php endif; ?>
        
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    <td><img src="/storage/images/<?php echo e($s->icon); ?>" width="50px"/></td>
                                    <td><?php echo e($s->title_ar); ?><br/><?php echo e($s->title_en); ?></td>
                                    <?php if($type == "sub"): ?>
                                    <td><?php echo e($s->parent->title_ar); ?> / <?php echo e($s->parent->title_en); ?></td>
                                    <?php endif; ?>
                                    <td>

                                    <a class="btn btn-danger"
                                            href="/admin/programs/<?php echo e($s->id); ?>/delete">حذف</a>
                                        <a class="btn btn-outline-primary"
                                            href="/admin/programs/<?php echo e($s->id); ?>/edit">تعديل</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/programs.blade.php ENDPATH**/ ?>