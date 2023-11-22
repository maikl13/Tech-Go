<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.videos')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

    		<!--section welcome-->
		<div id="videos" class="section single-section">
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
						<video   id="my-video"
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

	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/videos.blade.php ENDPATH**/ ?>