    <!-- =================== Start Header ========================= -->
    <div class="header headerHome">
      <!-- <div class="imgBanner"></div> -->
      <!-- ====== Start shape Head ===== -->
      <div class="shapeHead shape">
        <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/05.png" alt="image" />
      </div>
      <!-- ====== End shape Head ===== -->

      <?php echo $__env->make('front.layouts.parts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <!-- ====== End Nav Menu ====== -->
      <!-- ====== Start Content Header ==== -->
      <div class="content__Header content__Header01">
        <!-- start Container -->
        <div class="container">
          <!-- ==== Start All contnet ==== -->
          <div class="all__Content flex-between">
            <!-- ==== Start Content Info === -->
            <div class="content__Info" data-aos="fade-left">
              <h1 class="titleInfo"><?php echo e($global_about['banner_title_' . app()->getLocale()]); ?></h1>

              <input type="hidden" id="banner-strings" value='<?php echo e($global_about['banner_description_' . app()->getLocale()]); ?>' />
              <!-- <p class="textInfo typed">خيارك الاول لتحويل فكرتك ل واقع</p> -->
              <p class="textInfo typed"></p>

              <button class="btn btnHead">
                <a href="#contact"><?php echo e(__('lang.have_free_consulting')); ?></a>
              </button>
            </div>
            <!-- ==== End Content Info ===== -->
            <!-- ==== Start Image Content ===== -->

            <div
              class="image__Content image__ContentHeader"
              data-aos="fade-right"
            >
              <div class="imgSpinner"></div>
              <img
                src="<?php echo e(url('/')); ?>/storage/images/<?php echo e($global_about['banner_image']); ?>"
                class="imageHeader"
                alt="image"
              />
            </div>

            <!-- ==== End Image Content ====== -->
          </div>
          <!-- ==== End All Content ==== -->
        </div>
        <!-- End Container -->
        <!-- ===== Start bottom Content ===== -->
        <div class="bottom__Content">
          <div class="container">
            <!-- Start All bottom content === -->
            <div class="all__Bottom__Content flex-between">
              <!-- ==== Start info ===== -->
              <div class="info" data-aos="fade-right">
                <h1 class="title"><?php echo e(__('lang.our_goal')); ?></h1>
                <p class="text">
                 <?php echo $global_about['our_goal_' . app()->getLocale()]; ?>

                </p>
              </div>
              <!-- ===== End Info ==== -->
              <!-- ===== Start Social ===== -->
              <div class="social__Bottom" data-aos="fade-up">
                <h1 class="title"><?php echo e(__('lang.our_social_pages')); ?></h1>
                <div class="list__Social">
                  <ul class="socialLick">

                  <?php
                    $fb_link = $settings->where('key','contact_facebook')->first()->value;
                    $youtube_link = $settings->where('key','contact_youtube')->first()->value;
                    $twitter_link = $settings->where('key','contact_twitter')->first()->value;
                    $linked_link = $settings->where('key','contact_linkedin')->first()->value;
                  ?>

                  <?php if($fb_link): ?>
                    <li class="linkSocial">
                      <a href="<?php echo e($fb_link); ?>">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16.726"
                          height="8.129"
                          viewBox="0 0 16.726 8.129"
                        >
                          <path
                            id="facebook"
                            d="M2.075,16.726V8.878H0V6.052H2.075V3.638C2.075,1.742,3.3,0,6.126,0A17.15,17.15,0,0,1,8.115.11L8.048,2.749s-.862-.008-1.8-.008c-1.018,0-1.182.469-1.182,1.248V6.052H8.129L8,8.878H5.063v7.848H2.075"
                            transform="translate(0 8.129) rotate(270)"
                            fill="#fff"
                          />
                        </svg>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if($youtube_link): ?>
                    <li class="linkSocial">
                      <a href="<?php echo e($youtube_link); ?>">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="15.167"
                          height="21.566"
                          viewBox="0 0 15.167 21.566"
                        >
                          <path
                            id="youtube"
                            d="M8.555,10.381V4.322l5.825,3.041L8.555,10.381ZM21.349,3.273a4.655,4.655,0,0,0-.858-2.141A3.086,3.086,0,0,0,18.33.219C15.314,0,10.787,0,10.787,0h-.009S6.252,0,3.234.218a3.086,3.086,0,0,0-2.161.913A4.663,4.663,0,0,0,.216,3.272,32.623,32.623,0,0,0,0,6.763V8.4a32.641,32.641,0,0,0,.216,3.491,4.656,4.656,0,0,0,.858,2.141,3.649,3.649,0,0,0,2.378.922c1.725.165,7.332.216,7.332.216s4.532-.006,7.549-.224a3.085,3.085,0,0,0,2.161-.913,4.662,4.662,0,0,0,.858-2.141A32.641,32.641,0,0,0,21.566,8.4V6.763a32.6,32.6,0,0,0-.216-3.491Z"
                            transform="translate(0 21.566) rotate(-90)"
                            fill="#fff"
                            fill-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if($twitter_link): ?>
                    <li class="linkSocial">
                      <a href="<?php echo e($twitter_link); ?>">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="15.167"
                          height="18.671"
                          viewBox="0 0 15.167 18.671"
                        >
                          <path
                            id="twitter-bird"
                            d="M18.671,1.8a7.756,7.756,0,0,1-1.914,1.978q.011.219.011.5a11,11,0,0,1-1.816,6.023,11.637,11.637,0,0,1-2.193,2.495A9.775,9.775,0,0,1,9.7,14.521a11.173,11.173,0,0,1-3.829.646A10.662,10.662,0,0,1,0,13.446a8.282,8.282,0,0,0,.914.053,7.51,7.51,0,0,0,4.758-1.641,3.716,3.716,0,0,1-2.224-.764A3.765,3.765,0,0,1,2.1,9.2a3.829,3.829,0,0,0,1.73-.064,3.733,3.733,0,0,1-2.2-1.32A3.706,3.706,0,0,1,.753,5.379V5.332a3.78,3.78,0,0,0,1.735.479A3.805,3.805,0,0,1,1.243,4.446a3.738,3.738,0,0,1-.46-1.821A3.763,3.763,0,0,1,1.3.7,10.906,10.906,0,0,0,4.794,3.527,10.644,10.644,0,0,0,9.2,4.7a3.746,3.746,0,0,1-.1-.872,3.69,3.69,0,0,1,1.122-2.708,3.832,3.832,0,0,1,5.5.086,7.629,7.629,0,0,0,2.432-.93A3.7,3.7,0,0,1,16.47,2.4a7.655,7.655,0,0,0,2.2-.6Z"
                            transform="translate(0 18.671) rotate(-90)"
                            fill="#fff"
                          />
                        </svg>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if($linked_link): ?>
                    <li class="linkSocial">
                      <a href="<?php echo e($linked_link); ?>">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="15.167"
                          height="15.869"
                          viewBox="0 0 15.167 15.869"
                        >
                          <path
                            id="linkedin"
                            d="M3.606,4.928V15.167H.2V4.928H3.605Zm.217-3.162A1.636,1.636,0,0,1,3.3,3.027a1.948,1.948,0,0,1-1.4.506H1.881A1.865,1.865,0,0,1,.517,3.027,1.693,1.693,0,0,1,0,1.767,1.664,1.664,0,0,1,.532.5,1.944,1.944,0,0,1,1.922,0,1.889,1.889,0,0,1,3.3.5a1.724,1.724,0,0,1,.527,1.266ZM15.869,9.3v5.869h-3.4V9.691a2.988,2.988,0,0,0-.418-1.7,1.471,1.471,0,0,0-1.307-.615,1.673,1.673,0,0,0-1.09.357A2.2,2.2,0,0,0,9,8.617a2.5,2.5,0,0,0-.114.837v5.713h-3.4q.021-4.123.021-6.685T5.5,5.424l-.01-.5h3.4V6.416H8.865a4.522,4.522,0,0,1,.424-.579A4.386,4.386,0,0,1,9.872,5.3a2.689,2.689,0,0,1,.9-.45,4.068,4.068,0,0,1,1.183-.16,3.669,3.669,0,0,1,2.841,1.173A4.922,4.922,0,0,1,15.869,9.3Z"
                            transform="translate(0 15.869) rotate(-90)"
                            fill="#fff"
                          />
                        </svg>
                      </a>
                    </li>
                  <?php endif; ?>

                  </ul>
                </div>
              </div>
              <!-- ====== End Social ====== -->
            </div>
            <!-- End all bottom content -->
          </div>
        </div>
        <!-- ===== End bottom Content ===== -->
      </div>
      <!-- ===== End Content Header ====== -->
    </div>
    <!-- =================== End Header ========================= --><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/layouts/parts/header-home.blade.php ENDPATH**/ ?>