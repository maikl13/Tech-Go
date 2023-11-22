<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h1 style="color:#333">إرسال إشعار بإسم الشخص</h1>
                    </div>
                    <form method="POST" action="/admin/SendNotificationName">
                        <?php echo csrf_field(); ?>
                        <div class="cal-12">


                            <select class="form-control" name="os">
                                <option value="android">android</option>
                                <option value="IOS">IOS</option>
                            </select>

                        </div>
                        <div class="cal-12" style="margin-top: 10px">


                            <textarea class="form-control" style="height: 100px;" placeholder="نص الإشعار"
                                      name="body"></textarea>

                        </div>

                        <div class="form-group review-pro-edt mg-b-0-pt" style="margin-top: 10px">
                            <input type="submit"
                                   class="btn btn-ctl-bt waves-effect waves-light" value="حفظ"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/Others/notification.blade.php ENDPATH**/ ?>