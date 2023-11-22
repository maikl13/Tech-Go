<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة فيديو</h3>
                    </div>
                    <form method="POST" action="/admin/videos/create"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                <label>عنوان عربي</label>
                                <input type="text" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>عنوان انجليزي</label>
                                <input type="text" name="title_en" class="form-control" 
                                       >
                            </div>



                            <div class="col-12">
                                <label>رابط iframe</label>
                                <textarea class="form-control" style="height:150px" name="source"></textarea>
                            </div>

                        <label>القسم</label>
                        <select class="form-control" required name="program_id">
                            <option value="">تحديد القسم</option>
                            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>"><?php echo e($p->title_ar); ?> / <?php echo e($p->title_en); ?></option>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/dashboard/create-video.blade.php ENDPATH**/ ?>