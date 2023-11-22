<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="text-muted f-w-400">
                        <h3 style="color:#333">تعديل <?php echo e($feature->title_ar); ?></h3>
                    </div>
                    <form method="POST" action="/admin/features/update"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($feature->id); ?>" />
                        <div class="row">
                            <div class="col-6">
                                <label>العنوان عربي</label>
                                <input value="<?php echo e($feature->title_ar); ?>" type="text" name="title_ar" class="form-control"  
                                       >
                            </div>
                            <div class="col-6">
                                <label>العنوان انجليزي</label>
                                <input value="<?php echo e($feature->title_en); ?>" type="text" name="title_en" class="form-control" 
                                       >
                            </div>

                            <div class="col-12">
                                <label>المحتوي عربي</label>
                                <textarea name="content_ar" class="form-control"><?php echo e($feature->content_ar); ?></textarea>
                            </div>

                            <div class="col-12">
                                <label>المحتوي انجليزي</label>
                                <textarea name="content_en" class="form-control"><?php echo e($feature->content_en); ?></textarea>
                            </div>



                            <div class="col-12">
                                <label>صورة : </label>
                                <input type="file" name="image" class="form-control"
                                       accept="image/*" >
                                       <img src="/storage/images/<?php echo e($feature->image); ?>" style="width:150px;display:block" />

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/dashboard/edit-feature.blade.php ENDPATH**/ ?>