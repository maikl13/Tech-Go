<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3 style="color:#333">الأقسام الرئيسية</h3>
                <div class="row" style="margin: 5px;">
                    <div class="col-10" style="padding-left: 5px;padding-right: 5px;">
                        <input type="text" class="form-control " name="search" id="search" width="100%"
                               placeholder="بحث"
                               value="<?php echo e(isset($search) ? $search : ''); ?>">
                    </div>
                    <div class="col-2" style="padding-left: 5px;padding-right: 5px;">
                        <a href="/admin/products/superCategories/<?php echo e(isset($search) ? $search : 'all'); ?>"
                           class="btn btn-outline-primary col-12"
                           id="search_button">بحث</a>
                    </div>

                </div>
                <section>
                    <div class="product-status-wrap border-pdt-ct">


                        <?php if(env('ACCOUNTING_CONNECT','no')=='no'): ?>
                            <div class="add-product">
                                <a href="/admin/superCategories/create" class="btn btn-outline-primary"> إضافة قسم
                                    رئيسي</a>
                            </div>
                        <?php endif; ?>

                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th width="100px">الصورة</th>
                                <th>الإسم</th>
                                <th>فعال</th>
                                <th>عرض بالرئيسية</th>
                                <th>عرض مع منتجات</th>
                                <th>عرض بالبحث</th>
                                <th>عرض بالقائمة</th>
                                <th width="200px"></th>
                            </tr>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><img src="<?php echo e(url('/storage/images', $r->icon)); ?>" width="50px"></td>
                                    <td><?php echo e($r->name); ?></td>
                                    <td><?php if($r->active=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td><?php if($r->show_home=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td><?php if($r->show_home_products=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td><?php if($r->show_search=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td><?php if($r->show_left=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td>
                                        <a class="btn btn-outline-primary"
                                           href="/admin/SuperCategories/edit/<?php echo e($r->id); ?>">تعديل</a>
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

        $('#search').bind('input', function () {
            var search_button = document.getElementById('search_button');
            var search = document.getElementById('search');
            if (search.value.length == 0) {
                document.getElementById('search_button').setAttribute('href', '/admin/superCategories/search/' + 'all');
            } else {
                document.getElementById('search_button').setAttribute('href', '/admin/superCategories/search/' + search.value);
            }
        });

        $('#search').keypress(function (e) {
            if (e.which == 13) {
                var search = document.getElementById('search');
                if (search.value.length == 0) {
                    window.location.href = '/admin/superCategories/search/' + 'all';
                } else {
                    window.location.href = '/admin/superCategories/search/' + search.value;
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/super_categories/index.blade.php ENDPATH**/ ?>