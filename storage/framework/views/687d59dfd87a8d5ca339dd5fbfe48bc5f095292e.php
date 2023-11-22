<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.branches')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

 			<!--section specialists-->
             <div id="branches" class="section single-section">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color"><?php echo e(__('lang.visit_us')); ?></div>
				<h2 class="h1 title-with-clone" data-title="<?php echo e(__('lang.branches')); ?>"><?php echo e(__('lang.branches')); ?></h2>
				<div class="h-decor"></div>
			</div>
			<div class="mt-3 mt-lg-5"></div>
			<div class="row single-branches">
				<?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="doctor-box-h-wrap col-lg-6 wow zoomIn">
				<a style="text-decoration:none" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/branch/<?php echo e($item['id']); ?>/show"><div class="doctor-box-h">
						<div class="doctor-box-h-photo">
							<img src="/storage/images/<?php echo e($item['image']); ?>" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-h-info">
							<h5 class="doctor-box-h-name"><?php echo e($item['title_' . app()->getLocale()]); ?></h5>
							<table class="table doctor-box-h-table">
								<tbody>
								<tr>
									<td><?php echo e(__('lang.address')); ?>:</td>
									<td> 
									<?php echo nl2br($item['address_' . app()->getLocale()]); ?>

									</td>
								</tr>

								<tr>
									<td><?php echo e(__('lang.working_times')); ?>:</td>
									<td>
										<div class="schedule-row">
											<?php echo nl2br($item['worktimes_' . app()->getLocale()]); ?>

										</div>
									</td>
								</tr>
								<tr>
									<td><?php echo e(__('lang.contact')); ?>:</td>
									<td>
										<ul class="contact-inline">
											<li><i class="icon-telephone"></i> <span><?php echo e($item['phone']); ?></span></li>
									
										</ul>
									</td>
								</tr>
								</tbody>
							</table>
							<!-- <div class="doctor-box-h-booking">
								<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
										class="icon-right-arrow"></i><span>Contact Via Whatsapp</span><i
										class="icon-right-arrow"></i></a>
							</div> -->
						</div>
					</div></a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
	<!--//section specialists-->

	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/branches.blade.php ENDPATH**/ ?>