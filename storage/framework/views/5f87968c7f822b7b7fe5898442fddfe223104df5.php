    <?php
        if(app()->getLocale() == "ar") {
            $categories = array(
                "website" => "مواقع الويب",
                "app"     => "تطبيقات الهاتف",
                "game"    => "الالعاب"
            );
        }else {
            $categories = array(
                "website" => "Websites",
                "app"     => "Apps",
                "game"    => "Games",
            );
        }   
    ?>
           <div class="portOne <?php echo e($item->category); ?> mix" data-aos="fade-left">
              <!-- Start main Port One -->
              <div class="mainPortOne">
                <!-- start img Port -->
                <div class="imgPortFolio">
                  <img
                    src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($item->image); ?>"
                    alt="imgPortFolio"
                  />
                </div>
                <!-- End img Port -->
                <!-- === Start Icon Demo === -->
                <div class="iconDemo">
                  <!-- ==== Start Content ==== -->
                  <div class="content">
                    <h1 class="title"><?php echo e($categories[$item->category]); ?></h1>
                    <p class="text"><?php echo e($item['title_' . app()->getLocale()]); ?></p>
                    <div class="mainIcons">
                      <!-- start icon One -->
                      <a href="<?php echo e(url('/' . app()->getLocale())); ?>/projects/<?php echo e($item->id); ?>/show" class="iconOne iconLink">
                        <i class="fa-solid fa-link"></i>
                      </a>
                      <!-- End icon One -->
                      <!-- start icon One r -->
                      <a
                        href="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($item->image); ?>"
                        class="iconOne iconEye mypup-gallery"
                      >
                        <i class="fa-solid fa-eye"></i>
                      </a>
                      <!-- End icon One -->
                      <!-- start icon One -->
                      <button class="btn btnPortfolio">
                        <a href="<?php echo e(url('/' . app()->getLocale())); ?>#contact"><?php echo e(__('lang.order_project')); ?></a>
                      </button>
                      <!-- End icon One -->
                    </div>
                  </div>
                  <!-- ==== End Content ==== -->
                </div>
                <!-- === End Icon Demo === -->
              </div>
              <!-- End main Port One -->
            </div><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/layouts/parts/project.blade.php ENDPATH**/ ?>