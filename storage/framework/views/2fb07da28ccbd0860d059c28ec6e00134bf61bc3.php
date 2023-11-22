<?php $__env->startSection('content'); ?>
	<!--//quick links-->
	<div class="page-content">
		<!--section-->
		<div class="doctor-box-h-wrap" style="opacity:1">
					<div class="doctor-box-h" style="opacity:1">
						<div class="doctor-box-h-photo">
							<img src="/storage/images/<?php echo e($item['image']); ?>" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-h-info">
							<h5 class="doctor-box-h-name"><?php echo e($item['title_' . app()->getLocale()]); ?></h5>
							<table class="table doctor-box-h-table">
								<tbody>
								<tr>
									<td><?php echo e(__('lang.address')); ?>:</td>
									<td> 
									<?php echo nl2br($item['address_' . app()->getLocale()]); ?>

									</td>
								</tr>

								<tr>
									<td><?php echo e(__('lang.working_times')); ?>:</td>
									<td>
										<div class="schedule-row">
											<?php echo nl2br($item['worktimes_' . app()->getLocale()]); ?>

										</div>
									</td>
								</tr>
								<tr>
									<td><?php echo e(__('lang.contact')); ?>:</td>
									<td>
										<ul class="contact-inline">
											<li><i class="icon-telephone"></i> <span><?php echo e($item['phone']); ?></span></li>
									
										</ul>
									</td>
								</tr>
								</tbody>
							</table>
							<!-- <div class="doctor-box-h-booking">
								<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
										class="icon-right-arrow"></i><span>Contact Via Whatsapp</span><i
										class="icon-right-arrow"></i></a>
							</div> -->
						</div>
					</div>
				</div>

		<div class="section mt-0">
			<input type="hidden" id="lat" value="<?php echo e($item['lat']); ?>" />
			<input type="hidden" id="long" value="<?php echo e($item['long']); ?>" />
			<div id="map-canvas" style="margin-bottom:0px;display:block;width:100%;height:450px;margin-top:20px"></div>
		</div>
		<!--//section-->

	</div>

	<?php $__env->stopSection(); ?>

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
            
            const myLatLng = { lat: parseFloat($("#lat").val()), lng: parseFloat($('#long').val()) };
            placeMarker(myLatLng, false)


        }
        google.maps.event.addDomListener(window, 'load', init);



    </script>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/single-branch.blade.php ENDPATH**/ ?>