<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">المدن</h3>

                <section>
                    <div class="product-status-wrap border-pdt-ct">


                        <div class="row" style="margin: 0px;">


                            <div class="col-10" style="padding-left: 0px;padding-right: 0px;">
                                <div style="width: 25%;float:right">
                                    <a href="<?php echo e(url("/")."/admin/cities/create"); ?>" class="btn btn-outline-primary"
                                       style="width: 100%"> إضافة
                                        مدينة</a>
                                </div>
                                <div style="width: 75%;float:right;padding-right: 10px">
                                    <input type="text" class="form-control " name="search" id="search"
                                           placeholder="بحث" style="width: 100%;"
                                           value="<?php echo e(isset($search) ? $search : ''); ?>">
                                </div>
                            </div>
                            <div class="col-2" style="padding-left: 5px;padding-right: 5px;">
                                <a href="/admin/products/areas/<?php echo e(isset($search) ? $search : 'all'); ?>"
                                   style="width: 100%"
                                   class="btn btn-outline-primary col-12"
                                   id="search_button">بحث</a>
                            </div>

                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                <th>الإسم</th>
                                <th>المنطقة الجغرافية</th>
                                <th>فعال</th>
                                <th width="200px"></th>
                            </tr>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <form method="post" action="/admin/cities/status_active">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($r->id); ?>">
                                        <td><?php echo e($r->name); ?></td>
                                        <td><?php echo e($r->country); ?></td>
                                        <td>
                                            <input type="checkbox" <?php if($r->active=="true"): ?> checked
                                                   <?php endif; ?> name="active"/>
                                        </td>

                                        <td>
                                            <a class="btn btn-outline-primary"
                                               href="/admin/cities/<?php echo e($r->id); ?>/edit">تعديل</a>
                                            <input type="submit" class="btn btn-outline-primary" value="حفظ"/>
                                        </td>
                                    </form>
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
                document.getElementById('search_button').setAttribute('href', '/admin/cities/search/' + 'all');
            } else {
                document.getElementById('search_button').setAttribute('href', '/admin/cities/search/' + search.value);
            }
        });

        $('#search').keypress(function (e) {
            if (e.which == 13) {
                var search = document.getElementById('search');
                if (search.value.length == 0) {
                    window.location.href = '/admin/cities/search/' + 'all';
                } else {
                    window.location.href = '/admin/cities/search/' + search.value;
                }
            }
        });

    </script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/cities/index.blade.php ENDPATH**/ ?>