<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل سؤال</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('FAQController@update',[$faq->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <label>نص السؤال : </label>
                        <textarea name="question" class="form-control" placeholder="نص السؤال" required><?php echo e($faq->question); ?></textarea>
                        <label>إجابة السؤال : </label>
                        <textarea  name="answer" class="form-control" placeholder="إجابة السؤال" required><?php echo e($faq->answer); ?></textarea>

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/faq/edit.blade.php ENDPATH**/ ?>