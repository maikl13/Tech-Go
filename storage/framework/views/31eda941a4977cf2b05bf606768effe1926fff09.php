<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.gallery')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

		<!--section clients gallery-->
		<div id="gallery" class="section single-section">
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

	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/gallery.blade.php ENDPATH**/ ?>