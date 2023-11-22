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
                        <?php if(session('success')): ?>
                            <p style="font-weight:bold;color:green"><?php echo e(session('success')); ?></p>
                        <?php endif; ?>
                        <h3 style="color:#333">تعديل سجل طبي #<?php echo e($r->id); ?></h3>
                    </div>
                    <form method="POST" action="/admin/medical_records/update">
                        <?php echo csrf_field(); ?>

                        <label class="form-label">اسم المريض</label>
                        <input type="text" name="patient_name" value="<?php echo e($r->patient_name); ?>" class="form-control"
                               >

                        <label class="form-label">وصف الحالة</label>
                        <textarea name="description" class="form-control"><?php echo e($r->description); ?></textarea> 
                        
                        <label class="form-label">ملاحظات الطبيب</label>
                        <textarea name="doctor_notes" class="form-control"><?php echo e($r->doctor_notes); ?></textarea>  

                        
                        <label class="form-label">رقم هوية المريض</label>
                        <input type="text" name="patient_national_id" value="<?php echo e($r->patient_national_id); ?>" class="form-control"
                               >


                        <label class="form-label">الخصوصية</label>
                        <select class="form-control"  name="is_public">
                            <option <?php if($r->is_public == 1): ?> selected <?php endif; ?> value="1">عام</option>
                            <option <?php if($r->is_public == 0): ?> selected <?php endif; ?> value="0">خاص</option>
                        </select>  
                        
                        <input type="hidden" name="id" value="<?php echo e($r->id); ?>" />
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

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script>
        var map;
        var marker;
        var geocoder = new google.maps.Geocoder();
        var lat = 31.52935;
        var long = 35.0938;
        function init() {

            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {
                    lat: lat,
                    lng: long
                },
                zoom: 12
            });


            map.setCenter({ lat: lat, lng: long});

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
            });
            function placeMarker(location) {
                if(marker != null) {
                    marker.setMap(null);
                }
                console.log(location)
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                document.getElementById("clinic-lat").value = location.lat()
                document.getElementById("clinic-long").value = location.lng()
            }


        }
        google.maps.event.addDomListener(window, 'load', init);



    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/medical_records/edit.blade.php ENDPATH**/ ?>