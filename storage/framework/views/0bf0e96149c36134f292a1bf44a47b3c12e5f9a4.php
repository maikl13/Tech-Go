

<?php $__env->startSection('content'); ?>
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('<?php echo e(url('/')); ?>/front/images/banner/bnr1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1><?php echo e(__('lang.contact_us')); ?></h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(__('lang.contact_us')); ?></li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- Icon Box -->
		<section class="content-inner-1 bg-light section-pattren1">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 m-b20">
						<div class="icon-bx-wraper box-hover style-3">
							<div class="icon-lg"> 
								<a href="#!" class="icon-cell">
									<i class="flaticon-phone-call-1"></i>
								</a> 
							</div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><?php echo e(__('lang.phone')); ?></h5>
								<span class="ltr"><?php echo e($global_settings->where('key', 'contact_phone')->first()->value); ?></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 m-b20">
						<div class="icon-bx-wraper box-hover style-3">
							<div class="icon-lg"> 
								<a href="#!" class="icon-cell">
									<i class="flaticon-email"></i>
								</a> 
							</div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><?php echo e(__('lang.email')); ?></h5>
								<span><?php echo e($global_settings->where('key', 'contact_email')->first()->value); ?></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 m-b20">
						<div class="icon-bx-wraper box-hover style-3">
							<div class="icon-md"> 
								<a href="#!" class="icon-cell">
									<i class="flaticon-pin"></i>
								</a> 
							</div>
							<div class="icon-content">
								<h5 class="dz-tilte m-b5 text-capitalize"><?php echo e(__('lang.address')); ?></h5>
								<span><?php echo e($global_settings->where('key', 'contact_address_' . app()->getLocale())->first()->value); ?></span>
							</div>
						</div>
					</div>
				</div>
                <br/>
                <div class="row">
					<div class="col-lg-6">
						<div class="map-iframe style-1">
						<?php echo $global_settings->where('key','map_iframe')->first()->value; ?>

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
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1 move-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-3 move-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-4 rotating" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-5 rotating" alt="shape">
		</section>
		<!-- Icon Box -->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/contact.blade.php ENDPATH**/ ?>