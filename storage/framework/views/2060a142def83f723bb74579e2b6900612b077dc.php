
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
            <?php echo e($item['title_' . app()->getLocale()]); ?>

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
     <div class="project-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="project-details-body">
                        <h2><i class="fa fa-list"></i> <?php echo e($item['title_' . app()->getLocale()]); ?></h2>
                        <img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($item->image); ?>"
                         alt="<?php echo e($item['title_' . app()->getLocale()]); ?>"/>
                        <div class="project-actions">
                          <?php if($item->type == "project"): ?>
                            <?php if($item->website_url): ?>
                            <a target="_blank" href="<?php echo e($item->website_url); ?>"><i class="fa fa-link"></i> <?php echo e(__('lang.action_website')); ?></a>
                            <?php endif; ?>
                            <?php if($item->google_play_url): ?>
                            <a target="_blank" href="<?php echo e($item->google_play_url); ?>"><i class="fab fa-google-play"></i> <?php echo e(__('lang.action_google')); ?></a>
                            <?php endif; ?>
                            <?php if($item->app_store_url): ?>
                            <a target="_blank" href="<?php echo e($item->app_store_url); ?>"><i class="fab fa-apple"></i> <?php echo e(__('lang.action_apple')); ?></a>
                            <?php endif; ?>
                          <?php else: ?>
                          <a target="_blank" href="#!"><i class="fa fa-shopping-cart"></i> <?php echo e(__('lang.buy_product')); ?></a>

                          <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-body">
                        <?php echo $item['description_' . app()->getLocale()]; ?>

                    </div>
                </div>
            </div>
        </div>
     </div>
    </main>
    <!-- ======== End main ======= -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/front/project-details.blade.php ENDPATH**/ ?>