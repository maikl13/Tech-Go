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
              <?php echo e(__('lang.our_products')); ?>

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
      <!-- ======= Start Products ===== -->
      <div class="portfolio__Projects products-grid products-single-grid" id="Partner">

        
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== End section title ===== -->
          <!-- ====== start all protfolio project ====== -->
          <div class="all__portfolio__Projects popup-gallery">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- Start port One -->
              <?php echo $__env->make('front.layouts.parts.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <!-- end port One -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- ====== End all protfolio project ====== -->

        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End section Portfolie Projects ===== -->
    </main>
    <!-- ======== End main ======= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/products.blade.php ENDPATH**/ ?>