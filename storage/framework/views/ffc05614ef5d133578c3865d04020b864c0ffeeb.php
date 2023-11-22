    <!-- =================== Start Header ========================= -->
    <div class="header" id="Home">
      <!-- <div class="imgBanner"></div> -->
      <!-- ====== Start shape Head ===== -->
      <div class="shapeHead shape">
        <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/05.webp" alt="image" />
      </div>
      <!-- ====== End shape Head ===== -->

      <?php echo $__env->make('front.layouts.parts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- =================== End Header ========================= --><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/layouts/parts/header-page.blade.php ENDPATH**/ ?>