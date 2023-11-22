      <!-- ====== Start nav menu ======== -->
      <div class="menu">
        <!-- ====== Start container ====== -->
        <div class="container">
          <!-- Start All menu -->
          <div class="allMenu flex-between">
            <!-- start Logo -->
            <div class="logo" data-aos="fade-left">
              <a href="<?php echo e(url('/' . app()->getLocale())); ?>" class="logoLink">
                <img src="<?php echo e(url('/')); ?>/storage/images/<?php echo e($global_about->about_logo); ?>" alt="logo" />
              </a>
            </div>
            <!-- End Logo -->
            <!-- === Start menu Bar R ===== -->
            <div class="menu__Bar">
              <!-- Start menu Links R -->
              <nav class="menuLinks" data-aos="fade-down">
                <div class="iconClose"><i class="fa-solid fa-close"></i></div>
                <!-- start Logo R -->
                <div class="logo logoMenu" data-aos="fade-left">
                  <a href="<?php echo e(url('/' . app()->getLocale())); ?>"" class="logoLink">
                    <img src="<?php echo e(url('/')); ?>/storage/images/<?php echo e($global_about->about_logo); ?>" alt="logo" />
                  </a>
                </div>
                <!-- End Logo R -->
                <!-- ==== Start list menu R ===== -->
                <ul class="list__Menu align-center">
                  <li class="nav__Item">
                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>"" class="nav__Link"><?php echo e(__('lang.home')); ?></a>
                  </li>
                  <li class="nav__Item">
                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>#Services" class="nav__Link"><?php echo e(__('lang.services')); ?></a>
                  </li>
                  <li class="nav__Item">
                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>#About" class="nav__Link"><?php echo e(__('lang.about_us')); ?></a>
                  </li>
                  <li class="nav__Item">
                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>#Partner" class="nav__Link"><?php echo e(__('lang.our_partners')); ?></a>
                  </li>
                  <li class="nav__Item">
                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>/team" class="nav__Link"><?php echo e(__('lang.team')); ?></a>
                  </li>
                  <li class="nav__Item">
                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>/blog" class="nav__Link"><?php echo e(__('lang.blog')); ?></a>
                  </li>
                </ul>
                <!-- ==== End list menu R ===== -->
              </nav>
              <!-- End menu Links -->
            </div>
            <!-- === End menu Bar ===== -->

            <!-- ===== Start All left Header ==== -->
            <div class="left__Header flex-center" data-aos="fade-right">
              <!-- ==== Start Languge ===== -->
              <div class="languge">
                <div class="lang langAr">
                  <a <?php if(app()->getLocale() == "ar"): ?> href="<?php echo e(url('/')); ?>/en" <?php else: ?> href="<?php echo e(url('/')); ?>/ar"  <?php endif; ?> class="align-center LinkLang">
                    <span class="text">
                      <?php if(app()->getLocale() == "ar"): ?>
                        EN
                      <?php else: ?>
                        العربية
                      <?php endif; ?>
                    </span>
                    <?php if(app()->getLocale() == "ar"): ?>
                    <img style="width:25px" src="<?php echo e(url('/')); ?>/front/assets/images/lang/en.png" alt="ArabicLang" />
                    <?php else: ?>
                    <img  src="<?php echo e(url('/')); ?>/front/assets/images/lang/ar.png" alt="ArabicLang" />
                    <?php endif; ?>
                  </a>

                </div>

              </div>
              <a href="<?php echo e(url('/' . app()->getLocale())); ?>/theme" id='mode-btn'><i class="fas fa-moon"></i></a>

              <!-- ==== End Languge ===== -->
              <div class="toggle"><i class="fa-solid fa-bars"></i></div>
            </div>
            <!-- ====== End all Left Header ====== -->
          </div>
          <!-- End All Menu -->
        </div>
        <!-- ====== End container ====== -->
      </div><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/layouts/parts/menu.blade.php ENDPATH**/ ?>