<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3 style="color:#333;float:right">جميع المنتجات</h3>
                <br/>
                <br/>
                <a class="btn btn-outline-primary" href="/admin/products">الكل</a>
                <a class="btn btn-outline-primary" href="/admin/products_active/all/0">منتجات فعالة</a>
                <a class="btn btn-outline-primary" href="/admin/products_inactive/all/0">منتجات غير فعالة</a>

            <?php if(env('ACCOUNTING_CONNECT','false')=='no'): ?>
                    <div class="add-product" style="float:left">
                        <a href="/admin/products/create" class="btn btn-outline-primary"> إضافة منتج</a>
                    </div>
                <?php endif; ?>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        
                        
                        
                        <div class="row" style="margin: 5px;">
                            <div class="col-8" style="padding-left: 5px;padding-right: 5px;">
                                <input type="text" class="form-control " name="search" id="search" width="100%"
                                       placeholder="بحث"
                                       <?php if($search!="all" && $search!=""): ?> value="<?php echo e($search); ?><?php endif; ?>">
                            </div>
                            <div class="col-2" style="padding-left: 5px;padding-right: 5px;">
                                <select class="form-control" name="super_category_id" id="super_category_id">
                                    <option value="0">القسم الرئيسي</option>
                                    <?php $__currentLoopData = $super_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($s->id); ?>"
                                                <?php if($s->id==$super_category_id): ?> selected <?php endif; ?>><?php echo e($s->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-2" style="padding-left: 5px;padding-right: 5px;">
                                <a href="/admin/products/search/<?php echo e($search); ?>/<?php echo e($super_category_id); ?>"
                                   class="btn btn-outline-primary col-12"
                                   id="search_button">بحث</a>
                            </div>

                        </div>
                        
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th width="100px">الصورة</th>
                                <th>الإسم</th>
                                <th>الباركود</th>
                                <th>الكمية</th>
                                <th>فعال</th>
                                <th>القسم</th>
                                <th>سلايدر</th>
                                <th width="200px"></th>
                            </tr>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <form method="post" action="/admin/products/status_active">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($p->id); ?>">
                                        <td><img src="/storage/small50_image/<?php echo e($p->image); ?>" width="50px"></td>
                                        <td><?php echo e($p->name); ?></td>
                                        <td><?php echo e($p->barcode); ?></td>
                                        <td><?php echo e($p->qty); ?></td>
                                        <td>
                                            <input type="checkbox" <?php if($p->active=="yes"): ?> checked
                                                   <?php endif; ?> name="active"/>
                                        </td>
                                        <td><?php if($p->category==null): ?> - <?php else: ?> <?php echo e($p->category->name); ?> <?php endif; ?></td>
                                        <td><?php if($p->end_feature >=date('Y-m-d')): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/products/<?php echo e($p->id); ?>/edit">تعديل</a>
                                            <input type="submit" class="btn btn-outline-primary" value="حفظ"/>

                                        </td>
                                    </form>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
                    </div>
                    <ul>
                        <?php echo e($products); ?>

                    </ul>
                </section>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>

        function onchange() {
            alert("test");

            // search_button.href = "aaa";
        }

        $('select').on('change', function () {
            var search_button = document.getElementById('search_button');
            var search = document.getElementById('search');
            var super_category_id = document.getElementById('super_category_id');
            if (search.value.length == 0) {
                document.getElementById('search_button').setAttribute('href', '/admin/products/search/' + 'all' + '/' + super_category_id.value);
            } else {
                document.getElementById('search_button').setAttribute('href', '/admin/products/search/' + search.value + '/' + super_category_id.value);
            }

        });


        $('#search').keypress(function (e) {
            if (e.which == 13) {
                var super_category_id = document.getElementById('super_category_id');
                var search = document.getElementById('search');
                if (search.value.length == 0) {
                    window.location.href = '/admin/products/search/' + 'all' + '/' + super_category_id.value;
                } else {
                    window.location.href = '/admin/products/search/' + search.value + '/' + super_category_id.value;
                }
            }
        });
        $('#search').bind('input', function () {
            var search_button = document.getElementById('search_button');
            var search = document.getElementById('search');
            var super_category_id = document.getElementById('super_category_id');
            if (search.value.length == 0) {
                document.getElementById('search_button').setAttribute('href', '/admin/products/search/' + 'all' + '/' + super_category_id.value);
            } else {
                document.getElementById('search_button').setAttribute('href', '/admin/products/search/' + search.value + '/' + super_category_id.value);
            }
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/products/index.blade.php ENDPATH**/ ?>