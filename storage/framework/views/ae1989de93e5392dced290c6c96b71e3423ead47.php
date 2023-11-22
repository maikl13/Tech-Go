<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">إضافة منطقة</h3>
                    </div>
                    <form method="POST" action="<?php echo e(action('AreasController@store')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" class="form-control" placeholder="إسم المنطقة"
                               style="margin-top: 20px;">
                        <select class="form-control" style="margin-top: 20px;" name="country_id" id="country">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <select class="form-control" style="margin-top: 20px;" name="city_id" id="city_id">
                            
                            
                            
                        </select>
                        <input type="text" name="price" class="form-control" placeholder="سعر التوصيل" id="price"
                               style="margin-top: 20px;">
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ
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

                $.getJSON("/getPriceCountry/" + valueSelected, function (data) {
                    document.getElementById("price").value = ""+data.def_price;
                });

                $.getJSON("/getCitesByCountry/" + valueSelected, function (data) {
                    $('#city_id').find('option').remove().end().append('<option value="0">إختيار المدينة</option>').val('0');
                    $.each(data, function (index, value) {
                        $("#city_id").append(new Option(value.name, value.id));

                    });

                });

            });
        });


    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/area/create.blade.php ENDPATH**/ ?>