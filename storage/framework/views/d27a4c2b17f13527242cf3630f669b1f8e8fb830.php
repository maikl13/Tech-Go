<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('front.layouts.parts.header-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content__Header">
      <!-- start Container -->
      <div class="container">
        <!-- ==== Start All contnet ==== -->
        <div class="all__Content flex-between">
          <!-- ==== Start Content Info === -->
          <div class="content__Info" data-aos="fade-left">
            <h1 class="titleInfo infoTitleProject">
            <?php echo e(__('lang.explore_our_projects')); ?>

            </h1>
            <p class="textInfo"><?php echo e(__('lang.let_us_introduce_our_projects')); ?></p>
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
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?> 

    <!-- ======== Start main ======= -->
    <main>
      <!-- ======= Start section Portfolie Projects ===== -->
      <div class="portfolio__Projects" id="Partner">

        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title">
            <div class="main_title" data-aos="fade-left">
              <h1 class="title"><?php echo e(__('lang.let_us_introduce_our_projects')); ?></h1>
              <p class="text"><?php echo e(__('lang.explore_our_projects')); ?></p>
            </div>
            <ul class="listFilter" data-aos="fade-right">
              <li class="navFilter active" data-filter=".app, .game, .website">
                <?php echo e(__('lang.filter_all')); ?>

              </li>
              <li class="navFilter" data-filter=".website"><?php echo e(__('lang.filter_web')); ?></li>
              <li class="navFilter" data-filter=".app"><?php echo e(__('lang.filter_apps')); ?></li>
              <li class="navFilter" data-filter=".game"><?php echo e(__('lang.filter_games')); ?></li>
            </ul>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ====== start all protfolio project ====== -->
          <div class="all__portfolio__Projects popup-gallery">

          <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Start port One -->
            <?php echo $__env->make('front.layouts.parts.project', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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


<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/projects.blade.php ENDPATH**/ ?>