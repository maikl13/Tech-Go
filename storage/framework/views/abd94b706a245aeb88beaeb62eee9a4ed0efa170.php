

<?php $__env->startSection('content'); ?>
    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="tile">
                    <div class="tile-body">
                        <h3>العروض</h3>
                        <div style="width: 80%;float:right;margin-bottom: 10px">
                            <input type="text" class="form-control " name="search" id="search"
                                   placeholder="بحث" style="width: 100%;"
                                   value="<?php echo e(isset($search) ? $search : ''); ?>">
                        </div>
                        <div style="width: 20%;float:right;padding-right: 10px">
                            <a href="/admin/products/areas/<?php echo e(isset($search) ? $search : 'all'); ?>"
                               style="width: 100%"
                               class="btn btn-outline-primary col-12"
                               id="search_button">بحث</a>
                        </div>
                        <table class="table table-hover table-bordered" id="">
                            <tr>
                                <th>الرقم</th>
                                <th>الإسم</th>
                                <th>الكمية</th>
                                <th>المجموع</th>
                                <th>تاريخ البداية</th>
                                <th>تاريخ النهاية</th>
                                <th>فعال</th>
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <form method="post" action="/admin/promotions/status_active">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="PROMID" value="<?php echo e($a->PROMID); ?>">
                                        <td><?php echo e($a->PROMID); ?></td>
                                        <td><?php echo e($a->PROMNAME); ?></td>
                                        <td><?php echo e($a->X); ?></td>
                                        <td><?php echo e($a->Y); ?></td>
                                        <td><?php echo e($a->FROMDATE); ?></td>
                                        <td><?php echo e($a->TODATE); ?></td>
                                        <td><input type="checkbox" <?php if($a->active=="true"): ?> checked
                                                   <?php endif; ?> name="active"/>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-primary" href="/admin/promotions/<?php echo e($a->PROMID); ?>">التفاصيل</a>
                                            <input type="submit" class="btn btn-outline-primary" value="حفظ"/>

                                        </td>
                                    </form>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>

                </div>
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
                document.getElementById('search_button').setAttribute('href', '/admin/promotions/search/' + 'all');
            } else {
                document.getElementById('search_button').setAttribute('href', '/admin/promotions/search/' + search.value);
            }
        });

        $('#search').keypress(function (e) {
            if (e.which == 13) {
                var search = document.getElementById('search');
                if (search.value.length == 0) {
                    window.location.href = '/admin/promotions/search/' + 'all';
                } else {
                    window.location.href = '/admin/promotions/search/' + search.value;
                }
            }
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/promotions/index.blade.php ENDPATH**/ ?>