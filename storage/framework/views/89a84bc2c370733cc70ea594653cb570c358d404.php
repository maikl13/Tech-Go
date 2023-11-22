<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة البوم</h3>
                    </div>
                    <form method="POST" action="/admin/gallery/create"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <label>العنوان عربي</label>
                                <input type="text" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>العنوان انجليزي</label>
                                <input type="text" name="title_en" class="form-control" 
                                       >
                            </div>

                            <div class="col-6">
                                <label>الصورة المصغرة</label>
                                <input type="file" name="short_image" class="form-control" 
                                       >
                            </div>
                            <div class="col-6">
                                <label>القسم</label>
                                <select class="form-control" required name="program_id">
                                    <option value="">تحديد القسم</option>
                                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($p->id); ?>"><?php echo e($p->title_ar); ?> / <?php echo e($p->title_en); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            

                            <div class="col-12"><br/>
                                <label>صور الألبوم: <button type="button" class="btn btn-primary add-image"><i class="fa fa-plus"></i></button></label>
                                <div class="answers-holder">
                                    <div class="answer-item row">
                                        <div class="col-lg-3">
                                            <label>الصورة</label>
                                            <input type="file" name="images[]" class="form-control"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>وصف الصورة عربي</label>
                                            <input type="text" name="descriptions_ar[]" class="form-control"/>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>وصف الصورة انجليزي</label>
                                            <input type="text" name="descriptions_en[]" class="form-control"/>
                                        </div>
                                        <div class="col-lg-1">
                                            <i class="fa fa-times remove-answer"></i>
                                        </div>
                                    </div>
                                </div>                                
                            </div>


                        <button class="btn btn-primary col-12" type="submit" style="margin-top: 10px"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>
                            حفظ
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(".add-image").click(function() {
        var elm = `
            <div class="answer-item row">
                <div class="col-lg-3">
                    <label>الصورة</label>
                    <input type="file" name="images[]" class="form-control"/>
                </div>
                <div class="col-lg-4">
                    <label>وصف الصورة عربي</label>
                    <input type="text" name="descriptions_ar[]" class="form-control"/>
                </div>
                <div class="col-lg-4">
                    <label>وصف الصورة انجليزي</label>
                    <input type="text" name="descriptions_en[]" class="form-control"/>
                </div>
                <div class="col-lg-1">
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/create-gallery.blade.php ENDPATH**/ ?>