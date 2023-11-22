<?php $__env->startSection('content'); ?>

<div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">

                <div class="form-container">
 
                    <div class="form-content ptb-50">

                        <h1 class="">تسجيل الدخول</h1>
                    
                        <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                <strong><?php echo e($error); ?></strong>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>            
                        
                        <form action="<?php echo e(url('/')); ?>/login" method="post" class="text-left">
                            <?php echo e(csrf_field()); ?>

                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="email">البريد الالكتروني</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input  value="<?php echo e(old('email')); ?>" id="email" name="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="البريد الالكتروني">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">كلمة المرور</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="كلمة المرور">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <?php if(env('GOOGLE_RECAPTCHA_KEY')): ?>
                                            <div class="g-recaptcha"
                                                data-sitekey="<?php echo e(env('GOOGLE_RECAPTCHA_KEY')); ?>">
                                            </div>
                                            <br/>
                                        <?php endif; ?>                                          
                                        <button type="submit" class="btn btn-primary" value="">تسجيل الدخول</button>
                                    </div>
                                </div>

              
                            </div>
                        </form>

                    </div>  
                                  
                </div>
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $("form").submit(function(event) {

//    var recaptcha = $("#g-recaptcha-response").val();
//    if (recaptcha === "") {
//       event.preventDefault();
//       alert("الرجاء تأكيد اختبار التحقق");
//    }
});
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/auth/login.blade.php ENDPATH**/ ?>