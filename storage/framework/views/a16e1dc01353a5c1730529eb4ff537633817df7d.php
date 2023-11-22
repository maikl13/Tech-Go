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
                        <h3 style="color:#333">تعديل <?php echo e($clinic->name); ?></h3>
                    </div>
                    <form method="POST" action="/admin/clinics/update">
                        <?php echo csrf_field(); ?>

                        <label class="form-label">اسم العيادة</label>
                        <input type="text" value="<?php echo e($clinic->name); ?>" name="name" class="form-control" placeholder="إسم العيادة"
                               >

                        <label class="form-label">الطبيب</label>
                        <select class="form-control"  name="user_id">
                            <option selected disabled>تحديد الطبيب</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($c->id == $clinic->user_id): ?> selected  <?php endif; ?> value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                               

                        <label class="form-label">القسم</label>
                        <select class="form-control"  name="category_id" >
                            <option selected disabled>تحديد القسم</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($c->id == $clinic->category_id): ?> selected  <?php endif; ?> value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label class="form-label">المدينة</label>
                        <select class="form-control"  name="city_id">
                            <option selected disabled>تحديد المدينة</option>
                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  <?php if($c->id == $clinic->city_id): ?> selected  <?php endif; ?> value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label class="form-label">العنوان</label>
                        <textarea class="form-control" name="address" placeholder="العنوان"><?php echo e($clinic->address); ?></textarea>

                        <label class="form-label">وقت الانتظار بين المرضي</label>
                        <input type="number" value="<?php echo e($clinic->waiting_time); ?>" name="waiting_time" class="form-control"
                               >

                        <label class="form-label">عرض سعر الكشف</label>
                        <select class="form-control"  name="show_price">
                            <option <?php if($clinic->show_price == 1): ?> selected <?php endif; ?> value="1">نعم</option>
                            <option <?php if($clinic->show_price == 0): ?> selected <?php endif; ?> value="0">لا</option>
                        </select> 


                        <label class="form-label">تاريخ الصلاحية</label>
                        <input type="date" name="expired_date" value="<?php echo e($clinic->expired_date); ?>" class="form-control"
                               >

                        <label class="form-label">حالة العيادة</label>
                        <select class="form-control"  name="status">
                            <option value="active" <?php if($clinic->status == "active"): ?> selected  <?php endif; ?>>مفعل</option>
                            <option value="pending" <?php if($clinic->status == "pending"): ?> selected  <?php endif; ?>>قيد الموافقة</option>
                            <option value="reject" <?php if($clinic->status == "reject"): ?> selected  <?php endif; ?>>مرفوض</option>
                        </select>  
                        
                        <?php

                            function getDayName($k) {
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
                                foreach($days as $item) {
                                    if($item["key"] == $k) {
                                        return $item["name"];
                                    }
                                }
                                return "";
                            }
                        ?>
                        <label class="form-label" style="font-size:16pt;margin-bottom:20px">مواعيد العمل</label>
                        <div class="work-time">
                            <?php $__currentLoopData = $worktimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="worktime-item">
                                    <i class="fa fa-plus add-period" data-key="<?php echo e($item->day); ?>"></i>
                                    <input type="checkbox" class="worktime-checkbox" name="<?php echo e($item->day); ?>_active" value="<?php echo e($item->active); ?>" <?php if($item->active == "true"): ?> checked <?php endif; ?>>
                                    <span> يوم <?php echo e(getDayName($item->day)); ?> </span>
                                    <?php $__currentLoopData = $item->periods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="period-item">
                                        <?php if($k != 0): ?>
                                        <i class="fa fa-times remove-period"></i>
                                        <?php endif; ?>
                                        <input class="date-picker" required type="time" name="<?php echo e($item->day); ?>_start[]" step="1" value="<?php echo e($p->start); ?>">
                                        <span class="divider-dates">--</span>
                                        <input class="date-picker" required type="time" name="<?php echo e($item->day); ?>_end[]" step="1" value="<?php echo e($p->end); ?>">
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                                                         
                        </div>

                        <label class="form-label" style="font-size:16pt;margin-bottom:20px">تحديد المكان علي الخريطة</label>
                        <div id="map-canvas" style="margin-bottom:25px;display:block;width:100%;height:450px;margin-top:20px"></div>

                        <input type="hidden" name="latitude" id="clinic-lat" />
                        <input type="hidden" name="longitude" id="clinic-long" />

                        <input type="hidden" name="id" value="<?php echo e($clinic->id); ?>" />
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

            $('.work-time').on("click", ".remove-period", function() {
                $(this).parent().remove()
            })

            $(".add-period").on("click", function() {
                var key = $(this).attr('data-key');
                var item = '<div class="period-item"><i class="fa fa-times remove-period"></i><input class="date-picker" required type="time" name="'+key+'_start[]" step="1" value="06:00:00"><span class="divider-dates">--</span><input class="date-picker" required type="time" name="'+key+'_end[]" step="1" value="23:00:00"></div>';
                $(this).parent().append(item)
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
        });


    </script>
<input type="hidden" class="current-lat" value="<?php echo e($clinic->latitude); ?>" />
<input type="hidden" class="current-long" value="<?php echo e($clinic->longitude); ?>" />
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
                placeMarker(event.latLng, true);
            });
            function placeMarker(location, isMap) {
                if(marker != null) {
                    marker.setMap(null);
                }
                console.log(location)
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                if(isMap) {
                document.getElementById("clinic-lat").value = location.lat()
                document.getElementById("clinic-long").value = location.lng()
                }
            }
            const myLatLng = { lat: parseFloat($(".current-lat").val()), lng: parseFloat($('.current-long').val()) };
            placeMarker(myLatLng, false)


        }
        google.maps.event.addDomListener(window, 'load', init);

     

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/clinics/edit.blade.php ENDPATH**/ ?>