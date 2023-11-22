<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">مزامنة البيانات مع برنامج المحاسبة</h3>
                    </div>


                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    <a class="btn btn-primary" href="/admin/sync/getSync"
                       style="margin-top: 10px;height: 100px;padding-top:35px">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>استيراد البيانات</a>
                    <a class="btn btn-primary" href="/admin/sync/sendOrdersSync"
                       style="margin-top: 10px;height: 100px;padding-top:35px">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>تصدير الطلبيات</a>
                    <?php if($status=="send_order_sync"): ?>
                        <p style="color:#249823"><b>تم تصدير البيانات بنجاح</b></p>
                    <?php elseif($status=="get_data_sync"): ?>
                    <p style="color:#249823"><b>تم مزامنة البيانات بنجاح</b></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/sync/sync.blade.php ENDPATH**/ ?>