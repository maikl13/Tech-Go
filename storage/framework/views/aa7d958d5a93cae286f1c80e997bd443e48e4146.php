<?php $__env->startSection('head'); ?>
    <style>
        p{
            margin: 5px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">إرسال إشعار</h1>
                    </div>
                    <form method="POST" action="<?php echo e(action('HomeController@storeNotification')); ?>">
                        <?php echo csrf_field(); ?>
                        <p>عنوان الإشعار : </p>
                        <input type="text" name="title" class="form-control" placeholder="عنوان الإشعار">
                        <input type="hidden" value="<?php echo e($user_id); ?>" name="user"/>

                        <p>نص الإشعار : </p>
                        <textarea class="form-control" style="height: 100px;" placeholder="نص الإشعار"
                                  name="body"></textarea>

                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/notifications/create.blade.php ENDPATH**/ ?>