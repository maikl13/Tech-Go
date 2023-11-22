<?php $__env->startSection('content'); ?>

		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('/storage/images/<?php echo e($item['image']); ?>');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1 class="single-title"><?php echo e($item['title_' . app()->getLocale()]); ?></h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/news"><?php echo e(__('lang.news')); ?></a></li>
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
                        <img class="single-image" src="/storage/images/<?php echo e($item['image']); ?>" />
						<p>
							<?php echo $item['content_' . app()->getLocale()]; ?>

						</p>
					</div>
				</div>
			</div>
	
		</section>
		<!-- About End-->
	
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/single-news.blade.php ENDPATH**/ ?>