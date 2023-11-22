<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.faqs')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

		<!--section faq-->
		<div id="faqs" class="section single-section ">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-fullheight wow slideInRight" style="background-image: url(/assets/images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<div class="title-wrap">
								<h2 class="h1"><?php echo e(__('lang.faqs')); ?></h2>
							</div>
							<div id="tab-content" class="tab-content mt-sm-1">
								<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem<?php echo e($item['id']); ?>"><span><?php echo e($item['question_' . app()->getLocale()]); ?></span></a>
											<div id="faqItem<?php echo e($item['id']); ?>" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
													<?php echo e($item['answer_' . app()->getLocale()]); ?>

													</p>
												</div>
											</div>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->

	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/faqs.blade.php ENDPATH**/ ?>