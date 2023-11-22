<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل استشارة</h3>
                    </div>
                    <form method="POST" action="/admin/questions/<?php echo e($item->id); ?>">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>

           

                        <label>السؤال</label>
                        <textarea name="question" class="form-control" ><?php echo e($item->question); ?></textarea>                        
                        
                        <label>الاجابة</label>
                        <textarea name="answer" class="form-control" ><?php echo e($item->answer); ?></textarea>
                        
    

                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/questions/edit.blade.php ENDPATH**/ ?>