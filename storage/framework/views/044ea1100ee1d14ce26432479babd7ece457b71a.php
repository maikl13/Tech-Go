<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.contact_us')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

	

	<!--section contact-->
	<div class="section single-section" id="contact">
		<div class="banner-contact-us" style="background-image: url(<?php echo e(url('/')); ?>/assets/images/content/contact-bg.png)">
			<div class="container">
				<div class="row no-gutters">
					<div class="wow slideInRight col-sm-6 col-lg-6 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right d-flex align-items-end">
						<img src="/assets/images/content/banner-callus.png" alt="" class="shift-left">
					</div>
					<div class="col-sm-6 wow slideInLeft col-lg-6 order-1 order-sm-2 d-flex">
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
								<br/>
								<br/>
								<h5 class="right"><?php echo e(__('lang.social_media')); ?></h5>
							<div class="content-social mt-15">
							<a href="<?php echo e($global_settings->where('key','facebook')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="<?php echo e($global_settings->where('key','twitter')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="<?php echo e($global_settings->where('key','instagram')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
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

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/contact.blade.php ENDPATH**/ ?>