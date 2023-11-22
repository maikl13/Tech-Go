<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3>الطلبيات</h3>
                <section>

                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">
                            <a class="btn btn-outline-primary" href="/admin/orders">الكل</a>
                            <a class="btn btn-outline-primary" href="/admin/orders/order_status/pending">قيد الموافقة</a>
                            <a class="btn btn-outline-primary" href="/admin/orders/order_status/processing">قيد التنفيذ</a>
                            <a class="btn btn-outline-primary" href="/admin/orders/order_status/in_delivery">قيد التوصيل</a>
                            <a class="btn btn-outline-primary" href="/admin/orders/order_status/delivered">تم التوصيل</a>
                            <a class="btn btn-outline-primary" href="/admin/orders/order_status/cancel">ملغي</a>
                            <table  class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th>الرقم</th>
                                    <th>الإسم</th>
                                    
                                    <th>التاريخ</th>
                                    <th>الوقت</th>
                                    <th>المجموع</th>
                                    <th>الحالة</th>
                                </tr>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(strtotime(date("h:i:s"))>strtotime($r->time)+300 && $r->status=="pending" && date("Y-m-d")==$r->date): ?>
                                        <tr bgcolor="#e22121">
                                    <?php else: ?>
                                        <tr>
                                            <?php endif; ?>
                                            <td>
                                                <a href="<?php echo e(url('/')); ?>/admin/orders/<?php echo e($r->order_id); ?>"><?php echo e($r->order_id); ?></a>
                                            </td>
                                            <td><?php echo e($r->user_name); ?></td>
                                            
                                            <td><?php echo e($r->date); ?></td>
                                            <td><?php echo e($r->time); ?></td>
                                            <td>₪<?php echo e($r->all_sum); ?></td>
                                            <td>
                                                <?php if($r->status=="pending"): ?>
                                                    <button class="btn btn-primary">قيد الموافقة</button>
                                                <?php elseif($r->status=="processing"): ?>
                                                    <button class="btn btn-primary">قيد التنفيذ</button>
                                                <?php elseif($r->status=="in_delivery"): ?>
                                                    <button class="btn btn-primary">قيد التوصيل</button>
                                                <?php elseif($r->status=="delivered"): ?>
                                                    <button class="btn btn-primary">تم التوصيل</button>
                                                <?php else: ?>
                                                    <button class="btn btn-primary">ملغي</button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/orders/index.blade.php ENDPATH**/ ?>