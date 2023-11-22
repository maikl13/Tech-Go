

<?php $__env->startSection('header'); ?>
  <?php echo $__env->make('front.layouts.parts.header-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- ====== Start Content Header ==== -->
      <div class="content__Header">
        <!-- start Container -->
        <div class="container">
          <!-- ==== Start All contnet ==== -->
          <div class="all__Content flex-between">
            <!-- ==== Start Content Info === -->
            <div class="content__Info" data-aos="fade-left">
              <h1 class="titleInfo infoTitleProject">
                <?php echo e(__('lang.services')); ?>

              </h1>
          
            </div>
            <!-- ==== End Content Info ===== -->
            <!-- ==== Start Image Content ===== -->
            <div class="image__Content imgProject" data-aos="fade-down">
              <img src="<?php echo e(url('/')); ?>/front/assets/images/main/01.webp" alt="image" />
            </div>
            <!-- ==== End Image Content ====== -->
          </div>
          <!-- ==== End All Content ==== -->
        </div>
        <!-- End Container -->
      </div>
      <!-- ===== End Content Header ====== -->  
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- ======== Start main ======= -->
    <main>
      <!-- ======= Start section Portfolie Projects ===== -->
      <div class="Services-grid" id="Services">
        <!-- ====== Start Shape01 ===== -->
        <div class="shape01 shape">
          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/01.svg" alt="shape" />
        </div>
        <!-- ====== End Shape01 ===== -->

        <!-- ====== Start Shape01 ===== -->
        <div class="shape002 shape">
          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/01.svg" alt="shape" />
        </div>
        <!-- ====== End Shape01 ===== -->
        <!-- ===== Start Container ===== -->
        <div class="container">
            <div class="row">

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                  <?php echo $__env->make('front.layouts.parts.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End section Portfolie Projects ===== -->
    </main>
    <!-- ======== End main ======= -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/front/services.blade.php ENDPATH**/ ?>