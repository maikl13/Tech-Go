<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة إعلان</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('AdsController@store')); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <label>العنوان : </label>
                        <input type="text" name="title" class="form-control" placeholder="العنوان" required>
                        <label>نص الإعلان : </label>
                        <input type="text" name="body" class="form-control" placeholder="نص الإعلان" required>
                        <label>نص الإعلان 1 : </label>
                        <input type="text" name="text_1" class="form-control" placeholder="نص الإعلان 1" required>
                        <label>صورة الإعلان</label>
                        <input type="file" name="image" class="form-control"
                               accept="image/*" required>
                        <label>الرابط : </label>
                        <input type="text" name="url" class="form-control" placeholder="رابط الإعلان" required>


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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/ads/create.blade.php ENDPATH**/ ?>