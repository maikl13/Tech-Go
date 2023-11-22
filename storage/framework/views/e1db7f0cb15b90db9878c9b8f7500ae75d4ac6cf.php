<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.about_us')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container mt-6">
			<div class="row">
				<div class="col-md wow slideInRight">
					<div class="doctor-page-photo text-center">
					<img src="/storage/images/<?php echo e($about['doctor_about_image']); ?>" alt="" class="img-fluid">

					</div>
					<div class="mt-3 mt-md-5"></div>
					<table class="table doctor-page-table">
						<tr>
							<td><?php echo e(__('lang.speciality')); ?></td>
							<td><?php echo e($about['speciality_' . app()->getLocale() ]); ?></td>
						</tr>
						<tr>
							<td><?php echo e(__('lang.degree')); ?></td>
							<td><?php echo e($about['degree_' . app()->getLocale() ]); ?></td>
						</tr>
						<tr>
							<td><?php echo e(__('lang.experience_years')); ?></td>
							<td><?php echo e($about['experience_years']); ?> </td>
						</tr>
					</table>
				</div>
				<div class="col-lg-8 mt-4 mt-lg-0 wow slideInLeft">
					<div class="doctor-info mb-3 mb-lg-4">
						<div class="doctor-info-name">
							<h3><?php echo e($about['doctor_about_title_' . app()->getLocale() ]); ?></h3>
							<h6><?php echo e($about['speciality_' . app()->getLocale() ]); ?></h6>
						</div>
						<div class="doctor-info-phone"><i class="icon-telephone"></i><a href="tel:<?php echo e($global_settings->where('key','phone')->first()->value); ?>"><?php echo e($global_settings->where('key','phone')->first()->value); ?></a></div>
						<div class="doctor-info-social">
							<a href="<?php echo e($global_settings->where('key','facebook')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="mailto:<?php echo e($global_settings->where('key','email')->first()->value); ?>" class="hovicon"><i class="icon-black-envelope"></i></a>
						</div>
					</div>
					<p>
					<?php echo e($about['doctor_about_description_' . app()->getLocale() ]); ?>

					</p>

					<a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/contact" class="btn request-med"><i class="icon-right-arrow"></i><span><?php echo e(__('lang.request_medical_cons')); ?></span><i class="icon-right-arrow"></i></a>

				</div>
			</div>
		</div>
	</div>
	<!--//section-->
			<!--section speciality-->
            <div class="section single-section wow bounceIn" id="specialitySection">
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

	
	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/about.blade.php ENDPATH**/ ?>