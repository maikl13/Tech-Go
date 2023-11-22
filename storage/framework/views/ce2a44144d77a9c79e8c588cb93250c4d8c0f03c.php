<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">الحجوزات</h3>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="<?php echo e(url("/")."/admin/clinics/active"); ?>" class="btn btn-outline-primary"
                               style="width: 100%"> إضافة
                                حجز</a>
                        </div>
                    </div>


                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th width="70px">#</th>
                                    <th>المريض</th>
                                    <th>العيادة</th>
                                    <th>الطبيب</th>
                                    <th>الميعاد</th>
                                    <th>الحالة</th>
                                    <th>ملاحظات الأدمن</th>
                                    <th>سبب الاعتذار</th>
                                    <th width="">عمليات</th>

                                </tr>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($r->id); ?></td>
                                        <td>
                                            <?php if($r->patient): ?>
                                            <?php echo e($r->patient->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        
                                        <td>
                                            <?php if($r->clinic): ?>
                                            <?php echo e($r->clinic->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($r->clinic): ?>
                                            <?php echo e($r->doctor->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>التاريخ: <?php echo e($r->date); ?><br/>
                                            اليوم: <?php echo e(\App\Http\Controllers\ReservationsController::getDayNameinAr(date('l', strtotime($r->date)))); ?></br>
                                            الوقت: <?php echo e($r->time); ?>

                                            
                                        </td>
                                        <td><?php echo e($r->status); ?></td>
                                        <td><?php echo e($r->admin_note); ?></td>
                                        <td><?php echo e($r->reason_apology); ?></td>
                                        <td>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/reservation/<?php echo e($r->id); ?>/delete">حذف</a>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/reservation/<?php echo e($r->id); ?>/edit">تعديل الحالة</a>
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
<?php $__env->startSection('js'); ?>
<script>
    $('#search').bind('input', function () {
        var search_button = document.getElementById('search_button');
        var search = document.getElementById('search');
        if (search.value.length == 0) {
            document.getElementById('search_button').setAttribute('href', '/admin/users/search/' + 'all');
        } else {
            document.getElementById('search_button').setAttribute('href', '/admin/users/search/' + search.value);
        }
    });

    $('#search').keypress(function (e) {
        if (e.which == 13) {
            var search = document.getElementById('search');
            if (search.value.length == 0) {
                window.location.href = '/admin/users/search/' + 'all';
            } else {
                window.location.href = '/admin/users/search/' + search.value;
            }
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/reservations/index.blade.php ENDPATH**/ ?>