<?php $__env->startSection('content'); ?>

		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('<?php echo e(url('/')); ?>/front/images/banner/bnr1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1 class="single-title"><?php echo e(__('lang.team')); ?></h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
                          
							<li class="breadcrumb-item"><a href="#!"><?php echo e(__('lang.team')); ?></a></li>
             
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<?php if(count($categories) > 0): ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(count($cat->employees) > 0): ?>
		<!-- Programs -->
		<div class="content-inner-3 section-pattren1" style="padding-bottom:0">
			<div class="container">
            <div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h2 class="title"><?php echo e($cat['title_' . app()->getLocale()]); ?></h2>
				</div>
				<div class="swiper categories-swiper">
					<div class="swiper-wrapper">

					<?php $__currentLoopData = $cat['employees']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="swiper-slide employee-item">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="#!" class="icon-cell">
									<img src="/uploads/teams/<?php echo e($emp['image']); ?>" />
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="#!"><?php echo e($emp['title_'. app()->getLocale()]); ?></a></h6>
                                    <p><?php echo e(strip_tags($emp['description_'. app()->getLocale()])); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					</div>
					<div class="swiper-pagination style-1 text-center"></div>
				</div>
				<!-- View More -->
				<!-- <div class="row">
					<div clas="col-12">
						<div class="view-more-box">
							<a href="#!" class="btn btn-primary"><?php echo e(__('lang.more')); ?> <i class="fas fa-angle-down"></i></a>
						</div>
					</div>
				</div> -->
			</div>
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-3" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-4" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-5" alt="shape">
		</div>
		<!-- End Programs -->
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
    <br/>
    <br/>
	
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/team.blade.php ENDPATH**/ ?>