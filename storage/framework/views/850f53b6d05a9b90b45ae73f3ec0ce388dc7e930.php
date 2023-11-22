<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة سؤال</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('FAQController@store')); ?>">
                        <?php echo csrf_field(); ?>
                        <label>نص السؤال : </label>
                        <textarea type="text" name="question" class="form-control" placeholder="نص السؤال"></textarea>
                        <label>إجابة السؤال : </label>
                        <textarea type="text" name="answer" class="form-control" placeholder="إجابة السؤال"></textarea>

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/faq/create.blade.php ENDPATH**/ ?>