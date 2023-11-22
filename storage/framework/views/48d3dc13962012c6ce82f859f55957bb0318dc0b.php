<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.stories')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

		<!--section events-->
		<div id="stories" class="section single-section" >
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

	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/stories.blade.php ENDPATH**/ ?>