

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
                        <label>نص السؤال عربي : </label>
                        <textarea type="text" name="question_ar" class="form-control"></textarea>

                        <label>نص السؤال انجليزي : </label>
                        <textarea type="text" name="question_en" class="form-control"></textarea>
                        <br/>
                        <label>الأجابات: <button type="button" class="btn btn-primary add-answer"><i class="fa fa-plus"></i></button></label>
                        <div class="answers-holder">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/faq/create.blade.php ENDPATH**/ ?>