<?php $__env->startSection('header'); ?>
  <?php echo $__env->make('front.layouts.parts.header-home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- ======== Start main ======= -->
    <main>
      <!-- ====== Start Section main ======= -->
      <div class="main" id="About">
        <!-- Start container -->
        <div class="container">
          <!-- ===== Start All main ===== -->
          <div class="all__main flex-between">
            <!-- ======= Start num ===== -->
            <div class="num" data-aos="fade-down">
              <span class="number__Count">
                <div class="mainCounter">
                  +
                  <span
                    class="counter purecounter"
                    data-purecounter-duration="2.5"
                    data-purecounter-end="<?php echo e($global_about['about_experience_years']); ?>"
                    data-purecounter-once="true"
                    >0</span
                  >
                </div>
                <span class="text"><?php echo e(__('lang.experience_years')); ?></span>
              </span>
            </div>
            <!-- ======= End num ===== -->
            <!-- ==== Start Contennt ==== -->
            <div class="content" data-aos="fade-right">
              <h1 class="title"><?php echo e($global_about['about_title_' . app()->getLocale()]); ?></h1>
              <p class="text">
              <?php echo e($global_about['about_description_' . app()->getLocale()]); ?>

              </p>
            </div>
            <!-- ==== End Contennt R ==== -->
          </div>
          <!-- ===== End All main ===== -->

          <!-- ===== Start video Banner ==== -->
          <div class="videoBanner">
            <!-- Start img Video -->
            <div class="img_Video" data-aos="fade-up">
              <div class="imgOver">
                <img src="<?php echo e(url('/')); ?>/front/assets/images/bg/01.webp" alt="imgVideo" />
              </div>
              <!-- Start Button Anim -->
              <div class="buttonAnim" data-src="/storage/videos/<?php echo e($global_about['about_video']); ?>">
                <a href="#!"><i class="fa-solid fa-play"></i></a>
              </div>
              <!-- End Button Anim -->
            </div>
            <!-- End img Video R -->

          </div>
          <!-- ===== End video Banner ==== -->
          <!-- ===== Start Tech ======= -->
          <div class="tech">
            <!-- ====== Start section title R ===== -->
            <div class="section__title" data-aos="fade-down">
              <h1 class="title"><?php echo e(__('lang.in_tech_go')); ?></h1>
              <p class="text">
               <?php echo e(__('lang.in_tech_go_description_part_1')); ?>

               <?php echo e($global_about['about_clients_count']); ?>

               <?php echo e(__('lang.in_tech_go_description_part_2')); ?>

              </p>
            </div>
            <!-- ====== End section title ===== -->
            <!-- ====== Start Mockup Content ==== -->
            <div class="mockup__content">
              <!-- ===== Start img Mockup ====== -->
              <div class="img__Mockup" data-aos="zoom-in">
                <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/sam.png" alt="image" />
                <div class="mb-screen-position">
                  <div class="mb-screen">
                    <section id="mockup-slider" class="owl-carousel mockupSC">
                      <div>
                        <a href="#"
                          ><img src="<?php echo e(url('/')); ?>/front/assets/images/shape/06.png" alt="image"
                        /></a>
                      </div>
                      <div>
                        <a href="#"
                          ><img src="<?php echo e(url('/')); ?>/front/assets/images/shape/06.png" alt="image"
                        /></a>
                      </div>
                      <div>
                        <a href="#"
                          ><img src="<?php echo e(url('/')); ?>/front/assets/images/shape/06.png" alt="image"
                        /></a>
                      </div>
                      <div>
                        <a href="#"
                          ><img src="<?php echo e(url('/')); ?>/front/assets/images/shape/06.png" alt="image"
                        /></a>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <!-- ===== End img Mockup ====== -->
              <!-- ==== Start num Counter ==== -->
              <div class="num__Counter counter01">
                <!-- R Start Img Bg -->
                <div class="imgBg">
                  <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/03.svg" alt="imgBg" />
                </div>
                <!-- End Img Bg -->
                <!-- ===== Start content num ==== -->
                <div class="content__num">
                  <span
                    class="counter purecounter"
                    data-purecounter-duration="2.5"
                    data-purecounter-end="<?php echo e($global_about['about_websites_count']); ?>"
                    data-purecounter-once="true"
                    >0</span
                  >
                  <span class="text"> <?php echo e(__('lang.website')); ?> </span>
                </div>
                <!-- ===== R End content num ==== -->
              </div>
              <!-- ==== End num Counter ==== -->
              <!-- ==== Start num Counter ==== -->
              <div class="num__Counter counter02">
                <!-- Start Img Bg -->
                <div class="imgBg">
                  <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/04.svg" alt="imgBg" />
                </div>
                <!-- R End Img Bg -->
                <!-- ===== Start content num R ==== -->
                <div class="content__num">
                  <span
                    class="counter purecounter"
                    data-purecounter-duration="2.5"
                    data-purecounter-end="<?php echo e($global_about['about_apps_count']); ?>"
                    data-purecounter-once="true"
                    >0</span
                  >
                  <span class="text"> <?php echo e(__('lang.app')); ?> </span>
                </div>
                <!-- ===== End content num ==== -->
              </div>
              <!-- ==== End num Counter ==== -->
            </div>
            <!-- ====== End Mockup Content ==== -->
          </div>
          <!-- ===== End Tech ======= -->
        </div>
        <!-- End Container -->
      </div>
      <!-- ====== End Section main ======= -->
      <!-- ====== Start section services ===== -->
      <section class="Services" id="Services">
        <!-- ====== Start shape Head ===== -->
        <div class="shapeHead shape">
          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/05.png" alt="image" />
        </div>
        <!-- ====== End shape Head ===== -->
        <!-- ======= Start Container ====== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="zoom-in">
            <div class="main_title">
              <h1 class="title"><?php echo e(__('lang.services')); ?></h1>
              <p class="text">
                <?php echo e(__('lang.services_sub_title')); ?>

              </p>
            </div>
            <a href="<?php echo e(url('/' . app()->getLocale())); ?>/services" class="linkTitle"
              ><?php echo e(__('lang.show_all_services')); ?>

              <span class="arrow">
                <svg
                  id="arrow-left"
                  xmlns="http://www.w3.org/2000/svg"
                  width="27.002"
                  height="15.753"
                  viewBox="0 0 27.002 15.753"
                >
                  <path
                    id="Path_2743"
                    data-name="Path 2743"
                    d="M13.171,10.454a1.125,1.125,0,0,1,0,1.593L7.216,18l5.956,5.954a1.126,1.126,0,0,1-1.593,1.593L4.829,18.8a1.125,1.125,0,0,1,0-1.593l6.75-6.75a1.125,1.125,0,0,1,1.593,0Z"
                    transform="translate(-4.498 -10.123)"
                    fill="#fff"
                    fill-rule="evenodd"
                  />
                  <path
                    id="Path_2744"
                    data-name="Path 2744"
                    d="M5.625,18A1.125,1.125,0,0,1,6.75,16.875H30.375a1.125,1.125,0,0,1,0,2.25H6.75A1.125,1.125,0,0,1,5.625,18Z"
                    transform="translate(-4.498 -10.123)"
                    fill="#fff"
                    fill-rule="evenodd"
                  />
                </svg> </span
            ></a>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ========= Start All Services ====== -->
          <div class="all__services slider-one owl-carousel owl-theme">

          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- ===== Start Serv One ======= -->
            <?php echo $__env->make('front.layouts.parts.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- ===== End Serv One ======= -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </div>
          <!-- ========= End All Services ====== -->
        </div>
        <!-- ======= End Container ====== -->
      </section>
      <!-- ====== End section services ===== -->
      <!-- ====== Start section cards Project ====== -->
      <section class="cards__Projects">
        <!-- ====== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="fade-down">
            <h1 class="title"><?php echo e(__('lang.we_are_here_to_help_you')); ?></h1>
            <p class="text"><?php echo e(__('lang.project_steps')); ?></p>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ======= Start all Cards Project R -===== -->
          <div class="all__Cards__Project">

           <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- ===== Start card Project One ===== -->
            <div class="card__Project__One" data-aos="fade-left">
              <div class="NumCard">
                <div><?php echo e($key + 1); ?></div>
              </div>
              <!-- ==== Start icon ==== -->
              <div class="icon">
                <img src="/uploads/images/<?php echo e($item->icon); ?>" />
              </div>
              <!-- ==== End icon ==== -->
              <!-- ==== Start info ==== -->
              <div class="info">
                <h1 class="title"><?php echo e($item['title_' . app()->getLocale()]); ?></h1>
                <p class="text"><?php echo e($item['description_' . app()->getLocale()]); ?></p>
              </div>
              <!-- ==== start info ==== -->
            </div>
            <!-- ===== End card Project One ===== -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          <!-- ======= end all Cards Project -===== -->
        </div>
        <!-- ====== end Container ===== -->
      </section>
      <!-- ====== End section cards Project ====== -->
      <!-- ====== Start Section customer ====== -->
      <div class="customer">
        <!-- ====== Start container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="fade-right">
            <h1 class="title"><?php echo e(__('lang.clients_feedback')); ?></h1>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ====== start All Customer R ===== -->
          <div
            class="all__Customer slider-Two owl-carousel owl-theme"
            data-aos="zoom-in"
          >
          <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- ===== Start Customer One ===== -->
            <div class="customerOne">
              <!-- ==== Start img Customer ===== -->
              <div class="img__Customer">
                <img src="<?php echo e(url('/')); ?>/storage/images/<?php echo e($item->image); ?>" alt="imgCustomer" />
                <!-- Start Button Anim -->
                <div class="buttonAnim" data-src="/storage/videos/<?php echo e($item->source); ?>">
                  <a href="#!"><i class="fa-solid fa-play"></i></a>
                </div>
                <!-- End Button Anim -->
              </div>
              <!-- ==== End img Customer ===== -->
            </div>
            <!-- ===== End Customer One ===== -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          <!-- ====== End All Customer ===== -->
        </div>
        <!-- ====== End container ===== -->
      </div>
      <!-- ====== End Section customer ====== -->
      <!-- ====== Start Section Apps ===== -->
      <section class="Apps">
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title R ===== -->
          <div class="section__title" data-aos="fade-up">
            <p class="text text_UP"><?php echo e(__('lang.we_can_also_develope')); ?></p>
            <h1 class="title"><?php echo e(__('lang.mobile_applications')); ?></h1>
            <p class="text">
              <?php echo e(__('lang.tell_us_your_app_idea')); ?>

            </p>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ====== Start All Apps ======== -->

          <div class="all__Apps">
            <!-- ==== Start main App ==== -->
            <div class="main__App">
              <!-- ==== Start app One -===== -->
              <div class="app__One appRight" data-aos="fade-right">
                <!-- ===Start img Arrow === -->
                <div class="imgArrow">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="177.544"
                    height="64.795"
                    viewBox="0 0 177.544 64.795"
                  >
                    <g
                      id="Group_14195"
                      data-name="Group 14195"
                      transform="translate(-874 -3821.539)"
                    >
                      <path
                        id="Path_2759"
                        data-name="Path 2759"
                        d="M1544,10930.789h177.294v64.545"
                        transform="translate(-670 -7109)"
                        fill="none"
                        stroke="#8dd9fa"
                        stroke-width="0.5"
                      />
                    </g>
                  </svg>
                </div>
                <!-- ==== End img Arrow === -->
                <div class="contentApp">
                  <!-- === Start icon App === -->
                  <div class="iconApp">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="27.787"
                      height="25.009"
                      viewBox="0 0 27.787 25.009"
                    >
                      <g id="bx-code-block" transform="translate(-3 -4.5)">
                        <path
                          id="Path_2760"
                          data-name="Path 2760"
                          d="M28.009,4.5H5.779A2.781,2.781,0,0,0,3,7.279V26.73a2.781,2.781,0,0,0,2.779,2.779h22.23a2.781,2.781,0,0,0,2.779-2.779V7.279A2.781,2.781,0,0,0,28.009,4.5ZM5.779,26.73V10.057h22.23l0,16.672Z"
                          transform="translate(0 0)"
                          fill="#3fb3e6"
                        />
                        <path
                          id="Path_2761"
                          data-name="Path 2761"
                          d="M13.529,13.939,8.379,19.09l5.15,5.15,1.965-1.965L12.308,19.09,15.494,15.9Zm7.522,0L19.086,15.9l3.186,3.186-3.186,3.186,1.965,1.965L26.2,19.09Z"
                          transform="translate(-0.397 -0.696)"
                          fill="#3fb3e6"
                        />
                      </g>
                    </svg>
                  </div>
                  <!-- === End icon App r === -->
                  <!-- === Start info App r ==== -->
                  <div class="info__App">
                    <h1 class="title"><?php echo e(__('lang.powerful_code')); ?></h1>
                    <p class="text">
                    <?php echo e(__('lang.code_desc')); ?>

                    </p>
                  </div>
                  <!-- ==== End Info App ==== -->
                </div>
              </div>
              <!-- ==== End app One -===== -->
              <!-- ==== Start app One -===== -->
              <div class="app__One appRight" data-aos="fade-right">
                <!-- ===Start img Arrow === -->
                <div class="imgArrow">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="177.544"
                    height="64.795"
                    viewBox="0 0 177.544 64.795"
                  >
                    <g
                      id="Group_14195"
                      data-name="Group 14195"
                      transform="translate(-874 -3821.539)"
                    >
                      <path
                        id="Path_2759"
                        data-name="Path 2759"
                        d="M1544,10930.789h177.294v64.545"
                        transform="translate(-670 -7109)"
                        fill="none"
                        stroke="#8dd9fa"
                        stroke-width="0.5"
                      />
                    </g>
                  </svg>
                </div>
                <!-- ==== End img Arrow === -->
                <div class="contentApp">
                  <!-- === Start icon App === -->
                  <div class="iconApp">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="25.807"
                      height="25.79"
                      viewBox="0 0 25.807 25.79"
                    >
                      <g
                        id="rocket-outline"
                        transform="translate(-2.248 -2.247)"
                      >
                        <path
                          id="Path_2757"
                          data-name="Path 2757"
                          d="M26.792,3.707a.249.249,0,0,0-.187-.192C23.528,2.763,16.42,5.444,12.564,9.3a16.688,16.688,0,0,0-1.873,2.212,6.962,6.962,0,0,0-3.388.424c-2.857,1.256-3.688,4.538-3.92,5.946a.509.509,0,0,0,.555.588l4.587-.5A10.2,10.2,0,0,0,8.586,19a1.027,1.027,0,0,0,.3.628L10.663,21.4a1.027,1.027,0,0,0,.628.3,10.18,10.18,0,0,0,1.029.062l-.5,4.583a.509.509,0,0,0,.588.554c1.409-.226,4.7-1.058,5.946-3.915a7,7,0,0,0,.43-3.378A16.632,16.632,0,0,0,21,17.737c3.87-3.848,6.534-10.8,5.793-14.031ZM17.56,12.753a2.414,2.414,0,1,1,1.708.708A2.416,2.416,0,0,1,17.56,12.753Z"
                          transform="translate(0)"
                          fill="none"
                          stroke="#3fb3e6"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2.25"
                        />
                        <path
                          id="Path_2758"
                          data-name="Path 2758"
                          d="M7.083,24.75a2.55,2.55,0,0,0-1.491.727c-1,1-1.091,4.706-1.091,4.706s3.708-.094,4.7-1.093A2.531,2.531,0,0,0,9.933,27.6"
                          transform="translate(-0.219 -4.169)"
                          fill="none"
                          stroke="#3fb3e6"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2.25"
                        />
                      </g>
                    </svg>
                  </div>
                  <!-- === End icon App === -->
                  <!-- === Start info App ==== -->
                  <div class="info__App">
                    <h1 class="title"><?php echo e(__('lang.easy_publish')); ?></h1>
                    <p class="text">
                     <?php echo e(__('lang.publish_desc')); ?>

                    </p>
                  </div>
                  <!-- ==== End Info App r ==== -->
                </div>
              </div>
              <!-- ==== End app One -===== -->
            </div>
            <!-- ==== End main App ==== -->
            <!-- ===== Start Mobile Img ==== -->
            <div class="imgMobile">
              <div class="mobile-width" data-aos="zoom-in-up">
                <div class="mobile__screen">
                  <div class="mobile__screen">
                    <div class="screen">
                      <div class="slider owl-carousel">
                        <div class="slider__item">
                          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/07.png" alt="image" />
                        </div>
                        <div class="slider__item">
                          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/07.png" alt="image" />
                        </div>
                        <div class="slider__item">
                          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/07.png" alt="image" />
                        </div>
                        <div class="slider__item">
                          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/07.png" alt="image" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ===== End Mobile Img ==== -->

            <!-- ==== Start main App ==== -->
            <div class="main__App">
              <!-- ==== Start app One -===== -->
              <div class="app__One appLeft" data-aos="fade-left">
                <!-- ===Start img Arrow r=== -->
                <div class="imgArrow">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="177.544"
                    height="64.795"
                    viewBox="0 0 177.544 64.795"
                  >
                    <path
                      id="Path_2759"
                      data-name="Path 2759"
                      d="M1721.294,10930.789H1544v64.545"
                      transform="translate(-1543.75 -10930.539)"
                      fill="none"
                      stroke="#8dd9fa"
                      stroke-width="0.5"
                    />
                  </svg>
                </div>
                <!-- ==== End img Arrow === -->
                <div class="contentApp">
                  <!-- === Start icon App === -->
                  <div class="iconApp">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="29.813"
                      height="27.825"
                      viewBox="0 0 29.813 27.825"
                    >
                      <g id="ui-radios" transform="translate(0 -2.25)">
                        <path
                          id="Path_2762"
                          data-name="Path 2762"
                          d="M13.913,5.494a.994.994,0,0,1,.994-.994H28.819a.994.994,0,0,1,.994.994V7.481a.994.994,0,0,1-.994.994H14.906a.994.994,0,0,1-.994-.994ZM0,24.375a5.963,5.963,0,1,1,5.963,5.963A5.963,5.963,0,0,1,0,24.375Zm13.913-2.981a.994.994,0,0,1,.994-.994H28.819a.994.994,0,0,1,.994.994v1.988a.994.994,0,0,1-.994.994H14.906a.994.994,0,0,1-.994-.994Z"
                          transform="translate(0 -0.262)"
                          fill="#3fb3e6"
                        />
                        <path
                          id="Path_2763"
                          data-name="Path 2763"
                          d="M13.913,11.194a.994.994,0,0,1,.994-.994h9.938a.994.994,0,1,1,0,1.988H14.906A.994.994,0,0,1,13.913,11.194Zm0,15.9a.994.994,0,0,1,.994-.994h9.938a.994.994,0,0,1,0,1.988H14.906A.994.994,0,0,1,13.913,27.094ZM5.963,2.25a5.963,5.963,0,1,0,5.963,5.963A5.963,5.963,0,0,0,5.963,2.25Zm0,8.944A2.981,2.981,0,1,0,2.981,8.213,2.981,2.981,0,0,0,5.963,11.194Z"
                          transform="translate(0)"
                          fill="#3fb3e6"
                          fill-rule="evenodd"
                        />
                      </g>
                    </svg>
                  </div>
                  <!-- === End icon App === -->
                  <!-- === Start info App ==== -->
                  <div class="info__App">
                    <h1 class="title"><?php echo e(__('lang.ui_design')); ?></h1>
                    <p class="text">
                     <?php echo e(__('lang.design_desc')); ?>

                    </p>
                  </div>
                  <!-- ==== End Info App ==== -->
                </div>
              </div>
              <!-- ==== End app One -===== -->
              <!-- ==== Start app One -===== -->
              <div class="app__One appLeft" data-aos="fade-left">
                <!-- ===Start img Arrow r=== -->
                <div class="imgArrow">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="177.544"
                    height="64.795"
                    viewBox="0 0 177.544 64.795"
                  >
                    <path
                      id="Path_2759"
                      data-name="Path 2759"
                      d="M1721.294,10930.789H1544v64.545"
                      transform="translate(-1543.75 -10930.539)"
                      fill="none"
                      stroke="#8dd9fa"
                      stroke-width="0.5"
                    />
                  </svg>
                </div>
                <!-- ==== End img Arrow === -->
                <div class="contentApp">
                  <!-- === Start icon App === -->
                  <div class="iconApp">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="26.797"
                      height="26.797"
                      viewBox="0 0 26.797 26.797"
                    >
                      <path
                        id="materialdesignicons"
                        d="M0,0H8.039V2.68H18.758V0H26.8V8.039h-2.68V18.758H26.8V26.8H18.758v-2.68H8.039V26.8H0V18.758H2.68V8.039H0V0M18.758,8.039V5.359H8.039v2.68H5.359V18.758h2.68v2.68H18.758v-2.68h2.68V8.039h-2.68M2.68,2.68v2.68h2.68V2.68H2.68m18.758,0v2.68h2.68V2.68h-2.68M2.68,21.438v2.68h2.68v-2.68H2.68m18.758,0v2.68h2.68v-2.68Z"
                        fill="#3fb3e6"
                      />
                    </svg>
                  </div>
                  <!-- === End icon App === -->
                  <!-- === Start info App ==== -->
                  <div class="info__App">
                    <h1 class="title"><?php echo e(__('lang.customization')); ?></h1>
                    <p class="text"><?php echo e(__('lang.customization_desc')); ?></p>
                  </div>
                  <!-- ==== End Info App ==== -->
                </div>
              </div>
              <!-- ==== End app One -===== -->
            </div>
            <!-- ==== End main App ==== -->
          </div>
          <!-- ====== End All Apps ======== -->
        </div>
        <!-- ===== End Container ===== -->
      </section>
      <!-- ====== End Section Apps ===== -->
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
          <div class="buttonMorePortfolio" data-aos="fade-up">
            <button class="btn btnMore">
              <a href="<?php echo e(url('/' . app()->getLocale())); ?>/projects"><?php echo e(__('lang.explore_more')); ?></a>
            </button>
          </div>
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End section Portfolie Projects ===== -->

      <!-- ======= Start Products ===== -->
      <div class="portfolio__Projects products-grid" id="Partner">
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title">
            <div class="main_title" data-aos="fade-left">
              <h1 class="title"><?php echo e(__('lang.explore_our_products')); ?></h1>
              <p class="text"><?php echo e(__('lang.our_products')); ?></p>
            </div>
          </div>
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
          <div class="buttonMorePortfolio" data-aos="fade-up">
            <button class="btn btnMore">
              <a href="<?php echo e(url('/' . app()->getLocale())); ?>/products"><?php echo e(__('lang.explore_more')); ?></a>
            </button>
          </div>
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End section Portfolie Projects ===== -->

      <!-- ======== Start section testimonials ========= -->
      <div class="testimonials">
        <!-- ========= Start Container ====== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="fade-right">
            <p class="text text_UP"><?php echo e(__('lang.partners_of_success')); ?></p>
            <h1 class="title"><?php echo e(__('lang.people_trusted_us')); ?></h1>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ====== Start All testimonials ====== -->
          <div
            class="all__testimonials owl-carousel"
            id="customers-testimonials"
          >
          <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- ===== Start testimonial One ===== -->
            <div class="testimonial__One">
              <!-- === start Icon Image ===== -->
              <div class="icon__Image">
                <img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($item->image); ?>" alt="imgTest" />
              </div>
              <!-- ==== End Icon Image ===== -->
              <!-- ==== Start info testimonial  R===== -->
              <div class="info__testimonial">
                <h1 class="title"><?php echo e($item['name_' . app()->getLocale()]); ?></h1>
                <p class="text">
                  <?php echo e($item['description_' . app()->getLocale()]); ?>

                </p>
              </div>
              <!-- ==== End info testimonial ===== -->
              <!-- ==== Start bottom Info ==== -->
              <div class="bottom__Info">
                <a href="<?php echo e($item->link); ?>" class="LinkTest"
                  ><?php echo e(__('lang.visit_website')); ?>

                  <span class="arrow">
                    <svg
                      id="arrow-left"
                      xmlns="http://www.w3.org/2000/svg"
                      width="25.162"
                      height="14.68"
                      viewBox="0 0 25.162 14.68"
                    >
                      <path
                        id="Path_2743"
                        data-name="Path 2743"
                        d="M12.58,10.431a1.048,1.048,0,0,1,0,1.484L7.031,17.463l5.55,5.548A1.05,1.05,0,0,1,11.1,24.5l-6.29-6.29a1.048,1.048,0,0,1,0-1.484l6.29-6.29a1.048,1.048,0,0,1,1.484,0Z"
                        transform="translate(-4.498 -10.123)"
                        fill-rule="evenodd"
                      />
                      <path
                        id="Path_2744"
                        data-name="Path 2744"
                        d="M5.625,17.923a1.048,1.048,0,0,1,1.048-1.048H28.689a1.048,1.048,0,1,1,0,2.1H6.673A1.048,1.048,0,0,1,5.625,17.923Z"
                        transform="translate(-4.575 -10.583)"
                        fill-rule="evenodd"
                      />
                    </svg> </span
                ></a>
                <h2 class="title"><?php echo e($item['location_' . app()->getLocale()]); ?></h2>
              </div>
              <!-- ==== End bottom Info ==== -->
            </div>
            <!-- ===== End testimonial One ===== -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          <!-- ====== End All testimonials ====== -->
        </div>
        <!-- ========= End Container ====== -->
      </div>
      <!-- ======== End Section testimonials ======== -->
      <!-- ========= Start Section Contact US ========== -->
      <div class="contact" id="contact">
        <!-- ===== Start container ===== -->
        <div class="container">
          <!-- ====== Start All Contact ===== -->
          <div class="all__Contact">
            <!-- ======= Start right contact ======= -->
            <div class="right__Contact" data-aos="fade-left">
              <!-- ===== Start content ===== -->
              <div class="content">
                <h1 class="title"><?php echo e(__('lang.contact_us')); ?></h1>
                <p class="text">
                  <?php echo e(__('lang.contact_desc')); ?>

                </p>
              </div>
              <!-- ==== End Content ====== -->
              <!-- ==== Start call us ===== -->
              <div class="call__Us">
                <!-- ==== Start Cont One ===== -->
                <div class="cont__One">
                  <!-- ==== Start icon -->
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="39"
                      height="38"
                      viewBox="0 0 39 38"
                    >
                      <ellipse
                        id="Ellipse_103"
                        data-name="Ellipse 103"
                        cx="19.5"
                        cy="19"
                        rx="19.5"
                        ry="19"
                        fill="#8dd9fa"
                        opacity="0.31"
                      />
                      <path
                        id="location-sharp"
                        d="M13.713,2.25C9.869,2.25,6.75,5.058,6.75,8.517c0,5.571,6.963,13.23,6.963,13.23s6.963-7.659,6.963-13.23C20.676,5.058,17.557,2.25,13.713,2.25Zm0,9.748A2.785,2.785,0,1,1,16.5,9.213,2.785,2.785,0,0,1,13.713,12Z"
                        transform="translate(5.787 7.001)"
                        fill="#3fb3e6"
                      />
                    </svg>
                  </div>
                  <!-- === End icon ==== -->
                  <a href="#!" class="linkIconText">
                    <?php echo e($settings->where('key','address_' . app()->getLocale())->first()->value); ?>

                  </a>
                </div>
                <!-- ==== End Cont One ===== -->
                <!-- ==== Start Cont One ===== -->
                <div class="cont__One">
                  <!-- ==== Start icon -->
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="39"
                      height="38"
                      viewBox="0 0 39 38"
                    >
                      <ellipse
                        id="Ellipse_104"
                        data-name="Ellipse 104"
                        cx="19.5"
                        cy="19"
                        rx="19.5"
                        ry="19"
                        fill="#8dd9fa"
                        opacity="0.31"
                      />
                      <path
                        id="email"
                        d="M17.374,1.75A1.931,1.931,0,0,1,19.32,3.7V15.278a1.932,1.932,0,0,1-1.945,1.946H1.945a1.878,1.878,0,0,1-1.38-.566A1.875,1.875,0,0,1,0,15.279V3.7a1.878,1.878,0,0,1,.566-1.38,1.875,1.875,0,0,1,1.38-.565Zm0,3.891V3.7L9.637,8.537,1.945,3.7V5.641l7.692,4.8Z"
                        transform="translate(9.84 9.514)"
                        fill="#3fb3e6"
                      />
                    </svg>
                  </div>
                  <!-- === End icon R ==== -->
                  <a href="mailto:<?php echo e($settings->where('key','contact_email')->first()->value); ?>" class="linkIconText" id="emailAdd">
                  <?php echo e($settings->where('key','contact_email')->first()->value); ?>

                  </a>
                </div>
                <!-- ==== End Cont One ===== -->
                <!-- ==== Start Cont One ===== -->
                <div class="cont__One">
                  <!-- ==== Start icon -->
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="39"
                      height="38"
                      viewBox="0 0 39 38"
                    >
                      <ellipse
                        id="Ellipse_105"
                        data-name="Ellipse 105"
                        cx="19.5"
                        cy="19"
                        rx="19.5"
                        ry="19"
                        fill="#8dd9fa"
                        opacity="0.31"
                      />
                      <path
                        id="phone"
                        d="M5.55,10.654l-.025-.071A18.283,18.283,0,0,1,4.5,5.526,1.029,1.029,0,0,1,5.526,4.5H8.6a2.051,2.051,0,0,1,2.051,2.051V8.6A2.051,2.051,0,0,1,8.6,10.654H7.744a16.467,16.467,0,0,0,9.065,9.064V18.86a2.051,2.051,0,0,1,2.051-2.051h2.051a2.051,2.051,0,0,1,2.051,2.051v3.077a1.2,1.2,0,0,1-1.026,1.026,15.818,15.818,0,0,1-5.129-1.026A18.619,18.619,0,0,1,5.55,10.654Z"
                        transform="translate(5.769 5.27)"
                        fill="#3fb3e6"
                        fill-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <!-- === End icon ==== -->
                  <a href="tel:<?php echo e($settings->where('key','contact_phone')->first()->value); ?>" class="linkIconText" id="numberContact">
                  <?php echo e($settings->where('key','contact_phone')->first()->value); ?>

                  </a>
                </div>
                <!-- ==== End Cont One ===== -->
                <!-- ==== Start Cont One ===== -->
                <div class="cont__One">
                  <!-- ==== Start icon -->
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="39"
                      height="38"
                      viewBox="0 0 39 38"
                    >
                      <ellipse
                        id="Ellipse_106"
                        data-name="Ellipse 106"
                        cx="19.5"
                        cy="19"
                        rx="19.5"
                        ry="19"
                        fill="#8dd9fa"
                        opacity="0.31"
                      />
                      <path
                        id="md-list-box"
                        d="M21.521,4.5H6.48A1.98,1.98,0,0,0,4.5,6.48V21.521A1.98,1.98,0,0,0,6.48,23.5H21.521a1.98,1.98,0,0,0,1.98-1.98V6.48A1.98,1.98,0,0,0,21.521,4.5ZM16.375,19.542H8.458V17.167h7.917Zm3.167-4.355H8.458V12.812H19.542Zm0-4.355H8.458V8.458H19.542Z"
                        transform="translate(5.5 4.5)"
                        fill="#3fb3e6"
                      />
                    </svg>
                  </div>
                  <!-- === End icon ==== -->
                  <a href="#!" class="linkIconText" id="addressContact">
                  <?php echo e($settings->where('key','record_number')->first()->value); ?>

                  </a>
                </div>
                <!-- ==== End Cont One ===== -->
              </div>
              <!-- ==== End call us ===== -->
            </div>
            <!-- ======= End right contact ======= -->
            <!-- ===== Start form Contact ====== -->
            <div class="form__Contact" data-aos="fade-right">
              <form class="my-form">
                <ul>
                  <li>
                    <div class="grid">
                      <input type="text" name="name" placeholder="<?php echo e(__('lang.name')); ?>" required />
                      <input type="text" name="company_name" placeholder="<?php echo e(__('lang.company')); ?>" required />
                    </div>
                  </li>
                  <li>
                    <div class="grid">
                      <input
                        type="email"
                        name="email"
                        placeholder="<?php echo e(__('lang.email')); ?>"
                        required
                      />
                      <input type="text" name="company_location" placeholder="<?php echo e(__('lang.company_location')); ?>" />
                    </div>
                  </li>
                  <li>
                    <div class="grid">
                      <input
                        type="tel"
                        name="phone"
                        placeholder="<?php echo e(__('lang.phone_with_code')); ?>"
                        required
                      />
                      <input
                        type="tel"
                        name="phone_whatsapp"
                        placeholder="<?php echo e(__('lang.whatsapp')); ?>"
                      />
                    </div>
                  </li>
                  <li>
                    <input name="subject" type="text" placeholder="<?php echo e(__('lang.subject')); ?>" required />
                  </li>
                  <li>
                    <textarea name="message" placeholder="<?php echo e(__('lang.message')); ?>"></textarea>
                  </li>

                  <li class="message-sent" style="display:none">
                    <p style="    background: green;
    color: white;
    padding: 15px 15px;
    border-radius: 4px;
    width: 100%;
    font-size: 12pt;"><?php echo e(__('lang.message_sent')); ?></p>
                  </li>
                  <li>
                    <button class="btn" type="submit"><?php echo e(__('lang.send')); ?></button>
                  </li>
                </ul>
              </form>
            </div>
            <!-- ===== End Form Contact ====== -->
          </div>
          <!-- ====== End All Contact ===== -->
        </div>
        <!-- ===== End container ===== -->
      </div>
      <!-- ========= End Section Contact US ========== -->
      <!-- ======= Start Section technology R ========= -->
      <div class="technology">
        <!-- ===== Start Container ===== -->
        <div class="container">
          <!-- ====== Start section title ===== -->
          <div class="section__title" data-aos="fade-down">
            <h1 class="title"><?php echo e(__('lang.our_tech')); ?></h1>
          </div>
          <!-- ====== End section title ===== -->
          <!-- ===== Start all Technology =====  -->
          <div class="all__Technology" data-aos="fade-right">

          <?php $__currentLoopData = $techs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- ===== Start technology one ===== -->
            <?php echo $__env->make('front.layouts.parts.tech', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- ===== End technology one ===== -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- ===== Start technology one ===== -->
            <div class="technologyOne">
              <a href="<?php echo e(url('/' . app()->getLocale())); ?>/techs" class="linkMore"
                ><?php echo e(__('lang.more')); ?>

                <span class="arrow"><i class="fa-solid fa-arrow-left"></i></span
              ></a>
            </div>
            <!-- ===== End technology one ===== -->

          </div>
          <!-- ===== End all Technology =====  -->
        </div>
        <!-- ===== End Container ===== -->
      </div>
      <!-- ======= End Section technology ========= -->
    </main>
    <!-- ======== End main ======= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/index.blade.php ENDPATH**/ ?>