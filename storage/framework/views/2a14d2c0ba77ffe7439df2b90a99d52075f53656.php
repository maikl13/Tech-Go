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

                        <br/>
                        <label>الأجابات: <button type="button" class="btn btn-primary add-answer"><i class="fa fa-plus"></i></button></label>
                        <div class="answers-holder">
                            <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="answer-item row">
                                <div class="col-lg-5">
                                    <label>الاجابة عربي</label>
                                    <input value="<?php echo e($ans->answer_ar); ?>" type="text" name="answers_ar[]" class="form-control"/>
                                </div>
                                <div class="col-lg-5">
                                    <label>الاجابة انجليزي</label>
                                    <input value="<?php echo e($ans->answer_en); ?>" type="text" name="answers_en[]" class="form-control"/>
                                </div>
                                <div class="col-lg-2">
                                    <i class="fa fa-times remove-answer"></i>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(".add-answer").click(function() {
        var elm = `
            <div class="answer-item row">
                <div class="col-lg-5">
                    <label>الاجابة عربي</label>
                    <input type="text" name="answers_ar[]" class="form-control"/>
                </div>
                <div class="col-lg-5">
                    <label>الاجابة انجليزي</label>
                    <input type="text" name="answers_en[]" class="form-control"/>
                </div>
                <div class="col-lg-2">
                    <i class="fa fa-times remove-answer"></i>
                </div>
            </div>        
        `;
        $(".answers-holder").append(elm)
    })

    $(".answers-holder").on("click", ".answer-item i.remove-answer", function() {
        $(this).parent().parent().remove()
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\charity\resources\views/faq/edit.blade.php ENDPATH**/ ?>