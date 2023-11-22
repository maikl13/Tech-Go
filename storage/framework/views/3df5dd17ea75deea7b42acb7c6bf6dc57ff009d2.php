<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل <?php echo e($gallery->title_ar); ?></h3>
                    </div>
                    <form method="POST" action="/admin/gallery/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <label>العنوان عربي</label>
                                <input type="text" value="<?php echo e($gallery->title_ar); ?>" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>العنوان انجليزي</label>
                                <input type="text" value="<?php echo e($gallery->title_en); ?>" name="title_en" class="form-control" 
                                       >
                            </div>

                            <div class="col-6">
                                <label>الصورة المصغرة</label>
                                <input type="file" name="short_image" class="form-control" 
                                       >
                                       <img src="/storage/images/<?php echo e($gallery->short_image); ?>" style="width:150px;display:block" />

                            </div>

                            <div class="col-6">
                                <label>القسم</label>
                                <select class="form-control" required name="program_id">
                                    <option value="">تحديد القسم</option>
                                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($p->id == $gallery->program_id): ?> selected <?php endif; ?> value="<?php echo e($p->id); ?>"><?php echo e($p->title_ar); ?> / <?php echo e($p->title_en); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-12"><br/>
                                <label>صور الألبوم: <button type="button" class="btn btn-primary add-image"><i class="fa fa-plus"></i></button></label>
                                <div class="answers-holder">
                                    <?php if(count($images) > 0): ?>
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="answer-item row">
                                                <div class="col-lg-3">
                                                    <label>الصورة</label>
                                                    <img src="/uploads/gallery/<?php echo e($img->image); ?>" style="width:150px;display:block" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>وصف الصورة عربي</label>
                                                    <input type="text" value="<?php echo e($img->description_ar); ?>" name="descriptions_ar[]" class="form-control descriptions-input ar" data-id="<?php echo e($img->id); ?>"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>وصف الصورة انجليزي</label>
                                                    <input type="text" value="<?php echo e($img->description_en); ?>" name="descriptions_en[]" class="form-control descriptions-input en" data-id="<?php echo e($img->id); ?>"/>
                                                </div>
                                                <div class="col-lg-1">
                                                    <i data-id="<?php echo e($img->id); ?>" class="fa fa-times remove-answer"></i>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
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
                                    <?php endif; ?>
                                </div>                                
                            </div>                            

                        <input type="hidden" name="id" value="<?php echo e($gallery->id); ?>" />
                        
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
        if($(this).attr('data-id')) {
            $.ajax({
                url:"/admin/gallery/image/" + $(this).attr('data-id') + "/delete",
                type:"get",
                success:function(data) {

                }
            })
        }
        $(this).parent().parent().remove()
    })

    $(".answers-holder .answer-item").on("keyup", "input.descriptions-input", function() {
        var field = "";
        if($(this).hasClass("ar")) {
            field = "description_ar"
        }else if($(this).hasClass('en')) {
            field = "description_en"
        }
        var id = $(this).attr('data-id')
        $.ajax({
            url:"/admin/gallery/image/" + $(this).attr('data-id') + "/update?content=" + $(this).val() + "&field=" + field + "&id=" + id,
            type:"get",
            success:function(data) {
               
            }
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/edit-gallery.blade.php ENDPATH**/ ?>