
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
              <h1 class="titleInfo infoTitleProject"><?php echo e(__('lang.our_tech')); ?></h1>
            </div>
            <!-- ==== End Content Info ===== -->
            <!-- ==== Start Image Content ===== -->
            <div class="image__Content imgProject">
              <img src="<?php echo e(url('/')); ?>/front/assets/images/main/02.webp" alt="image" />
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
      <!-- ======= Start Section technology ========= -->
      <div class="technology">
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="fade-right">
            <h1 class="title"><?php echo e(__('lang.our_tech')); ?></h1>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ===== Start all Technology =====  -->
          <div class="all__Technology" data-aos="fade-up">
          <?php $__currentLoopData = $techs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- ===== Start technology one ===== -->
            <?php echo $__env->make('front.layouts.parts.tech', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- ===== End technology one ===== -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- ===== End all Technology =====  -->
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End Section technology ========= -->
    </main>
    <!-- ======== End main ======= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/front/techs.blade.php ENDPATH**/ ?>