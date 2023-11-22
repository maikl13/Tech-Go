<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">السجلات الطبية</h3>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="<?php echo e(url("/")."/admin/medical_records/create"); ?>" class="btn btn-outline-primary"
                               style="width: 100%"> إضافة
                                سجل</a>
                        </div>
                    </div>


                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th width="70px">#</th>
                                    <th>اسم المريض</th>
                                    <th>وصف الحالة</th>
                                    <th>ملاحظات الطبيب</th>
                                    <th>بيانات المريض</th>
                                    <th>المستخدم</th>
                                    <th>الخصوصية</th>
                                    <th>التاريخ</th>
                                   
                                    <th width="200px">عمليات</th>

                                </tr>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($r->id); ?></td>
                                        <td><?php echo e($r->patient_name); ?></td>
                                        <td><?php echo e($r->description); ?></td>
                                        <td><?php echo e($r->doctor_notes); ?></td>
                                        <td>رقم الهوية: <?php echo e($r->patient_national_id); ?><br/>
                                            <?php if($r->patient): ?>
                                            اسم حساب المريض: <?php echo e($r->patient->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($r->user->name); ?></td>
                                        <td>
                                            <?php if($r->is_public == 1): ?>
                                                عام
                                            <?php else: ?>   
                                                خاص
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($r->created_at); ?></td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/medical_records/<?php echo e($r->id); ?>/edit">تعديل</a>                                            
                                               <a class="btn btn-outline-primary"
                                               href="/admin/medical_records/<?php echo e($r->id); ?>/attachments">المرفقات</a>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/medical_records/<?php echo e($r->id); ?>/delete">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/medical_records/index.blade.php ENDPATH**/ ?>