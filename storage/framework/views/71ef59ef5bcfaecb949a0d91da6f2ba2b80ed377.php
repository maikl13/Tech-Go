<style>
    td a {
        margin-bottom:10px
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">العيادات <?php if($status == "pending"): ?> قيد الموافقة <?php endif; ?>  <?php if($status == "active"): ?> المفعلة <?php endif; ?> <?php if($status == "reject"): ?> المرفوضة <?php endif; ?></h3>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="<?php echo e(url("/")."/admin/clinics/create/new"); ?>" class="btn btn-outline-primary"
                               style="width: 100%"> إضافة
                                عيادة</a>
                        </div>
                    </div>


                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="datatable" style="margin-top: 10px">
                            <thead>
                                <tr>
                                    <th width="70px">#</th>
                                    <th>الإسم</th>
                                    <th>الطبيب</th>
                                    <th>القسم</th>
                                    <th>المدينة</th>
                                    <th>العنوان</th>
                                    <th>وقت الانتظار</th>
                                    <th>عرض سعر</th>
                                    <th>انتهاء الصلاحية</th>
                                    <th width="280px">عمليات</th>

                                </tr>
</thead>
<tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($r->id); ?></td>
                                        <td><?php echo e($r->name); ?></td>
                                        <td>
                                            <?php if($r->user): ?>
                                            <?php echo e($r->user->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($r->cat): ?>
                                            <?php echo e($r->cat->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($r->city): ?>
                                            <?php echo e($r->city->name); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($r->address); ?></td>
                                        <td><?php echo e($r->waiting_time); ?></td>
                                        <td>
                                            <?php if($r->show_price == 1): ?> 
                                                نعم
                                            <?php else: ?>
                                                لا
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($r->expired_date); ?></td>

                                        <td>
                                            <?php if($status == "active"): ?>
                                                <a class="btn btn-outline-primary" href="/admin/clinic/<?php echo e($r->id); ?>/create_date">اضافة حجز</a>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/reservations?clinic_id=<?php echo e($r->id); ?>">الحجوزات</a>
                                            <?php endif; ?>   
                                            <a class="btn btn-outline-primary"
                                               href="/admin/clinics/<?php echo e($r->id); ?>/edit">تعديل</a>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/clinics/<?php echo e($r->id); ?>/delete">حذف</a>

                                               <?php if($status == "pending" || $status == "reject"): ?>
                                                <form method="get" action="<?php echo e(url('/')); ?>/admin/clinics/status/update">
                                                    <?php echo csrf_field(); ?>
                                                    <input name="expired_date" class="form-control" style="margin-bottom:10px" type="date" />
                                                    <input name="status" value="active" type="hidden" />
                                                    <input name="id" value="<?php echo e($r->id); ?>" type="hidden" />
                                                    <button style="display:inline-block" class="btn btn-primary">تفعيل</button>
                                                    <?php if($status == "pending" || $status == "active"): ?>
                                                    <a style="margin-bottom:0" class="btn btn-primary"
                                               href="/admin/clinics/status/update?status=reject&id=<?php echo e($r->id); ?>">رفض</a>
                                               <?php endif; ?>
                                                </form>

                                               <?php endif; ?>

                                               <?php if($status == "active"): ?>
                                                    <a class="btn btn-outline-primary"
                                               href="/admin/clinics/status/update?status=reject&id=<?php echo e($r->id); ?>">الغاء التفعيل</a>
                                               <?php endif; ?>

                                               <?php if($status == "active"): ?>
                                                    <a class="btn btn-outline-primary"
                                               href="/admin/clinics/<?php echo e($r->id); ?>/apology">اعتذار</a>
                                               <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/clinics/index.blade.php ENDPATH**/ ?>