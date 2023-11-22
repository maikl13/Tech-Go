<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل صورة</h3>
                    </div>
                    <form method="POST" action="/admin/sliders/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($slide->id); ?>" />
                        <div class="row">

                        
                            <div class="col-12">
                                <label>صورة :</label>
                                <img src="/storage/images/<?php echo e($slide->image); ?>" style="width:150px;display:block" />
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                            </div>

                            <div class="col-12">
                                <br/>
                                <select  class="form-control" name="type">
                                    <option <?php if($slide->type == "tablet"): ?> selected <?php endif; ?>>tablet</option>
                                    <option <?php if($slide->type == "mobile"): ?> selected <?php endif; ?>>mobile</option>
                                </select>
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
    


    
    
    

    
    
    
    
    
    

    
    
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/sliders/edit.blade.php ENDPATH**/ ?>