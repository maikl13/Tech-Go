<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل اراء عملاء</h3>
                    </div>
                    <form method="POST" action="/admin/videos/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($video->id); ?>" />
                        <div class="row">
                        <div class="col-12">
                                <label>الصورة المصغرة</label>
                                <input type="file" name="image" class="form-control" 
                                       >
                                <img src="/storage/images/<?php echo e($video->image); ?>" style="width:120px" />
                            </div>
                            <div class="col-12">
                                <label>الفيديو</label>
                                <input type="file" name="video" class="form-control" 
                                       >
                                <?php if($video->source): ?>
                                <br/>
                                    <video width="auto" height="150" controls>
                                        <source src="/storage/videos/<?php echo e($video->source); ?>" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <br/>
                                <?php endif; ?>                                       
                            </div>


                            <br/>

  

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/dashboard/edit-video.blade.php ENDPATH**/ ?>