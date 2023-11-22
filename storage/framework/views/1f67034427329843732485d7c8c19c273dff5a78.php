<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php if(session('success')): ?>
            <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <p style="    margin: 0;
    font-weight: bold;
    color: green;"><i class="fa fa-check"></i> <?php echo e(session('success')); ?></p>
                </div>
            </div>
            </div>
            <?php endif; ?>
            <div class="col-md-6">
                <div class="tile">
                    <div class="tile-body">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">استعادة نسخة احتياطية</h3>
                            <form enctype='multipart/form-data' method="post" action="/admin/backups/restore">
                                <?php echo csrf_field(); ?>
                                <p>ملف sql: </p>
                                <input type="file" name="file" class="form-control">
                                <input type="hidden" name="password" value="<?php echo e(request()->get('pass')); ?>" />
                                <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>استعادة
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="tile">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-md-12">

                                <a class="btn btn-primary" href="/admin/backups/create?pass=<?php echo e(request()->get('pass')); ?>"
                                   style="height: 100px;padding-top:35px;margin-top: 10px;display:inline-block;width:auto">انشاء نسخة احتياطية</a>

                                <a class="btn btn-primary" href="/admin/backups/archive/download"
                                   style="height: 100px;padding-top:35px;margin-top: 10px;display:inline-blockl;width:auto">تحميل الصور</a>                                   
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <?php if(count($backups)): ?>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>اسم الملف</th>
                        <th>حجم الملف</th>
                        <th>تاريخ الانشاء</th>
                    
                        <th>خصائص</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($backup['file_name']); ?></td>
                            <td><?php echo e(\App\Http\Controllers\DBBackup::humanFilesize($backup['file_size'])); ?></td>
                            <td>
                                <?php echo e(date('Y-m-d h:i a',$backup['last_modified'])); ?>

                            </td>

                            <td class="text-right">
                                <a class="btn btn-success"
                                   href="<?php echo e(url('backup/download/'.$backup['file_name'])); ?>"><i
                                        class="fa fa-cloud-download"></i> تحميل</a>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="well">
                    <h4>لا يوجد نسخ احتياطية</h4>
                </div>
            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/backups/index.blade.php ENDPATH**/ ?>