<?php $__env->startSection('content'); ?>
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e($item['title_' . app()->getLocale()]); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 aside">
					<div class="blog-post blog-post-single">
						<div class="blog-post-info">
							
							<div>
								<h2 class="post-title"><a href="#!"><?php echo e($item['title_' . app()->getLocale()]); ?></a></h2>

							</div>
						</div>
						<div class="post-image">
							<img src="/storage/images/<?php echo e($item['image']); ?>" alt="">
						</div>
						<div class="post-text">
						<?php echo $item['content_' . app()->getLocale()]; ?>

						</div>

					</div>

				</div>
	
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/single-story.blade.php ENDPATH**/ ?>