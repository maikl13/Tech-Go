<?php $__env->startSection('content'); ?>

		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('<?php echo e(url('/')); ?>/front/images/banner/bnr1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1><?php echo e(__('lang.about_us')); ?></h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('lang.about_us')); ?></li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
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
						</div>
						<p>
							<?php echo $about['about_description_' . app()->getLocale()]; ?>

						</p>
					</div>
				</div>
			</div>
	
		</section>
		<!-- About End-->
	
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\charity\resources\views/front/about.blade.php ENDPATH**/ ?>