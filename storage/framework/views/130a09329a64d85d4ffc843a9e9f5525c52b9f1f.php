<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الاستبيان</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="add-product">
                            <a href="/admin/faq/create" class="btn btn-outline-primary"> إضافة سؤال</a>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>السؤال</th>
                                <th>الإجابة</th>
                                <th>الحالة</th>
                                <th ></th>
                            </tr>
                            <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td>
                                        <?php echo e($f->question_ar); ?>

                                        </br>
                                        <?php echo e($f->question_en); ?>

                                    </td>
                                    <td>
                                        <?php $__currentLoopData = $f->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($ans->answer_ar); ?> / <?php echo e($ans->answer_en); ?> ( عدد الاصوات: <?php echo e($ans->count); ?> ) <br/>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <?php if($f->status == 1): ?>
                                            مفعل
                                        <?php else: ?>
                                            معطل
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="/admin/faq/<?php echo e($f->id); ?>/edit">تعديل</a>
                                        
                                        <a class="btn btn-outline-primary" href="/admin/faq/<?php echo e($f->id); ?>/switch">
                                            <?php if($f->status): ?>
                                                تعطيل
                                            <?php else: ?>
                                                تفعيل
                                            <?php endif; ?>
                                        </a>
                                        <a class="btn btn-danger" href="/admin/faq/<?php echo e($f->id); ?>/delete">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/faq/index.blade.php ENDPATH**/ ?>