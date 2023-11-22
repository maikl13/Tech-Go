<?php $__env->startSection('content'); ?>

        <!-- Banner  -->
        <div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('<?php echo e(url('/')); ?>/front/images/banner/bnr1.jpg');">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1><?php echo e(__('lang.questionnaire')); ?></h1>
 
                </div>
            </div>
        </div>
        <!-- Banner End -->

		<form action="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/questionnaire/submit" method="post">
			<?php echo csrf_field(); ?>
        <section class="content-inner " style="padding-top:25px;padding-bottom:25px">
            <div class="container">
				<?php if(session('success')): ?>
                <div class="row">
                    <div class="col-12">
						<p style="width: 100%;
    text-align: center;
    font-size: 18pt;
    color: green;
    font-weight: bold;
    padding: 100px 0px;"><?php echo e(session('success')); ?></p>
					</div>
				</div>
				<?php else: ?>
                <div class="row">
                    <div class="col-12">

                        <div class="questions-panel">
                            <div class="questions-panel-header">
                            <p><?php echo e(__('lang.answer_following')); ?>:</p>
                            </div>
                            <div class="questions">
							<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="question-item">
                    
                                    <div class="question-item-header">
                    
                                        <dv class="question-item-content">
                    
                                            <span>0<?php echo e($key + 1); ?></span>
                    
                                            <p> <?php echo e($q['question_' . app()->getLocale()]); ?></p>
                    
                                        </dv>
                    
                                        <i class="fas fa-question-circle"></i>
                    
                                    </div>
                    
                                    <div class="question-item-answers">
                    
										<?php $__currentLoopData = $q->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="radio-check-item hidden-check">
                    
                                            <input name="<?php echo e($q->id); ?>_answer" required value="<?php echo e($answer->id); ?>" class="form-control" type="radio">
                    
                                            <label><i class="fa fa-check"></i> <?php echo e($answer['answer_' . app()->getLocale()]); ?></label>
                    
                                        </div>  
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                    
                                    </div>
                    
                                </div>        
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            </div>
                            
                        </div>                    


                    </div>
					<div class="col-lg-12">
						<button class="btn btn-primary submit-questionnaire"><i class="fa fa-paper-plane"></i> <?php echo e(__('lang.submit')); ?></button>
					</div>
                </div>
				<?php endif; ?>
            </div>
        </section>
	</form>
            

        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/questionnaire.blade.php ENDPATH**/ ?>