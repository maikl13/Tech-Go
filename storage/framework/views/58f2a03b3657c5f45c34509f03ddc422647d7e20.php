<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      name="viewport"
      content="
    initial-scale =1, user-scalable = no"
    />
    <title><?php echo e($global_about['website_title_' . app()->getLocale()]); ?></title>
    <!-- #keywords -->
    <meta
      name="keywords"
      content="html, css, mobile, web, ui, ux, figma, xd, desktop, portfolio, ecommerce"
    />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- #description -->
    <meta name="description" content="Web Design And Devlopment" />
    <!-- #author -->
    <meta name="author" content="Tech-GO Website" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.css" />

    <!-- File aos -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/library/aos.css" />
    <!-- File Owl -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/library/owl.carousel.min.css" />
    <!-- File fonts -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/fonts/font/all.min.css" />
    <!-- File light Gallery -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"
    />
    <!-- File magnific Gallery -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <!-- File Css -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/custom.css" />
    <?php if(app()->getLocale() == "en"): ?>
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/ltr.css" />
    <?php endif; ?>
    <?php if(\Cookie::get('dark_theme')): ?>
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/dark.css" />
    <?php endif; ?>
  </head>
  <body>
    <!-- start laoder -->
    <div class="loader hidden">
      <div class="spinner"></div>
    </div>
    <!-- End laoder -->
    <!-- Start Button Scroll -->
    <div class="btnScroll">
      <i class="fa-solid fa-long-arrow-up"></i>
    </div>
    <!-- End Button Scroll -->
    <!-- ========= Start Whatsapp Contact====== -->
    <div class="whatsappContact">
      <!-- Start Button Anim -->
      <div class="buttonAnim">
        <a href="https://wa.me/+971501927944">
          <img src="<?php echo e(url('/')); ?>/front/assets/images/shape/whatsapp01.png" alt="whatsapp" />
        </a>
      </div>
      <!-- End Button Anim -->
    </div>
    <!-- ======= End Whatsapp Contact ====== -->

    <!-- ==== Start OverLay Vedio ==== -->
    <div class="overlay__Video">
      <div class="close">
        <i class="fa-solid fa-close"></i>
      </div>
      <div class="video">
        <video id="video-source"
          src=""
          muted
          loop
          autoplay
          controls
        ></video>
      </div>
    </div>
    <!-- ==== End OverLay Vedio ==== -->
    <?php $__env->startSection('header'); ?>
    <?php echo $__env->yieldSection(); ?>
    
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>

    <!-- ======= start Footer ============== -->
    <footer>
      <!-- ====== Start section Footer ====== -->
      <div class="footer">
        <!-- ======= Start Container ====== -->
        <div class="container">
          <!-- ====== start all Footer ====== -->
          <div class="all__footer">
            <!-- ===== start footer Logo ==== -->
            <div class="footer_Logo" data-aos="fade-left">
              <img src="<?php echo e(url('/')); ?>/storage/images/<?php echo e($global_about->about_logo); ?>" alt="image" />
            </div>
            <!-- ====== End Footer Logo ===== -->
            <!-- ====== Start Footer One ===== -->
            <div class="footerOne" data-aos="fade-right">
              <div class="titleFooter"><?php echo e(__('lang.useful_links')); ?></div>
              <ul class="linksFooter">
                <li class="link__Footer">
                  <a href="<?php echo e(url('/' . app()->getLocale())); ?>" class="link__Item"><?php echo e(__('lang.home')); ?></a>
                </li>
                <li class="link__Footer">
                  <a href="<?php echo e(url('/' . app()->getLocale())); ?>#About" class="link__Item"><?php echo e(__('lang.about_us')); ?></a>
                </li>
                <li class="link__Footer">
                  <a href="<?php echo e(url('/' . app()->getLocale())); ?>#contact" class="link__Item"><?php echo e(__('lang.contact_us')); ?></a>
                </li>
                <li class="link__Footer">
                  <a href="<?php echo e(url('/' . app()->getLocale())); ?>/team" class="link__Item"><?php echo e(__('lang.team')); ?></a>
                </li>
              </ul>
            </div>
            <!-- ====== End Footer One ===== -->
            <!-- ====== Start Footer One ===== -->
            <div class="footerOne" data-aos="fade-left">
              <div class="titleFooter"><?php echo e(__('lang.contact_us')); ?></div>
              <ul class="linksFooter">
                <li class="link__Footer">
                  <a href="tel:<?php echo e($settings->where('key','contact_phone')->first()->value); ?>" class="link__Item">
                    <svg
                      id="phone-call"
                      xmlns="http://www.w3.org/2000/svg"
                      width="14"
                      height="14"
                      viewBox="0 0 14 14"
                    >
                      <path
                        id="Path_1"
                        data-name="Path 1"
                        d="M14,11.282a2.071,2.071,0,0,0-.635-1.423A5.086,5.086,0,0,0,11.35,8.521a2.254,2.254,0,0,0-2.314.657l0,0-.739.734a11.08,11.08,0,0,1-2.331-1.8L5.89,8.04a11.081,11.081,0,0,1-1.8-2.331l.734-.739,0,0A2.254,2.254,0,0,0,5.48,2.652,5.087,5.087,0,0,0,4.142.638a2.081,2.081,0,0,0-2.888-.1L1.239.548l-.021.02A4.437,4.437,0,0,0,0,3.818,10.385,10.385,0,0,0,3.306,10.7a13.329,13.329,0,0,0,1.311,1.142.547.547,0,0,0,.665-.868,12.246,12.246,0,0,1-1.2-1.047,9.288,9.288,0,0,1-2.985-6.11,3.379,3.379,0,0,1,.887-2.461l0,0a.984.984,0,0,1,1.37.049c1.416,1.468,1.313,2.162.688,2.8L3.029,5.222a.547.547,0,0,0-.111.608,11.051,11.051,0,0,0,2.2,2.984l.072.072a11.049,11.049,0,0,0,2.984,2.2.547.547,0,0,0,.608-.111L9.8,9.959c.642-.626,1.335-.728,2.8.688a.984.984,0,0,1,.05,1.37l0,0a3.368,3.368,0,0,1-2.436.887h-.025a7.091,7.091,0,0,1-2.7-.639.547.547,0,0,0-.433,1A8.068,8.068,0,0,0,10.183,14h.031a4.427,4.427,0,0,0,3.219-1.217l.02-.021.014-.016A2.071,2.071,0,0,0,14,11.282Z"
                        transform="translate(0 -0.002)"
                        fill="#fff"
                      />
                    </svg>
                    <?php echo e($settings->where('key','contact_phone')->first()->value); ?>

                  </a>
                </li>
                <li class="link__Footer">
                  <a href="mailto:<?php echo e($settings->where('key','contact_email')->first()->value); ?>" class="link__Item">
                    <svg
                      id="email"
                      xmlns="http://www.w3.org/2000/svg"
                      width="14"
                      height="10.691"
                      viewBox="0 0 14 10.691"
                    >
                      <g id="Group_2" data-name="Group 2">
                        <path
                          id="Path_2"
                          data-name="Path 2"
                          d="M13.453,66.816A.547.547,0,0,0,14,66.27V62.687A2.19,2.19,0,0,0,11.813,60.5H2.188A2.19,2.19,0,0,0,0,62.687V69a2.19,2.19,0,0,0,2.188,2.188h9.625A2.19,2.19,0,0,0,14,69a.547.547,0,1,0-1.094,0A1.1,1.1,0,0,1,11.813,70.1H2.188A1.1,1.1,0,0,1,1.094,69V62.8l4.751,2.954a2.174,2.174,0,0,0,2.31,0L12.906,62.8V66.27A.547.547,0,0,0,13.453,66.816ZM7.578,64.829a1.087,1.087,0,0,1-1.155,0L1.55,61.8a1.088,1.088,0,0,1,.637-.205h9.625a1.088,1.088,0,0,1,.637.205Z"
                          transform="translate(0 -60.5)"
                          fill="#fff"
                        />
                      </g>
                    </svg>
                    <?php echo e($settings->where('key','contact_email')->first()->value); ?>

                  </a>
                </li>
                <li class="link__Footer">
                  <a href="#!" class="link__Item">
                    <svg
                      id="pin"
                      xmlns="http://www.w3.org/2000/svg"
                      width="11.211"
                      height="14"
                      viewBox="0 0 11.211 14"
                    >
                      <g
                        id="Group_4"
                        data-name="Group 4"
                        transform="translate(2.187 2.188)"
                      >
                        <g id="Group_3" data-name="Group 3">
                          <path
                            id="Path_3"
                            data-name="Path 3"
                            d="M134.418,80a3.418,3.418,0,1,0,.937,6.706.547.547,0,1,0-.3-1.052,2.321,2.321,0,1,1,1.589-1.567.547.547,0,1,0,1.048.314,3.42,3.42,0,0,0-3.274-4.4Z"
                            transform="translate(-131 -80)"
                            fill="#fff"
                          />
                        </g>
                      </g>
                      <g
                        id="Group_6"
                        data-name="Group 6"
                        transform="translate(0)"
                      >
                        <g id="Group_5" data-name="Group 5">
                          <path
                            id="Path_4"
                            data-name="Path 4"
                            d="M60.57,1.64A5.605,5.605,0,0,0,51,5.6a5.857,5.857,0,0,0,.925,3.126,16.648,16.648,0,0,0,1.978,2.454,18.667,18.667,0,0,1,2.076,2.565.547.547,0,0,0,.462.255h.328a.547.547,0,0,0,.462-.255,18.667,18.667,0,0,1,2.076-2.565,16.645,16.645,0,0,0,1.978-2.454A5.858,5.858,0,0,0,62.214,5.6,5.569,5.569,0,0,0,60.57,1.64Zm-2.067,8.8a22.54,22.54,0,0,0-1.895,2.271,22.536,22.536,0,0,0-1.895-2.271C53.311,8.906,52.1,7.579,52.1,5.6a4.512,4.512,0,0,1,9.023,0C61.118,7.579,59.906,8.906,58.5,10.443Z"
                            transform="translate(-51.003)"
                            fill="#fff"
                          />
                        </g>
                      </g>
                    </svg>
                    <?php echo e($settings->where('key','address_' . app()->getLocale())->first()->value); ?>

                  </a>
                </li>
              </ul>
            </div>

            <!-- ====== End Footer One ===== -->
            <!-- ====== Start Footer One ===== -->
            <div class="footerOne" data-aos="fade-right">
              <div class="titleFooter"><?php echo e(__('lang.newsletter_title')); ?></div>
              <form style="width: 100%;display: inherit;" class="newsletter" action="<?php echo e(url('/')); ?>/newsletter/submit">

              <div class="subscribe">
                <input type="email" name="email" required placeholder="<?php echo e(__('lang.email')); ?>" />
                <button class="btn btnSubmit" type="submit">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="54"
                    height="36"
                    viewBox="0 0 54 36"
                  >
                    <rect
                      id="Rectangle_26"
                      data-name="Rectangle 26"
                      width="54"
                      height="36"
                      rx="10"
                      fill="#8dd9fa"
                    />
                    <g id="send-mail" transform="translate(16 10.971)">
                      <path
                        id="send-mail-2"
                        data-name="send-mail"
                        d="M21.709,70.258a1.5,1.5,0,0,0-1.576-.567l-19,4.783a1.5,1.5,0,0,0-.406,2.741l4.018,2.411v5.288a.524.524,0,0,0,.846.413L9.36,82.393l3.1,1.857a1.5,1.5,0,0,0,2.049-.5l7.272-11.819A1.5,1.5,0,0,0,21.709,70.258ZM13.136,82.59,8.426,79.764,13.2,75.646a.181.181,0,0,0-.184-.307L5.741,78.154,2.206,76.032l17.708-4.458Z"
                        transform="translate(0 -69.645)"
                        fill="#fff"
                      />
                    </g>
                  </svg>
                </button>
              
              </div>
              
              <p class="newsletter-success"><?php echo e(__('lang.newsletter_success')); ?></p>
              </form>
              <!-- ===== Start Social icons ==== -->
              <ul class="socialIconsFooter">
                  <?php
                    $fb_link = $settings->where('key','contact_facebook')->first()->value;
                    $youtube_link = $settings->where('key','contact_youtube')->first()->value;
                    $twitter_link = $settings->where('key','contact_twitter')->first()->value;
                    $linked_link = $settings->where('key','contact_linkedin')->first()->value;
                  ?>
                <?php if($youtube_link): ?>
                <li class="icon__Social">
                  <a href="<?php echo e($youtube_link); ?>">
                    <svg
                      id="youtube"
                      xmlns="http://www.w3.org/2000/svg"
                      width="14.464"
                      height="9.944"
                      viewBox="0 0 14.464 9.944"
                    >
                      <g id="youtube-2" data-name="youtube" opacity="0.5">
                        <g id="Group_81" data-name="Group 81">
                          <path
                            id="Path_67"
                            data-name="Path 67"
                            d="M13.85,80.958c-.392-.7-.818-.826-1.685-.875S9.121,80,7.234,80s-4.069.024-4.934.082-1.292.177-1.688.876A8.532,8.532,0,0,0,0,84.969v.007a8.5,8.5,0,0,0,.612,4c.4.7.822.824,1.687.883s3.045.08,4.935.08,4.064-.03,4.931-.08,1.293-.185,1.685-.883a8.447,8.447,0,0,0,.614-4V84.97A8.465,8.465,0,0,0,13.85,80.958ZM5.424,87.684V82.26l4.52,2.712Z"
                            transform="translate(0 -80)"
                            fill="#fff"
                          />
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
                <?php endif; ?>
                <?php if($twitter_link): ?>
                <li class="icon__Social">
                  <a href="<?php echo e($twitter_link); ?>">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="14.464"
                      height="11.749"
                      viewBox="0 0 14.464 11.749"
                    >
                      <g id="twitter-logo-silhouette" opacity="0.5">
                        <g id="Group_83" data-name="Group 83">
                          <path
                            id="Path_71"
                            data-name="Path 71"
                            d="M14.465,58.831a5.925,5.925,0,0,1-1.7.467,2.98,2.98,0,0,0,1.3-1.64,5.982,5.982,0,0,1-1.885.72,2.97,2.97,0,0,0-5.056,2.705,8.424,8.424,0,0,1-6.115-3.1,2.971,2.971,0,0,0,.918,3.961,2.967,2.967,0,0,1-1.344-.372v.037a2.97,2.97,0,0,0,2.38,2.91,3.006,3.006,0,0,1-.782.1,2.848,2.848,0,0,1-.559-.055,2.969,2.969,0,0,0,2.771,2.061A5.953,5.953,0,0,1,.709,67.9,6.307,6.307,0,0,1,0,67.855,8.387,8.387,0,0,0,4.549,69.19a8.384,8.384,0,0,0,8.442-8.442l-.01-.384A5.925,5.925,0,0,0,14.465,58.831Z"
                            transform="translate(-0.001 -57.441)"
                            fill="#fff"
                          />
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
                <?php endif; ?>
                <?php if($fb_link): ?>
                <li class="icon__Social">
                  <a href="<?php echo e($fb_link); ?>">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="6.951"
                      height="12.857"
                      viewBox="0 0 6.951 12.857"
                    >
                      <g id="facebook-logo" opacity="0.5">
                        <path
                          id="Path_72"
                          data-name="Path 72"
                          d="M28.766,0,27.1,0a2.928,2.928,0,0,0-3.084,3.164V4.623H22.339a.262.262,0,0,0-.262.262V7a.262.262,0,0,0,.262.262h1.676V12.6a.262.262,0,0,0,.262.262h2.187a.262.262,0,0,0,.262-.262V7.261h1.96A.262.262,0,0,0,28.949,7V4.885a.262.262,0,0,0-.262-.262H26.727V3.386c0-.594.142-.9.916-.9h1.123a.262.262,0,0,0,.262-.262V.265A.262.262,0,0,0,28.766,0Z"
                          transform="translate(-22.077)"
                          fill="#fff"
                        />
                      </g>
                    </svg>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
              <!-- ===== End Social icons ==== -->
            </div>
            <!-- ====== End Footer One ===== -->
          </div>
          <!-- ====== End all Footer ====== -->
        </div>
        <!-- ======= End Container ====== -->
        <!-- ==== Start final footer R ===== -->
        <div class="final__footer">
          <!-- ====== Start container ====== -->
          <div class="container">
            <!-- ====== Start final Footer ======= -->
            <div class="all__final__footer">
              <a href="#!" class="linkTitle">
                <?php echo e(__('lang.all_rights_reserved')); ?> <span>techgo-groub@</span> 2023
              </a>
              <ul class="finalSocial">
                <?php if($fb_link): ?>
                <li class="finalIconSocial">
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
                        transform="translate(0 8.129) rotate(-90)"
                        fill="#2864cb"
                      />
                    </svg>
                    <?php echo e(__('lang.facebook')); ?>

                  </a>
                </li>
                <?php endif; ?>

                <?php if($youtube_link): ?>
                <li class="finalIconSocial">
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
                        fill="red"
                        fill-rule="evenodd"
                      />
                    </svg>
                    <?php echo e(__('lang.youtube')); ?>

                  </a>
                </li>
                <?php endif; ?>

                <?php if($twitter_link): ?>
                <li class="finalIconSocial">
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
                        fill="#00b1ff"
                      />
                    </svg>
                    <?php echo e(__('lang.twitter')); ?>

                  </a>
                </li>
                <?php endif; ?>

                <?php if($linked_link): ?>
                <li class="finalIconSocial">
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
                        fill="#3fb3e6"
                      />
                    </svg>
                    <?php echo e(__('lang.linkedin')); ?>

                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </div>
            <!-- ======End Final Footer R ======= -->
          </div>
          <!-- ====== End Container ===== -->
        </div>
        <!-- ===== End Final Footer ==== -->
      </div>
      <!-- ====== End section Footer ====== -->
    </footer>
    <!-- ======= End Footer ============== -->
    <!-- File AOS -->
    <script src="<?php echo e(url('/')); ?>/front/assets/js/library/aos.js"></script>
    <!-- File counter -->
    <script src="<?php echo e(url('/')); ?>/front/assets/js/library/purecounter_vanilla.js"></script>
    <!-- File jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- File typed Js -->
    <script src="<?php echo e(url('/')); ?>/front/assets/js/library/typed.min.js"></script>
    <!-- File mixitup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- File Owl -->
    <script src="<?php echo e(url('/')); ?>/front/assets/js/library/owl.carousel.min.js"></script>
    <!-- File light Gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- File magnific Gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- file Js -->
    <script src="<?php echo e(url('/')); ?>/front/assets/js/app.js"></script>
    <script>
      app(); // Function mixitup && magnific Popup
    </script>
  </body>
</html>    <?php /**PATH C:\laragon\www\newtechgo\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>