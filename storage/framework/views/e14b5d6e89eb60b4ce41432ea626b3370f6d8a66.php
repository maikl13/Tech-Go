<?php $__env->startSection('content'); ?>
		
	<!-- Our Blog  -->
	<section class="content-inner-2 section-pattren1 m-b50">
		<div class="container">
			<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
				<h2 class="title"><?php echo e(__('lang.blog')); ?></h2>
				<p><?php echo e(__('lang.blog_intro')); ?></p>
			</div>
		
			<div class="row">
			<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 ">
					<div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
						<div class="dz-media">
							<a href="blog-details.html"><img src="/blog_images/<?php echo e($item['image']); ?>" alt=""></a>
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
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
	</section>
	<!-- Our Blog End  -->

<?php $__env->stopSection(); ?>

		

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\charity\resources\views/front/blog.blade.php ENDPATH**/ ?>