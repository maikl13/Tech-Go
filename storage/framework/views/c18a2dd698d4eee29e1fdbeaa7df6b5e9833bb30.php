<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333;">الاشعارات</h3>
                <div class="row" style="margin: 0px;">


                    <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                        <div style="width: 25%;float:right">
                            <a href="<?php echo e(url("/")."/admin/getNotificationName"); ?>" class="btn btn-outline-primary"
                               style="width: 100%"> ارسال اشعار</a>
                        </div>
                    </div>


                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">

                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th width="70px">#</th>
                                    <th>العنوان</th>
                                    <th>المحتوي</th>
                                    <th>النوع</th>
                                    <th>المستخدم</th>
                                    <th width="">عمليات</th>

                                </tr>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($r->id); ?></td>
                                        <td><?php echo e($r->title); ?></td>
                                        <td><?php echo e($r->body); ?></td>
                                        <td><?php echo e($r->type); ?></td>
                                        <td>
                                            <?php if($r->user_id != 0): ?>
                                            <?php echo e($r->user->name); ?>

                                            <?php else: ?>
                                                جميع المستخدمين
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                               <a class="btn btn-outline-primary"
                                               href="/admin/notification/<?php echo e($r->id); ?>/delete">حذف</a>
            
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/Others/notifications_index.blade.php ENDPATH**/ ?>