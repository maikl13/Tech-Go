<?php $__env->startSection('content'); ?>

		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('<?php echo e(url('/')); ?>/front/images/banner/bnr1.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1 class="single-title"><?php echo e($item['title_' . app()->getLocale()]); ?></h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/jobs"><?php echo e(__('lang.jobs')); ?></a></li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- About -->
		<section class="content-inner section-wrapper4" style="padding-top:50px">
			<div class="container">
				<div class="row">
	
					<div class="col-xl-12 col-lg-12  wow fadeInUp" data-wow-delay="0.4s">
                        <?php if(session('success')): ?>
                        <div style="color: green;font-weight: bold;font-size: 18pt;"><?php echo e(__('lang.job_applied')); ?></div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div style="color:red;font-weight:500;font-size:18pt">* <?php echo e($err); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>    
						<p>
							<?php echo $item['description_' . app()->getLocale()]; ?>

						</p>
					</div>
				</div>
                <br/>
               
                <div class="row">
                    <div class="contact-info form-wrapper style-1">
                        <h2 class="title" style="font-size:18pt"><?php echo e(__('lang.apply_to')); ?> <?php echo e($item['title_' . app()->getLocale()]); ?></h2>
                        <div class="contact-area">
                            <form enctype='multipart/form-data' action="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/jobs" class="" method="POST" >
                                <?php echo csrf_field(); ?>
                                <div class="dzFormMsg"></div>
                                <input type="hidden" class="form-control" name="dzToDo" value="Contact">
                                <div class="row sp15">
                                    <div class="col-md-6">
                                        <label class="form-label"><?php echo e(__('lang.name')); ?></label>
                                        <div class="input-group">
                                            <input name="name" required type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"><?php echo e(__('lang.email')); ?></label>
                                        <div class="input-group">
                                            <input name="email" required type="email" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"><?php echo e(__('lang.phone')); ?></label>
                                        <div class="input-group">
                                            <input name="phone" required type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"><?php echo e(__('lang.cv')); ?></label>
                                        <div class="input-group">
                                            <input name="file" required type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label"><?php echo e(__('lang.job_description')); ?></label>
                                        <div class="input-group">
                                            <textarea name="description" rows="5" required class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" name="job_id" value="<?php echo e($item['id']); ?>" />
                                        <button  type="submit" class="btn btn-secondary"><?php echo e(__('lang.submit')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>	
                    </div>                    
                </div>
			</div>
	
		</section>
		<!-- About End-->
	
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/show-job.blade.php ENDPATH**/ ?>