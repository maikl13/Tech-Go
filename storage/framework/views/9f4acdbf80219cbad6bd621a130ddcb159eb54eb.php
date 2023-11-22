<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل منطقة</h3>
                    </div>
                    <form method="post" action="<?php echo e(action('AreasController@update',["area_id",$area->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <input type="hidden" name="area_id" value="<?php echo e($area->id); ?>"/>

                        <label>إسم المنطقة :</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم المنطقة"
                               value="<?php echo e($area->name); ?>">
                        <label>المنطقة الجغرافية :</label>
                        <select class="form-control"  name="country_id" id="country">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>" <?php if($c->id==$area->country_id): ?> selected <?php endif; ?>><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label>المدينة :</label>
                        <select class="form-control" name="city_id" id="city_id">
                            <option value="0">إختيار المدينة</option>
                            <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"<?php if($c->id==$area->city_id): ?> selected <?php endif; ?> ><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label>سعر التوصيل :</label>
                        <input type="text" name="price" class="form-control" placeholder="سعر التوصيل"
                               value="<?php echo e($area->price); ?>" id="price">



                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ التعديلات
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>

        $(document).ready(function(){
            $('#country').on('change', function (e) {
                var valueSelected = this.value;
                var selectElem = $("#mySelect");

                $.getJSON("http://abushukur.com/getPriceCountry/" + valueSelected, function (data) {
                    document.getElementById("price").value = ""+data.def_price;
                });

                $.getJSON("http://abushukur.com/getCitesByCountry/" + valueSelected, function (data) {
                    $('#city_id').find('option').remove().end().append('<option value="0">إختيار المدينة</option>').val('0');
                    $.each(data, function (index, value) {
                        $("#city_id").append(new Option(value.name, value.id));

                    });

                });

            });
        });


    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/area/edit.blade.php ENDPATH**/ ?>