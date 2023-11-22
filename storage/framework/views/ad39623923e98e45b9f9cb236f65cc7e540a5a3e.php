<?php $__env->startSection('content'); ?>

    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <div class="tile">
                    <div class="tile-body">

                        <h2>فئات الاسعار</h2>

                        <table class="table table-hover table-bordered" id="">
                            <thead>
                            <tr>


                                <th>إسم الفئة</th>
                                <th>إفتراضي</th>
                                <th width="100px"></th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($c->name); ?></td>
                                    <td><?php if($c->default=="true"): ?> نعم <?php else: ?> لا <?php endif; ?></td>
                                    <td><a href="/admin/packages/<?php echo e($c->id); ?>/edit"
                                           class="btn btn-outline-primary">تعديل</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                        <?php if(env('ACCOUNTING_CONNECT','false')=='no'): ?>
                            <a href="<?php echo e(route('packages.create')); ?>" class="btn btn-outline-primary">إضافة فئة جديدة</a>
                        <?php endif; ?>



                    </div>

                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/packages/index.blade.php ENDPATH**/ ?>