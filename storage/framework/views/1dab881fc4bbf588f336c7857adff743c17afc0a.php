<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">المستخدمين (اطباء)</h3>
                <br>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="<?php echo e(url("/")."/admin/users/create"); ?>" class="btn btn-outline-primary"
                               style="width: 100%"> إضافة
                                مستخدم</a>
                        </div>
                        <div style="width: 75%;float:right;padding-right: 10px">
                            <input type="text" class="form-control " name="search" id="search"
                                   placeholder="بحث" style="width: 100%;"
                                   value="<?php echo e(isset($search) ? $search : ''); ?>">
                        </div>
                    </div>
                    <div class="col-2" style="padding-left: 5px;padding-right: 5px;">
                        <a href="/admin/users/search/<?php echo e(isset($search) ? $search : 'all'); ?>"
                           style="width: 100%"
                           class="btn btn-outline-primary col-12"
                           id="search_button">بحث</a>
                    </div>

                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th width="70px">صورة</th>
                                    <th width="40px">الرقم</th>
                                    <th>الإسم</th>
                                    <th>نظام التشغيل</th>
                                    <th>الحزمة</th>
                                    <th>الصلاحية</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>رقم الهاتف</th>
                                    <th>تاريخ التسجيل</th>
                                    <th width="280px">عمليات</th>

                                </tr>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><img src="/get_image/images/<?php echo e($r->image); ?>" width="50px"></td>
                                        <td><?php echo e($r->id); ?></td>
                                        <td><?php echo e($r->name); ?></td>
                                        <td><?php echo e($r->OS); ?></td>
                                        <td><?php echo e($r->package_name); ?></td>
                                        <?php if($r->permission=='user'): ?>
                                            <td>زبون</td>
                                        <?php elseif($r->permission=='admin'): ?>
                                            <td>مسؤول</td>
                                        <?php elseif($r->permission=='add_data'): ?>
                                            <td>مدخل بيانات</td>
                                        <?php elseif($r->permission=='orders'): ?>
                                            <td>متابع الطلبيات</td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="mailto: <?php echo e($r->email); ?>"><?php if($r->email=="null"): ?><?php else: ?> <?php echo e($r->email); ?> <?php endif; ?></a>
                                        </td>
                                        <td><a href="tel:<?php echo e($r->phone); ?>"><?php echo e($r->phone); ?></a></td>
                                        <td><?php echo e($r->created_at); ?></td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/users/<?php echo e($r->id); ?>/edit">تعديل</a>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/create_notification/<?php echo e($r->id); ?>">إرسال إشعار</a> <a
                                                    class="btn btn-outline-primary"
                                                    href="/admin/users/edit_user_password/<?php echo e($r->id); ?>">تعديل كلمة
                                                المرور</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/users/usersbytype.blade.php ENDPATH**/ ?>