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
                <?php echo e(__('lang.team')); ?>

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
        <!-- Start Team Area  -->
        <div class="eduvibe-about-one-team edu-team-area edu-section-gap team-area-shape-position bg-image bg-image--8 paralax-area">
            <div class="wrapper">
                <div class="container eduvibe-animated-shape">

                    <div class="row row--20">
                      <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="#!">
                                                <img src="/uploads/teams/<?php echo e($t->image); ?>" alt="team images">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="edu-instructor-info">
                                    <h5 class="title"><a href="#!"><?php echo e($t['title_' . app()->getLocale()]); ?></a></h5>
                                    <span class="desc"><?php echo e($t->cat['title_' . app()->getLocale()]); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>

            </div>
        </div>
        <!-- End Team Area  -->
    </main>
    <!-- ======== End main ======= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/teams.blade.php ENDPATH**/ ?>