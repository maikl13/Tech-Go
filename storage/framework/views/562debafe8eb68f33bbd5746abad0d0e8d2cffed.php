<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل <?php echo e($video->title_ar); ?></h3>
                    </div>
                    <form method="POST" action="/admin/videos/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($video->id); ?>" />
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان عربي</label>
                                <input type="text" name="title_ar" class="form-control"  
                                    value="<?php echo e($video->title_ar); ?>"   >
                            </div>
                            <div class="col-6">
                                <label>عنوان انجليزي</label>
                                <input type="text" name="title_en" class="form-control" 
                                value="<?php echo e($video->title_en); ?>"  >
                            </div>


                            <div class="col-12">
                                <label>رابط iframe</label>
                                <textarea class="form-control" style="height:150px" name="source"><?php echo $video->source; ?></textarea>
                            </div>
                            <br/>
                            <div style="width:100%;float:right">
                            <?php echo $video->source; ?>

</div>

                        <label>القسم</label>
                        <select class="form-control" required name="program_id">
                            <option value="">تحديد القسم</option>
                            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($video->program_id == $p->id): ?> selected <?php endif; ?> value="<?php echo e($p->id); ?>"><?php echo e($p->title_ar); ?> / <?php echo e($p->title_en); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

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
    


    
    
    

    
    
    
    
    
    

    
    
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/edit-video.blade.php ENDPATH**/ ?>