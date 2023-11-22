<?php $__env->startSection('content'); ?>

		
	<!-- Our Blog  -->
	<section class="content-inner-2">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="section-head wow fadeInUp" data-wow-delay="0.2s">
						<h5 class="sub-title"><?php echo e(__('lang.join_us')); ?></h5>
						<h2 class="title"><?php echo e(__('lang.jobs')); ?></h2>
					</div>
					<div class="row">
					<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-12">
							<div class="dz-card job-item style-6 blog-half wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-info">
									<h4 class="dz-title"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/jobs/<?php echo e($n['id']); ?>/show"><?php echo e($n['title_' . app()->getLocale()]); ?></a></h4>
									<p><?php echo strip_tags(substr($n['description_' . app()->getLocale()],0,540)); ?>...</p>
                                    <a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/jobs/<?php echo e($n['id']); ?>/show" class="btn btn-primary"><?php echo e(__('lang.apply')); ?></a>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Blog End  -->
    <br/>
    <br/>

		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/jobs.blade.php ENDPATH**/ ?>