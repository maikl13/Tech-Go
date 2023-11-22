<?php $__env->startSection('content'); ?>

        <!-- Banner  -->
        <div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('<?php echo e(url('/')); ?>/front/images/banner/bnr1.jpg');">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1><?php echo e(__('lang.questions')); ?></h1>
 
                </div>
            </div>
        </div>
        <!-- Banner End -->

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

                            <div class="questions">
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="question-item">
                    
                                    <div class="question-item-header">
                    
                                        <dv class="question-item-content">
                    
                    
                                            <p> <?php echo e($q->question); ?></p>
                    
                                        </dv>
                    
                                        <i class="fas fa-question-circle"></i>
                    
                                    </div>
                    
                                    <div class="question-item-answers">
                    
										<p style="font-size:13pt;margin:0"><?php echo e($q->answer); ?></p>
                                
                    
                                    </div>
                    
                                </div>        
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            </div>
                            
                        </div>                    


                    </div>

                </div>

                <br/>
                
                <div class="row">
                    <div class="contact-info form-wrapper style-1">
                        <h2 class="title" style="font-size:18pt;margin-bottom:15px"><?php echo e(__('lang.send_your_question')); ?></h2>
                        <p style="margin-bottom:25px">لن يتم عرض او مشاركة بياناتك</p>
                        <div class="contact-area">
                            <form enctype='multipart/form-data' action="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/questions" class="" method="POST" >
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
                                        <label class="form-label"><?php echo e(__('lang.phone')); ?></label>
                                        <div class="input-group">
                                            <input name="phone" required type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label"><?php echo e(__('lang.your_question')); ?></label>
                                        <div class="input-group">
                                            <textarea name="question" rows="5" required class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       
                                        <button  type="submit" class="btn btn-secondary"><?php echo e(__('lang.submit')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>	
                    </div>                    
                </div>
				<?php endif; ?>
            </div>
        </section>
	</form>
            

        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/questions.blade.php ENDPATH**/ ?>