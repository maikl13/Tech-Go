<?php $__env->startSection('content'); ?>
		<!-- Banner Start -->
		<div class="banner-one">
			<div class="container">
				<div class="row banner-inner">
					<div class="col-lg-7 col-md-7">
						<div class="banner-content">
							<h5 class="sub-title text-primary"><?php echo e(__('lang.short_about')); ?></h5>
							<h1 class="title">
								<?php echo e($about['banner_title_' . app()->getLocale()]); ?>

							</h1>
							<p> 
							<?php echo e($about['banner_description_' . app()->getLocale()]); ?>

							</p>
							<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/about" class="btn btn-secondary btnhover2"><?php echo e(__('lang.more')); ?> <i class="flaticon-right-arrows ms-3 scale1"></i></a>
	
						</div>
					</div>
					<div class="col-lg-5 col-md-5">
						<div class="banner-media">
							<img src="<?php echo e(url('/')); ?>/storage/images/<?php echo e($about['banner_image']); ?>" class="main-img" alt="">
							<div class="dz-media">
								<img src="<?php echo e(url('/')); ?>/front/images/shape.png" class="main-img" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="dz-shape">
					<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1 move-2" alt="shape">
					<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-2 move-2" alt="shape">
					<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-3 move-2" alt="shape">
					<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-4 move-2" alt="shape">
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- About -->
		<section class="content-inner section-wrapper4">
			<div class="container">
				<div class="row">
		
					<div class="col-xl-12 col-lg-12  wow fadeInUp" data-wow-delay="0.4s">
						<div class="section-inner">
							<div class="section-head m-b30">
								<h5 class="sub-title"><?php echo e(__('lang.about_us')); ?></h5>
								<h2 class="title"><?php echo e($about['about_title_' . app()->getLocale()]); ?></h2>
							</div>
							<div class="row m-b30">
								<div class="col-xl-7">
									<p>
									<?php echo e($about['about_short_description_' . app()->getLocale()]); ?>											
									</p>
								</div>
								<div class="col-xl-5">
									<div class="counter-text-wrapper">
										<div class="counter-text m-b30">
											<h4><?php echo e(__('lang.programs')); ?></h4>
											<div class="counter-num text-primary">
												<span class="counter"><?php echo e($about['about_programs_count']); ?></span> 
											</div>
										</div>
										<div class="counter-text m-b30">
											<h4><?php echo e(__('lang.activites')); ?></h4>
											<div class="counter-num text-primary">
												<span class="counter"><?php echo e($about['about_activities_count']); ?></span> 
											</div>
										</div>
										<div class="counter-text">
											<h4><?php echo e(__('lang.donations')); ?></h4>
											<div class="counter-num text-primary">
												$<span class="counter"><?php echo e($about['about_donations_values']); ?></span> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/about" class="btn btn-primary"><?php echo e(__('lang.more')); ?></a>
						</div>
					</div>
				</div>
			</div>
	
		</section>
		<!-- About End-->
		
		<!-- Programs -->
		<div class="content-inner-3 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h5 class="sub-title"><?php echo e(__('lang.programs')); ?></h5>
					<h2 class="title"><?php echo e(__('lang.youth')); ?></h2>
					<p><?php echo e(__('lang.programs_about')); ?></p>
				</div>
				<div class="swiper categories-swiper">
					<div class="swiper-wrapper">

					<?php $__currentLoopData = $youth_programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="project-categories.html" class="icon-cell">
									<img src="/storage/images/<?php echo e($p->icon); ?>" />
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="project-categories.html"><?php echo e($p['title_'. app()->getLocale()]); ?></a></h6>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					</div>
					<div class="swiper-pagination style-1 text-center"></div>
				</div>
				<!-- View More -->
				<div class="row">
					<div clas="col-12">
						<div class="view-more-box">
							<a href="#!" class="btn btn-primary"><?php echo e(__('lang.more')); ?> <i class="fas fa-angle-down"></i></a>
						</div>
					</div>
				</div>
			</div>
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-3" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-4" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-5" alt="shape">
		</div>
		<!-- End Programs -->

		<!-- Programs -->
		<div class="content-inner-3 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h5 class="sub-title"><?php echo e(__('lang.programs')); ?></h5>
					<h2 class="title"><?php echo e(__('lang.education')); ?></h2>
					<p><?php echo e(__('lang.programs_about')); ?></p>
				</div>
				<div class="swiper categories-swiper">
					<div class="swiper-wrapper">
					<?php $__currentLoopData = $education_programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="project-categories.html" class="icon-cell">
									<img src="/storage/images/<?php echo e($p->icon); ?>" />
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="project-categories.html"><?php echo e($p['title_'. app()->getLocale()]); ?></a></h6>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<div class="swiper-pagination style-1 text-center"></div>
				</div>
				<!-- View More -->
				<div class="row">
					<div clas="col-12">
						<div class="view-more-box">
							<a href="#!" class="btn btn-primary"><?php echo e(__('lang.more')); ?> <i class="fas fa-angle-down"></i></a>
						</div>
					</div>
				</div>
			</div>
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-3" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-4" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-5" alt="shape">
		</div>
		<!-- End Programs -->
		
		<!-- Client Logo -->
		<section class="clients-wrapper wow fadeInUp" data-wow-delay="0.2s">
			<div class="container">
				<div class="section-head text-center">
					<h4 class="title"><?php echo e(__('lang.our_partners')); ?></h4>
				</div>
				<div class="swiper clients-swiper">
					<div class="swiper-wrapper">
						<?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="swiper-slide">
							<div class="clients-logo">
								<img class="logo-main" src="/teams_images/<?php echo e($p->image); ?>" alt="">
							</div>
						</div>	
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</section>
		<!-- Client Logo -->

		<!-- Inquiry -->
		<section class="content-inner-3 voting-intro">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
						<div class="section-head">
							<h5 class="sub-title"><?php echo e(__('lang.participate_with_us_by')); ?></h5>
							<h2 class="title"><?php echo e(__('lang.filling_questionnaire')); ?></h2>
							<p><?php echo e(__('lang.improve_our_services')); ?></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 m-b30 text-end d-none d-lg-block wow fadeInUp" data-wow-delay="0.4s">
						<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/questionnaire" class="btn btn-primary btnhover2 vote-btn"><?php echo e(__('lang.start_questionnaire')); ?><i class="fa-solid fa-angle-left ms-2"></i></a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Inquire -->		
		
		
		<!-- Counter -->
		<div class="counter-wrapper-1 content-inner-3">
			<div class="container">
				<div class="counter-inner bg-secondary">
					<div class="row">
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num"><?php echo e($about['about_donners_count']); ?></span>
								<p class="counter-text"><?php echo e(__('lang.donners')); ?></p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num"><?php echo e($about['about_programs_count']); ?></span>
								<p class="counter-text"><?php echo e(__('lang.programs')); ?></p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.6s">
							<div class="counter-style-1 text-center">
								<span class="counter-num counter"><?php echo e($about['about_activities_count']); ?></span>
								<p class="counter-text"><?php echo e(__('lang.activites')); ?></p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.8s">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num"><?php echo e($about['about_donations_values']); ?></span>
								<p class="counter-text"><?php echo e(__('lang.donations')); ?></p>
							</div>
						</div>
					</div>
					<img src="<?php echo e(url('/')); ?>/front/images/counter/pattren1.png" class="pattren1 move-2" alt="">
					<img src="<?php echo e(url('/')); ?>/front/images/counter/pattren2.png" class="pattren2 move-2" alt="">
					<img src="<?php echo e(url('/')); ?>/front/images/counter/pattren3.png" class="pattren3 move-2" alt="">
					<img src="<?php echo e(url('/')); ?>/front/images/counter/pattren4.png" class="pattren4 move-2" alt="">
					<img src="<?php echo e(url('/')); ?>/front/images/counter/pattren5.png" class="pattren5 move-2" alt="">
					<img src="<?php echo e(url('/')); ?>/front/images/counter/pattren6.png" class="pattren6 move-2" alt="">
				</div>
			</div>
		</div>
		<!-- Counter End -->
		
		<!-- Our Blog  -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-12">
						<div class="section-head wow fadeInUp" data-wow-delay="0.2s">
							<h5 class="sub-title"><?php echo e(__('lang.whats_happening')); ?></h5>
							<h2 class="title"><?php echo e(__('lang.news')); ?></h2>
						</div>
						<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($key != 2): ?>
								<div class="dz-card style-6 blog-half wow fadeInUp" data-wow-delay="0.2s">
									<div class="dz-media">
										<a href="blog-details.html"><img src="/storage/images/<?php echo e($n->image); ?>" alt=""></a>
										<ul class="dz-badge-list">
											<li><a href="javascript:void(0);" class="dz-badge"><?php echo e($n->created_at->format('Y M d')); ?></a></li>
										</ul>
										<a href="blog-details.html" class="btn btn-secondary"><?php echo e(__('lang.more')); ?></a>
									</div>
									<div class="dz-info">
										<h4 class="dz-title"><a href="blog-details.html"><?php echo e($n['title_' . app()->getLocale()]); ?></a></h4>
										<p><?php echo strip_tags(substr($n['content_' . app()->getLocale()],0,150)); ?>...</p>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<div class="col-xl-5 col-lg-12 m-b30 wow fadeInUp" data-wow-delay="0.6s">
					<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($key == 2): ?>
								<div class="dz-card style-7" style="background-image: url(/storage/images/<?php echo e($n->image); ?>)">
									<div class="dz-category">
										<ul class="dz-badge-list">
											<li><a href="javascript:void(0);" class="dz-badge"><?php echo e($n->created_at->format('Y M d')); ?></a></li>
										</ul>
									</div>
									<div class="dz-info">
										<h2 class="dz-title"><a href="blog-details.html" class="text-white"><?php echo e($n['title_' . app()->getLocale()]); ?></a></h2>
									</div>							
								</div>
							<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</section>
		<!-- Our Blog End  -->
				
		<!-- Our Blog  -->
		<section class="content-inner-2 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h2 class="title"><?php echo e(__('lang.blog')); ?></h2>
					<p><?php echo e(__('lang.blog_intro')); ?></p>
				</div>
				<div class="swiper blog-slider-full">
					<div class="swiper-wrapper m-b5">
						<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="swiper-slide">
							<div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="blog-details.html"><img src="/blog_images/<?php echo e($item->image); ?>" alt=""></a>
									<a href="blog-details.html" class="btn btn-secondary"><?php echo e(__('lang.more')); ?></a>
								</div>
								<div class="dz-info">
									<h5 class="dz-title"><a href="blog-details.html"><?php echo e($item['title_' . app()->getLocale()]); ?></a></h5>
									<p><?php echo strip_tags(substr($item['content_' . app()->getLocale()],0,148)); ?>...</p>
									
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
		</section>
		<!-- Our Blog End  -->

			
		
		<!-- Map Iframe -->
		<section class="content-inner map-wrapper1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h2 class="title"><?php echo e(__('lang.contact_us')); ?></h2>
					<p><?php echo e(__('lang.contact_intro')); ?></p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="map-iframe style-1">
						<?php echo $settings->where('key','map_iframe')->first()->value; ?>

						</div>
					</div>
					
					<div class="col-lg-6 col-sm-12">
						<div class="contact-info form-wrapper style-1">
							<h2 class="title"><?php echo e(__('lang.contact_us')); ?></h2>
							<div class="contact-area">
								<form id="contactform" class="dz-form dzForm contact-bx" method="POST" >
									<div class="dzFormMsg"></div>
									<input type="hidden" class="form-control" name="dzToDo" value="Contact">
									<div class="row sp15">
										<div class="col-md-6">
											<label class="form-label"><?php echo e(__('lang.name')); ?></label>
											<div class="input-group">
												<input name="name" required type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label"><?php echo e(__('lang.email')); ?></label>
											<div class="input-group">
												<input name="email" required type="email" class="form-control" >
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label"><?php echo e(__('lang.phone')); ?></label>
											<div class="input-group">
												<input name="phone" required type="text" class="form-control" >
											</div>
										</div>
										<div class="col-md-6">
											<label class="form-label"><?php echo e(__('lang.subject')); ?></label>
											<div class="input-group">
												<input name="subject" required type="text" class="form-control" >
											</div>
										</div>
										<div class="col-md-12">
											<label class="form-label"><?php echo e(__('lang.message')); ?></label>
											<div class="input-group">
												<textarea name="message" rows="5" required class="form-control" ></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button  type="submit" class="btn btn-secondary"><?php echo e(__('lang.submit')); ?></button>
										</div>
									</div>
								</form>
							</div>	
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- Map Iframe End -->
		
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\charity\resources\views/front/index.blade.php ENDPATH**/ ?>