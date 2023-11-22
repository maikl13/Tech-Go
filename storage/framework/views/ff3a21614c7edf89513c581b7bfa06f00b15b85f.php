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
                        <h3 style="color:#333">إضافة عيادة</h3>
                    </div>
                    <form method="POST" action="/admin/clinics/store">
                        <?php echo csrf_field(); ?>

                        <label class="form-label">اسم العيادة</label>
                        <input type="text" name="name" class="form-control" placeholder="إسم العيادة"
                               >

                        <label class="form-label">الطبيب</label>
                        <select class="form-control" required  name="user_id">
                            <option value='' selected disabled>تحديد الطبيب</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                               

                        <label class="form-label">القسم</label>
                        <select class="form-control"  name="category_id" >
                            <option selected disabled>تحديد القسم</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label class="form-label">المدينة</label>
                        <select class="form-control"  name="city_id">
                            <option selected disabled>تحديد المدينة</option>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label class="form-label">العنوان</label>
                        <textarea class="form-control" name="address" placeholder="العنوان"></textarea>

                        <label class="form-label">وقت الانتظار بين المرضي</label>
                        <input type="number" name="waiting_time" class="form-control"
                               >

                        <label class="form-label">عرض سعر الكشف</label>
                        <select class="form-control"  name="show_price">
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select> 
                        
                        <label class="form-label">تاريخ الصلاحية</label>
                        <input type="date" name="expired_date" class="form-control"
                               >

                        <label class="form-label">حالة العيادة</label>
                        <select class="form-control"  name="status">
                            <option selected value="active">مفعل</option>
                            <option value="pending">قيد الموافقة</option>
                            <option value="reject">مرفوض</option>
                        </select>        
                        
                        <label class="form-label" style="font-size:16pt;margin-bottom:20px">مواعيد العمل</label>
                        <?php
                            $days = array(
                                array(
                                    "key" => "sat",
                                    "name" => "السبت"
                                ),
                                array(
                                    "key" => "sun",
                                    "name" => "الاحد"
                                ),
                                array(
                                    "key" => "mon",
                                    "name" => "الاثنين"
                                ),
                                array(
                                    "key" => "tue",
                                    "name" => "الثلاثاء"
                                ),
                                array(
                                    "key" => "wed",
                                    "name" => "الاربعاء"
                                ),
                                array(
                                    "key" => "thu",
                                    "name" => "الخميس"
                                ),
                                array(
                                    "key" => "fri",
                                    "name" => "الجمعة"
                                )
                            );
                        ?>
                        <div class="work-time">
                            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="worktime-item">
                                <i class="fa fa-plus add-period" data-key="<?php echo e($item['key']); ?>"></i>
                                <input type="checkbox" class="worktime-checkbox" name="<?php echo e($item['key']); ?>_active" value="true" checked>
                                <span> يوم <?php echo e($item["name"]); ?> </span>
                                <div class="period-item">
                                    <input class="date-picker" required type="time" name="<?php echo e($item['key']); ?>_start[]" step="1" value="06:00:00">
                                    <span class="divider-dates">--</span>
                                    <input class="date-picker" required type="time" name="<?php echo e($item['key']); ?>_end[]" step="1" value="23:00:00">
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- <div class="worktime-item">
                                <input type="checkbox" class="worktime-checkbox" name="active2" value="true" checked>
                                <span> يوم الاحد</span>
                                <input class="date-picker" required type="time" name="time_2_1" step="1" value="06:00:00">
                                <span class="divider-dates">--</span>
                                <input class="date-picker" required type="time" name="time_2_2" step="1" value="23:00:00">
                            </div>     
                            <div class="worktime-item">
                                <input type="checkbox" class="worktime-checkbox" name="active3" value="true" checked>
                                <span> يوم الاثنين</span>
                                <input class="date-picker" required type="time" name="time_3_1" step="1" value="06:00:00">
                                <span class="divider-dates">--</span>
                                <input class="date-picker" required type="time" name="time_3_2" step="1" value="23:00:00">
                            </div>  
                            <div class="worktime-item">
                                <input type="checkbox" class="worktime-checkbox" name="active4" value="true" checked>
                                <span> يوم الثلاثاء</span>
                                <input class="date-picker" required type="time" name="time_4_1" step="1" value="06:00:00">
                                <span class="divider-dates">--</span>
                                <input class="date-picker" required type="time" name="time_4_2" step="1" value="23:00:00">
                            </div>
                            <div class="worktime-item">
                                <input type="checkbox" class="worktime-checkbox" name="active5" value="true" checked>
                                <span> يوم الاربعاء</span>
                                <input class="date-picker" required type="time" name="time_5_1" step="1" value="06:00:00">
                                <span class="divider-dates">--</span>
                                <input class="date-picker" required type="time" name="time_5_2" step="1" value="23:00:00">
                            </div>       
                            <div class="worktime-item">
                                <input type="checkbox" class="worktime-checkbox" name="active6" value="true" checked>
                                <span> يوم الخميس</span>
                                <input class="date-picker" required type="time" name="time_6_1" step="1" value="06:00:00">
                                <span class="divider-dates">--</span>
                                <input class="date-picker" required type="time" name="time_6_2" step="1" value="23:00:00">
                            </div>    
                            <div class="worktime-item">
                                <input type="checkbox" class="worktime-checkbox" name="active7" value="true" checked>
                                <span> يوم الجمعة</span>
                                <input class="date-picker" required type="time" name="time_7_1" step="1" value="06:00:00">
                                <span class="divider-dates">--</span>
                                <input class="date-picker" required type="time" name="time_7_2" step="1" value="23:00:00">
                            </div>                                                                                                                           -->
                        </div>

                        <label class="form-label" style="font-size:16pt;margin-bottom:20px">تحديد المكان علي الخريطة</label>
                        <div id="map-canvas" style="margin-bottom:25px;display:block;width:100%;height:450px;margin-top:20px"></div>

                        <input type="hidden" name="latitude" id="clinic-lat" />
                        <input type="hidden" name="longitude" id="clinic-long" />
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/clinics/create.blade.php ENDPATH**/ ?>