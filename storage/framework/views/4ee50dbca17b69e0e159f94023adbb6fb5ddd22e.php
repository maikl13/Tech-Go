<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3 style="color:#333">الأقسام الرئيسية</h3>

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
                             
                                <th>الإسم بالانجليزية</th>
                                <th>الإسم بالعربية</th>

                                <th width="200px"></th>
                            </tr>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   
                                    <td><?php echo e($r->name_en); ?></td>
                                    <td><?php echo e($r->name_ar); ?></td>
                                    <td>
                                        <a class="btn btn-outline-primary"
                                           href="/admin/SuperCategories/edit/<?php echo e($r->id); ?>">تعديل</a>
                                           <a class="btn btn-outline-primary"
                                           href="/admin/SuperCategories/<?php echo e($r->id); ?>/destroy">حذف</a>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/super_categories/index.blade.php ENDPATH**/ ?>