<?php $__env->startSection('content'); ?>
		
	<!-- Our Blog  -->
	<section class="content-inner-2 section-pattren1 m-b50">
		<div class="container">
			<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
				<h2 class="title"><?php echo e(__('lang.videos')); ?></h2>
				
			</div>

			<div class="row">
				<form action="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/videos" method="get">
					<div class="col-lg-12">
						<select name="program_id" class="filter">
							<option value="">تحديد البرنامج</option>
							<?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option <?php if($p['id'] == request()->get('program_id')): ?> selected <?php endif; ?> value="<?php echo e($p['id']); ?>"><?php echo e($p['title_' . app()->getLocale()]); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</form>
			</div>
		
			<div class="row">
			<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-6 ">
					<div class="dz-card video-item style-1 wow fadeInUp" data-wow-delay="0.2s">
						<div class="dz-media">
                            <?php echo $item['source']; ?>

						</div>
						<div class="dz-info">
							<h5 class="dz-title"><a href="#!"><?php echo e($item['title_' . app()->getLocale()]); ?></a></h5>
							
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

		

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/videos.blade.php ENDPATH**/ ?>