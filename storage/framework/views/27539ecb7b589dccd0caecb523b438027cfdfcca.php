<?php $__env->startSection('content'); ?>
    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="tile">
                    <div class="tile-body">
                        <a href="<?php echo e(url("/")."/admin/ads/create"); ?>" class="btn btn-outline-primary"> إضافة إعلان</a>
                        <h3>الإعلانات</h3>
                        <table class="table table-hover table-bordered" id="">
                            <tr>
                                <th>الصورة</th>
                                <th>عنوان الإعلان</th>
                                <th>نص الإعلان</th>
                                <th>الرابط</th>
                                <th>تاريخ الإنشاء</th>
                                <th>عمليات</th>
                            </tr>
                            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><img src="/storage/images/<?php echo e($a->image); ?>" width="70px"></td>
                                    <td><?php echo e($a->title); ?></td>
                                    <td><?php echo e($a->body); ?></td>
                                    <td><?php echo e($a->url); ?></td>
                                    <td><?php echo e($a->created_at); ?></td>
                                    <td>
                                        <form method="POST" action="/admin/ads/<?php echo e($a->id); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                            <a href="/admin/ads/<?php echo e($a->id); ?>/edit" class="btn btn-outline-primary">تعديل</a>
                                            <a href="/admin/ads/<?php echo e($a->id); ?>/destroy"
                                               class="btn btn-outline-primary delete-user">حذف</a>
                                        </form>
                                    </td>
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
        $('.delete-user').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('هل تريد بالتأكيد حذف الإعلان ؟')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/ads/index.blade.php ENDPATH**/ ?>