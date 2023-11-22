<style>
    .form-label {
        margin-top:15px
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">حجز ميعاد عيادة <?php echo e($clinic->name); ?></h3>
                    </div>
                    <form method="post" action="/admin/clinic/reservation/create">
                        <?php echo csrf_field(); ?>

                        <label class="form-label">وقت الحجز</label>
                        <select class="form-control" name="time" required>
                            <option selected disabled value=''>تحديد وقت الحجز</option>
                            <?php $__currentLoopData = $slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($s); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label class="form-label">المريض</label>
                        <select class="form-control js-example-basic-single" name="user_id" required>
                            <option selected disabled value=''>تحديد المريض</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label class="form-label">ملاحظات الأدمن</label>
                        <textarea class="form-control" name="admin_note"></textarea>

                               
                        <input type="hidden" name="clinic_id" value="<?php echo e($clinic->id); ?>" />
                        <input type="hidden" name="date" value="<?php echo e(htmlspecialchars(Request::get('date'))); ?>" />
            
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>متابعة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $(document).ready(function(){
            $('.js-example-basic-single').select2();
            $(".worktime-checkbox").on("change", function() {
                
                if(this.checked) {
                    $(this).val("true")
                }else {
                    $(this).val("false")
                }
            })

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


            $('.remove-period').on("click", function() {
                $(this).parent().remove()
            })

            $('.work-time').on("click", ".remove-period", function() {
                $(this).parent().remove()
            })

            $(".add-period").on("click", function() {
                var key = $(this).attr('data-key');
                var item = '<div class="period-item"><i class="fa fa-times remove-period"></i><input class="date-picker" required type="time" name="'+key+'_start[]" step="1" value="06:00:00"><span class="divider-dates">--</span><input class="date-picker" required type="time" name="'+key+'_end[]" step="1" value="23:00:00"></div>';
                $(this).parent().append(item)
            })
        });


    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/reservations/create.blade.php ENDPATH**/ ?>