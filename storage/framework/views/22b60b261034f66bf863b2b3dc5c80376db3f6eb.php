            <div class="servOne" data-aos="flip-left">
              <!-- start Front Card -->
              <div class="front__Card">
                <!-- ====== Start Shape01 ===== -->
  
                <!-- ====== End Shape01 ===== -->
                <!-- ===== start main Serv One ==== -->
                <div class="main__serv__One">
                  <!-- ==== R Start icon ==== -->
                  <div class="icon">
                    <img src="/storage/images/<?php echo e($item['icon']); ?>" />
                  </div>
                  <!-- ==== End icon ==== -->
                  <!-- ==== start info ==== -->
                  <div class="info">
                    <h1 class="title"><?php echo e($item['title_' . app()->getLocale()]); ?></h1>
                    <p class="text">
                      <?php echo e($item['content_' . app()->getLocale()]); ?>

                    </p>
                  </div>
                  <!-- ==== End info ==== -->
                </div>
                <!-- ===== End main Serv One R ==== -->
              </div>
              <!-- End Front Card -->
              <!-- start Back Card -->
              <div class="back__Card">
                <!-- Start content Two -->
                <div class="contentTwo">
                  <button class="btn">
                    <a href="<?php echo e(url('/' . app()->getLocale() )); ?>#contact" class="link_arrow">
                      <strong> <?php echo e(__('lang.request_service')); ?></strong>
                      <span>
                        <i class="fa-solid iconFa2 fa-long-arrow-left"></i>
                      </span>
                    </a>
                  </button>
                </div>
                <!-- End content Two -->
              </div>
              <!-- End Back Card -->
            </div><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/front/layouts/parts/service.blade.php ENDPATH**/ ?>