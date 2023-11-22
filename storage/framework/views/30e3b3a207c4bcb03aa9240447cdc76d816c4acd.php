<?php $__env->startSection('content'); ?>

		
	<!-- Programs -->
	<div class="content-inner-3 section-pattren1">
		<div class="container">
			<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h5 class="sub-title"><?php echo e(__('lang.programs')); ?></h5>
					<h2 class="title"><?php echo e(__('lang.youth')); ?></h2>
					<p><?php echo e(__('lang.programs_about')); ?></p>
			</div>
		
				<div class="row">

				<?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-4 col-md-6 col-6">
						<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
							<div class="icon-lg m-sm-b20 m-b30"> <a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/programs/<?php echo e($p['id']); ?>/show" class="icon-cell">
								<img src="/storage/images/<?php echo e($p->icon); ?>" />
							</a> </div>
							<div class="icon-content">
								<h6 class="dz-tilte m-b5 text-capitalize"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/programs/<?php echo e($p['id']); ?>/show"><?php echo e($p['title_'. app()->getLocale()]); ?></a></h6>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				</div>
				<div class="swiper-pagination style-1 text-center"></div>
		

		</div>
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-2" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-3" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-4" alt="shape">
		<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-5" alt="shape">
	</div>
	<!-- End Programs -->

<?php $__env->stopSection(); ?>

		

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/youth_programs.blade.php ENDPATH**/ ?>