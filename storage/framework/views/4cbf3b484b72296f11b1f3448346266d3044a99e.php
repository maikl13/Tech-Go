<?php $__env->startSection('content'); ?>
	<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
				<div class="quickLinks js-quickLinks">
					<div class="container">
						<div class="row no-gutters">
							<div class="col">
								<a href="#" class="link">
									<i class="icon-placeholder"></i><span><?php echo e(__('lang.location')); ?></span></a>
								<div class="link-drop p-0">
									<div id="googleMapDrop" class="google-map"></div>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-clock"></i><span><?php echo e(__('lang.working_times')); ?></span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-clock"></i><?php echo e(__('lang.working_times')); ?></h5>
									<table class="row-table">
										<tr>
											<td><i>Mon-Thu</i></td>
											<td>08:00 - 20:00</td>
										</tr>
										<tr>
											<td><i>Friday</i></td>
											<td> 07:00 - 22:00</td>
										</tr>
										<tr>
											<td><i>Saturday</i></td>
											<td>08:00 - 18:00</td>
										</tr>
										<tr>
											<td><i>Sunday</i></td>
											<td>Closed</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-pencil-writing"></i><span><?php echo e(__('lang.request_form')); ?></span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-pencil-writing"></i><?php echo e(__('lang.request_form')); ?></h5>
									<form id="requestForm" method="post" novalidate>
										<div class="successform">
											<p>Your message was sent successfully!</p>
										</div>
										<div class="errorform">
											<p>Something went wrong, try refreshing and submitting the form again.</p>
										</div>
										<div class="input-group">
											<span>
											<i class="icon-user"></i>
										</span>
											<input name="requestname" type="text" class="form-control" placeholder="Your Name" />
										</div>
										<div class="row row-sm-space mt-1">
											<div class="col">
												<div class="input-group">
													<span>
													<i class="icon-email2"></i>
												</span>
													<input name="requestemail" type="text" class="form-control" placeholder="Your Email" />
												</div>
											</div>
											<div class="col">
												<div class="input-group">
													<span>
													<i class="icon-smartphone"></i>
												</span>
													<input name="requestphone" type="text" class="form-control" placeholder="Your Phone" />
												</div>
											</div>
										</div>
										<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-tooth"></i>
										</span>
											<select name="requestservice" class="form-control">
												<option selected="selected" disabled="disabled">Select Service</option>
												<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
												<option value="General Dentistry">General Dentistry</option>
												<option value="Orthodontics">Orthodontics</option>
												<option value="Children`s Dentistry">Children`s Dentistry</option>
												<option value="Dental Implants">Dental Implants</option>
												<option value="Dental Emergency">Dental Emergency</option>
											</select>
										</div>
										<div class="row row-sm-space mt-1">
											<div class="col-sm-6">
												<div class="input-group flex-nowrap">
													<span>
														<i class="icon-calendar2"></i>
													</span>
													<div class="datepicker-wrap">
														<input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
													</div>
												</div>
											</div>
											<div class="col-sm-6 mt-1 mt-sm-0">
												<div class="input-group flex-nowrap">
													<span>
															<i class="icon-clock"></i>
													</span>
													<div class="datepicker-wrap">
														<input name="requesttime" type="text" class="form-control timepicker" placeholder="Time" readonly>
													</div>
												</div>
											</div>
										</div>
										<div class="text-right mt-2">
											<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
										</div>
									</form>
								</div>
							</div>

							<div class="col">
								<a href="#" class="link">
									<i class="icon-price-tag"></i><span><?php echo e(__('lang.calculator')); ?></span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
									<table class="row-table">
										<tr>
											<td>Initial Consultation</td>
											<td>$10</td>
										</tr>
										<tr>
											<td>Dental check-up</td>
											<td>$15</td>
										</tr>
										<tr>
											<td>Routine Exam (no xrays)</td>
											<td>$50</td>
										</tr>
										<tr>
											<td>Simple Removal of a tooth</td>
											<td>$122</td>
										</tr>
										<tr>
											<td>Teeth cleaning</td>
											<td>$50 - $75</td>
										</tr>
										<tr>
											<td>X-ray image</td>
											<td>$10</td>
										</tr>
									</table>
									<p class="text-right mt-15"><a href="prices.html" class="btn btn-sm btn-hover-fill">Calculator</a><a href="prices.html" class="btn btn-sm btn-hover-fill">Details</a></p>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-emergency-call"></i><span><?php echo e(__('lang.emergency_case')); ?></span></a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
									<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i><span class="phone">1-800-267-0000<br>1-800-267-0001</span>
										</li>
										<li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
									</ul>
									<p class="text-right mt-2"><a href="contact.html" class="btn btn-sm btn-hover-fill">Our Contacts</a></p>
								</div>
							</div>
							<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
						</div>
					</div>
					<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
				</div>
			</div>
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": false}'>
					<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="slide">
						<div class="img--holder" data-animation="kenburns" data-bg="/storage/images/<?php echo e($item['image']); ?>"></div>
						
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											<b><?php echo e($item['title_' . app()->getLocale() ]); ?></b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s"><?php echo e($item['description_' . app()->getLocale() ]); ?></div>
										<div class="slide-btn"><a href="<?php echo e($item['link']); ?>" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span><?php echo e(__('lang.know_more')); ?></span><i class="icon-right-arrow"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
			</div>
		</div>
		<!--//section slider-->

				<!--section welcome-->
				<div class="section wow" id="about">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block wow slideInRight">
								<img src="/storage/images/<?php echo e($about['doctor_about_image']); ?>" alt="" class="img-fluid">
							</div>
							<div class="col-lg-6 wow bounceInUp">
								<div class="title-wrap text-center text-lg-left mt-15 d-none d-md-block">
									
									<h2 class="h1"><?php echo e($about['doctor_about_title_' . app()->getLocale() ]); ?></h2>
								</div>
								<div class="row">
									<div class="d-lg-none col-8 col-sm-6 col-lg-5 mx-auto"><img src="/storage/images/<?php echo e($about['doctor_about_image']); ?>" alt="" class="img-fluid"></div>
									<div class="col-sm">
										<div class="title-wrap text-center text-lg-left mt-3 mt-sm-0 d-md-none">
											
											<h2 class="h1"><?php echo e($about['doctor_about_title_' . app()->getLocale() ]); ?></h2>
										</div>
										<div class="text-left mt-3 mt-sm-0">
											<p class="p-lg">
											<?php echo e($about['doctor_about_description_' . app()->getLocale() ]); ?>


											</p>
											<div class="mt-0 mt-lg-2 mt-xl-4"><img src="images/content/signature.png" alt="" class="img-fluid"></div>
											<div class="mt-0 mt-lg-15 mt-xl-3"></div>
											<!-- <a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a Visit<i class="icon-right-arrow"></i></a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//section welcome-->

			<!--section speciality-->
	<div class="section bg-grey wow zoomIn" id="specialitySection">
		<div class="container">
			<div class="title-wrap text-center text-md-left">
				<h2 class="h1 title-with-clone" data-title="<?php echo e(__('lang.about_us')); ?>"><span><?php echo e(__('lang.about_us')); ?></span></h2>
			</div>
			<div class="row no-gutters tab-vert-wrap">
				<div class="col-md-4">
					<div class="nav nav-pills-v" role="tablist">
						<a class="nav-link active" data-toggle="pill" href="#tab-A-v" role="tab"><span>+</span><?php echo e(__('lang.about_us')); ?></a>
						<a class="nav-link" data-toggle="pill" href="#tab-B-v" role="tab"><span>+</span><?php echo e(__('lang.our_vision')); ?></a>
						<a class="nav-link" data-toggle="pill" href="#tab-C-v" role="tab"><span>+</span><?php echo e(__('lang.our_mission')); ?></a>
			
					</div>
				</div>
				<div class="col-md-8">
					<div class="tab-content tab-content-v">
						<div id="tab-A-v" class="tab-pane fade show active" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-A-v-mob" class="nav-link" data-toggle="collapse"><span>+</span><?php echo e(__('lang.about_us')); ?></a>
							</div>
							<div id="tab-A-v-mob" class="collapse show tab-content-m">
								<h3><?php echo e(__('lang.about_us')); ?></h3>
								<p>
									<?php echo e($about['about_us_' . app()->getLocale()]); ?>


								</p>
	
							</div>
						</div>
						<div id="tab-B-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-B-v-mob" class="nav-link" data-toggle="collapse"><span>+</span><?php echo e(__('lang.our_vision')); ?></a>
							</div>
							<div id="tab-B-v-mob" class="collapse tab-content-m">
								<h3><?php echo e(__('lang.our_vision')); ?></h3>
								<p>
								<?php echo e($about['our_vision_' . app()->getLocale()]); ?>



								</p>
							</div>
						</div>
						<div id="tab-C-v" class="tab-pane fade" role="tabpanel">
							<div class="nav nav-pills-v" role="tablist">
								<a href="#tab-C-v-mob" class="nav-link" data-toggle="collapse"><span>+</span><?php echo e(__('lang.our_mission')); ?></a>
							</div>
							<div id="tab-C-v-mob" class="collapse tab-content-m">
								<h3><?php echo e(__('lang.our_mission')); ?></h3>
								<p>
								<?php echo e($about['our_mission_' . app()->getLocale()]); ?>



								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section speciality-->

		<!--section welcome-->
		<div id="videos" class="section">
			<div class="container pt-lg-2">
				<div class="title-wrap text-center text-md-left d-lg-none mb-lg-2">
					
					<h2 class="h1"><?php echo e(__('lang.videos')); ?></h2>
				</div>
				<div class="row mt-2 mt-md-3 mt-lg-0">
					<div class="col-md-12">
						<div class="title-wrap hidden d-none d-lg-block text-center text-md-left mb-50">
							
							<h2 class="h1"><?php echo e(__('lang.videos')); ?></h2>
						</div>
					</div>
					<?php
						$delay = 0;
					?>
					<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
						$delay = $delay + 0.2;
					?>
					<div class="col-md-4 mt-3 mt-md-0 wow bounceIn" data-wow-delay="<?php echo e($delay); ?>s">
						<div class="video-wrap embed-responsive embed-responsive-16by9">
						<video    id="my-video"
    class="video-js"
    controls
    preload="auto"
	width="100%"

    data-setup="{}" width="100%" height="250" controls>
  <source src="/storage/videos/<?php echo e($item['source']); ?>" type="video/mp4">
Your browser does not support the video tag.
</video>
						</div>
					</div>	
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				

				</div>
			</div>
		</div>
		<!--//section welcome-->

			<!--section specialists-->
	<div id="branches" class="section">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color"><?php echo e(__('lang.visit_us')); ?></div>
				<h2 class="h1 title-with-clone" data-title="<?php echo e(__('lang.branches')); ?>"><?php echo e(__('lang.branches')); ?></h2>
				<div class="h-decor"></div>
			</div>
			<div class="mt-3 mt-lg-5"></div>
			<div class="row specialist-carousel2 js-specialist-carousel2">
				<?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="doctor-box-h-wrap wow zoomIn">
				<a style="text-decoration:none" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/branch/<?php echo e($item['id']); ?>/show"><div class="doctor-box-h">
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
					</div></a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
	<!--//section specialists-->

		<!--section events-->
		<div id="stories" class="section" >
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1"><?php echo e(__('lang.stories')); ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-lg-3">
					<?php
						$delay = 0;
					?>
					<?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
						$delay = $delay + 0.2;
					?>
					<div class="col-md-6 col-lg-4 wow zoomIn" data-wow-delay="<?php echo e($delay); ?>s">
						<a href="/<?php echo e(app()->getLocale()); ?>/story/<?php echo e($item['id']); ?>/show"><div class="blog-post blog-post-style3">
							<div class="post-image">
								<img src="/storage/images/<?php echo e($item['image']); ?>" alt="">
							</div>
						
							<h2 class="post-title">
							<?php echo e($item['title_' . app()->getLocale()]); ?>

							</h2>
							<div class="post-teaser">
							<?php echo strip_tags(substr($item['content_' . app()->getLocale()],0,150)); ?>...
							</div>
						</div></a>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
			</div>
		</div>
		<!--//section events-->

		<!--section why choose us-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
			
					<h2 class="h1"><?php echo e(__('lang.features')); ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
				<?php
						$delay = 0;
					?>	
				<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php
						$delay = $delay + 0.2;
					?>
					<div class="col-md wow bounceIn" data-wow-delay="<?php echo e($delay); ?>s">
						<div class="icn-text icn-text-wmax">
							<div class="icn-text-circle"><img src="/storage/images/<?php echo e($item['image']); ?>" /></div>
							<div>
								<h5 class="icn-text-title"><?php echo e($item['title_' . app()->getLocale()]); ?></h5>
								<p><?php echo e($item['content_' . app()->getLocale()]); ?></p>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
			</div>
		</div>
		<!--//section why choose us-->



		<!--section testimonials-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-sm-8 col-lg-6 mt-2 mt-lg-0 order-1 order-sm-0">
						<div class="reviews-wrap ml-auto d-flex flex-column justify-content-center">
							<div class="title-wrap text-center text-md-right">
								
								<h2 class="h1"><?php echo e(__('lang.testimonials')); ?></h2>
							</div>
							<div class="js-reviews-carousel reviews-carousel text-center text-md-right">
								<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="review wow bounceIn">
									<p class="review-text"><?php echo e($item['client_feedback_' . app()->getLocale()]); ?></p>
									<p><span class="review-author">- <?php echo e($item['client_name_' . app()->getLocale()]); ?> -</span></p>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
						</div>
					</div>
					<div class="col-sm-4 col-lg-6 order-0 order-sm-1 reviews-photo wow slideInLeft">
						<img src="/assets/images/content/testimonials-right.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<!--//section testimonials-->
		<!--section achieved-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
			
					<h2 class="h1"><?php echo e(__('lang.our_numbers')); ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row d-block js-counter-carousel">
					<?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon">
								<img style="height:60px" src="/storage/images/<?php echo e($item['image']); ?>" />
							</div>
							<div class="counter-box-number"><span class="count" data-to="<?php echo e($item['value']); ?>" data-speed="1500"><?php echo e($item['value']); ?></span>+</div>
							<div class="decor"></div>
							<div class="counter-box-text"><?php echo e($item['title_' . app()->getLocale()]); ?></div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
			</div>
		</div>
		<!--//section achieved-->
		<!--section faq-->
		<div id="faqs" class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-fullheight wow slideInRight" style="background-image: url(/assets/images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<div class="title-wrap">
								<h2 class="h1"><?php echo e(__('lang.faqs')); ?></h2>
							</div>
							<div id="tab-content" class="tab-content mt-sm-1">
								<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem<?php echo e($item['id']); ?>"><span><?php echo e($item['question_' . app()->getLocale()]); ?></span></a>
											<div id="faqItem<?php echo e($item['id']); ?>" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
													<?php echo e($item['answer_' . app()->getLocale()]); ?>

													</p>
												</div>
											</div>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->

		<!--section clients gallery-->
		<div id="gallery" class="section">
			<div class="container">
				<div class="title-wrap text-center">
				
					<h2 class="h1"><?php echo e(__('lang.gallery')); ?></h2>
					<div class="h-decor"></div>
				</div>
				<div class="mt-2 mt-md-3 mt-lg-5"></div>
				<div class="sm-gallery-row row no-gutters mx-lg-15">
				<?php
						$delay = 0;
					?>	
					<?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
						$delay = $delay + 0.2;
					?>	
					<div class="col-lg-3 col-md-12 col-sm-12 wow zoomIn" data-wow-delay="<?php echo e($delay); ?>s"><span data-original-title="das" title="asd" class="gallery-popover-link" data-full="/storage/images/<?php echo e($item->full_image); ?>"><img src="/storage/images/<?php echo e($item->short_image); ?>" alt="" class="img-fluid"></span></div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

			</div>
		</div>
		<!--//section clients gallery-->

				<!--section blog posts -->
				<div id="blog" class="section">
					<div class="container">
						<div class="title-wrap text-center">
							<h2 class="h1"><?php echo e(__('lang.blog')); ?></h2>
							<div class="h-decor"></div>
						</div>
						<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
						<?php
						$delay = 0;
					?>	
						<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php
						$delay = $delay + 0.2;
					?>
							<div class="col-md-6 col-lg-4 wow zoomIn" data-wow-delay="<?php echo e($delay); ?>s">
								<div class="blog-post">
									<div class="post-image">
										<a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog/<?php echo e($item['id']); ?>/show"><img src="/blog_images/<?php echo e($item['image']); ?>" alt=""></a>
									</div>
									<div class="blog-post-info">
										<div>
											<h2 class="post-title"><a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog/<?php echo e($item['id']); ?>/show"><?php echo e($item['title_' . app()->getLocale()]); ?></a></h2>
										</div>
									</div>
									<div class="post-teaser"><?php echo strip_tags(substr($item['content_' . app()->getLocale()],0,150)); ?>...</div>
									<div class="mt-2"><a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog/<?php echo e($item['id']); ?>/show" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span><?php echo e(__('lang.read_more')); ?></span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					</div>
				</div>
				<!--//section blog posts -->

	<!--section contact-->
	<div class="section" id="contact">
		<div class="banner-contact-us" style="background-image: url(<?php echo e(url('/')); ?>/assets/images/content/contact-bg.png)">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-6 wow slideInRight col-lg-6 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right d-flex align-items-end">
						<img src="/assets/images/content/banner-callus.png" alt="" class="shift-left">
					</div>
					<div class="wow slideInLeft col-sm-6 col-lg-6 order-1 order-sm-2 d-flex">
						<div class="pt-2 pt-lg-6">
							<h2 data-title=""><span><?php echo e(__('lang.looking_for_medical')); ?></span></h2>
							<p><?php echo e(__('lang.contact_description')); ?></p>
							<form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
								<div class="successform">
									<p><?php echo e(__('lang.message_sent')); ?></p>
								</div>
								<div class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
						
								<div class="row row-sm-space mt-15">
									<div class="col-sm-6 mb-15"><input required type="text" class="form-control" name="name" placeholder="<?php echo e(__('lang.name')); ?>"></div>
									<div class="col-sm-6 mb-15"><input required type="text" class="form-control" name="phone" placeholder="<?php echo e(__('lang.phone')); ?>"></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input required type="text" class="form-control" name="email" placeholder="<?php echo e(__('lang.email')); ?>"></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input required type="text" class="form-control" name="subject" placeholder="<?php echo e(__('lang.subject')); ?>"></div>
								</div>
								<div class="mt-15">
									<textarea class="form-control" required name="message" placeholder="<?php echo e(__('lang.message')); ?>"></textarea>
								</div>
								<div class="mt-2 mt-lg-4 text-center text-md-left">
									<button type="submit" class="btn"><i class="icon-right-arrow"></i><span><?php echo e(__('lang.send')); ?></span><i class="icon-right-arrow"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section contact-->
	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/index.blade.php ENDPATH**/ ?>