<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل سؤال</h3>
                    </div>
                    <form method="POST" action="/admin/faq/update">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($faq->id); ?>" />

                        <label>نص السؤال عربي : </label>
                        <textarea name="question_ar" class="form-control" ><?php echo e($faq->question_ar); ?></textarea>
                        
                        <label>نص السؤال انجليزي : </label>
                        <textarea name="question_en" class="form-control" ><?php echo e($faq->question_en); ?></textarea>
                        
                        <label> إجابة السؤال عربي: </label>
                        <textarea  name="answer_ar" class="form-control" ><?php echo e($faq->answer_ar); ?></textarea>

                        <label> إجابة السؤال انجليزي: </label>
                        <textarea  name="answer_en" class="form-control" ><?php echo e($faq->answer_en); ?></textarea>

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/faq/edit.blade.php ENDPATH**/ ?>