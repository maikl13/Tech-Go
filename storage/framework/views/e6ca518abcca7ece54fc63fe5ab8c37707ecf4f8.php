<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3 style="color:#333">أكواد الخصم</h3>
                                <section>
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <div class="add-product">
                                                <a href="/admin/code/create" class="btn btn-outline-primary"> إضافة كود خصم</a>
                                            </div>

                                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                                <tr>
                                                    <th>الكود</th>
                                                    <th>نسبة الخصم</th>
                                                    <th>اعلى قيمة</th>
                                                    <th>تم إستخدام</th>
                                                    <th></th>
                                                </tr>
                                                <?php $__currentLoopData = $codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($r->code); ?></td>
                                                        <td>%<?php echo e($r->percentage); ?></td>
                                                        <td><?php echo e($r->max_price); ?></td>
                                                        <td><?php echo e($r->using); ?> من <?php echo e($r->max_using); ?></td>
                                                        <td>
                                                            <a class="btn btn-outline-primary" href="/admin/code/<?php echo e($r->id); ?>/edit">تعديل</a>
                                                    </tr>


                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function edit($code) {
            window.location.href = $code;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/code/index.blade.php ENDPATH**/ ?>