<!DOCTYPE html>

<html lang="en" dir="rtl">

  <head>

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta name="viewport" content="initial-scale =1, user-scalable = no"/>

    <title>
      <?php
        $route_name   = \Request::route()->getName();
        $display_name = $global_about['website_title_' . app()->getLocale()];
        $display_image = "https://tech-go.net/share-image.png";
        if($route_name != "home") {
          if($route_name != "projects_details" && $route_name != "blog_details" && $route_name != "products_details") {
            $display_name = __('lang.' . $route_name);
          }else {
            if($route_name == "blog_details") {
              $display_name = $p['title_' . app()->getLocale()];
            }else {
              $display_name = $item['title_' . app()->getLocale()];
              $display_image =  'https://tech-go.net/uploads/images/'. $item['image'];
            }
          }
        }
      ?>
      <?php echo e($display_name); ?>


    </title>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2JVPS90X9K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2JVPS90X9K');
</script>


    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

 
      <?php
        $route_name   = \Request::route()->getName();
    $bootstrap = "";
    if ($route_name != "home") {
        $bootstrap = '<link rel="stylesheet" href="https://tech-go.net/css/bootstrap-grid.css" />';
    }
      ?>
      <?php echo $bootstrap; ?>

      
      

  

    <link rel="icon" href="<?php echo e(url('/')); ?>/front/assets/images/fav.png"  />
    <!-- File aos -->

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/library/aos.css" />

    <!-- File Owl -->

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/library/owl.carousel.min.css" />

    <!-- File fonts -->

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/fonts/font/all.min.css" />

    <!-- File light Gallery  -->

  <link

      rel="stylesheet"

      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"

    />

    <!-- File magnific Gallery  -->
    
    
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

    <?php if(app()->getLocale() == "en" || app()->getLocale() == "fr"): ?>

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/ltr.css" />

    <?php endif; ?>

    <?php if(\Cookie::get('dark_theme')): ?>

    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/assets/css/dark.css" />

    <?php endif; ?>



    <meta content="INDEX, FOLLOW" name="ROBOTS" />
    <link rel="canonical" href="<?php echo e(url('/' . app()->getLocale())); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e(url('/' . app()->getLocale())); ?>" />
    <meta property="og:title" content="<?php echo e($display_name); ?>" />
        <meta property="og:site_name" content="<?php echo e($display_name); ?>" />
    <meta property="og:image" content="<?php echo e($display_image); ?>" />
        <meta name="twitter:card" content="summary" />
    
    
 
 <?php if(app()->getLocale() == "ar"): ?>
 
     <meta name="author" content="تيك جو" />



   <meta name="description" content="تقدم شركة تيك جو خدمة تصميم و برمجة المواقع الالكترونية و تصميم المتاجر الالكترونية و تصميم تطبيقات الهواتف الذكية.">

    <meta name="keywords" content="
تيك جو أفضل شركة برمجيات سعودية ، تطبيقات جوال ، شركة برمجة تطبيقات سعودية ، شركة تصميم تطبيقات موبايل ، تصميم مواقع  ، تصميم متاجر الكترونية ، تصميم حراج ، برمجة خاصة و خدمات حلول رجال الأعمال و الشركات. شركة تيك جو , موقع تيك جو, شركة تيك جو لتصميم المواقع, تيك جو , شركة تيك جو تصميم وبرمجة مواقع الانترنت , حلول, تصميم, برمجة, تصميم مواقع, شركة تيك جو, استضافة, أفضل شركة تصميم مواقع, اقوى شركة تصميم مواقع, تصميم حراج, برمجة حراج, تصميم سوق الكتروني, تصميم متجر الكتروني, تصميم موقع شركة, استضافة موقع, شركة تصميم سعودية, افضل شركة تصميم فى السعودية, تك جو جروب , Tech-Go , Tech-Go Groub , Tech Go , تيك جو جروب , تك جو , تيك جو , تصميم موقع  , تصميم المواقع
 , تصميم ستايل, برمجة مواقع , حجز دومين , حجز نطاق , شركة تصميم مواقع , برمجة موقع , برمجة سكربت , تسويق الكترونيsms ,رسائل الجوال,vps,استضافه ,الرياض , شركة , تصميم ,  , دعم , فنى , تصميم ,  استضافة , مواقع , دعم , فنى , وبرمجة , اتات , تصميم , ستايل , تصميم , موقع , دعم , فنى , تصميم  , تصميم , ستايل ,  , ستايلات , دعم , فنى , حماية , موقع , حماية , منتدى , شركة , حماية , منتديات , عمل , موقع , شركة ,  , موقع , دكتور , موقع , ادارة , محتوى , استضافة , مواقع , اسضافة , استضافات , host , دعم , وحماية , مواقع , تصميم , هيدر , موقع , رسمى , تصميم , قبلى , تصميم , منتدى , قبلى , تصميم  ,  , منتدى , رخيص , التصميم , للتصميم , للدعم , الفنى , للحماية , داعم , مواقع , تصميم , شبكة , اسلامية , تصميم , شبكة , رومانسية , تصميم , مجلة , انفنتى , لتصميم , الانفنتى , لتصميم , ثيم , انفنتى , تصميم , جوملا , تصميم , جوملا , لتصميم , جوملا , للتصميم , الاحترافى , تصميم , احترافى , للتصميمات , الاحترافية , تصميمات , مميزة , للتصميم , الجمالى , شركة , تصميم , سعودية , شركة , تصميم , عربية , شركة , تصميم , اماراتية , سورية , شركة , امريكية , شركة , بحرينية , شركة , بحرينية , للتصميم , السعودية , للتصميم , سعودى , للتصميم , شركة , سعودية , للدعم , الفنى , الدعم , الفنى , السعودية , الاستضافة , بالسعودية , استضافة , مصرية , استضافة , عربية , للاسضافة , استضافة , موقع , تجارى , للاستضافة , التجارية , للاستضافة , القومية , استضافة , مجانية , استضافة , رخيصة , استضافة , محمية , حماية , مع , اسضافة , مستيف , مواقع ,  , منتدى , l,ru , jwldl , تصميمات , ارشفة , الدعم , الفنى , استضافة , منتدى , استايلات , استضافة , موقع , استضافة , مواقع , استضافة , شات , للدعم , الفنى , للتصميم , لتصميم , لتصميم , مدونة , لتصميم , موقع , لتصميم , المواقعشركة , تصميم , شركات , تصميم , تصميم , منتدى , تصميم , موقع , webstdy , techgo , tech-go , الرياض , تصميم , استضافة , دعم , فنى , تصميم , استايلات , مساحة , ريسيلر , منتدى , تصميم , تصميم , ستايل , تصميم , موقع , دعم , فنى , استضافة , استضافة , الرياض  منتدى , منتديات , jwldl , l,ru  , تصميمات , ارشفة , الدعم , الفنى , استضافة , منتدى , استايلات , استضافة , موقع , استضافة , مواقع , استضافة , شات , للدعم , الفنى , للتصميم , لتصميم , لتصميم , مدونة , لتصميم , موقع , لتصميم , المواقع شركة , تصميم , شركات , تصميم , تصميم , منتدى , تصميم , موقع   , شركة , تصميم , استضافة , دعم , فنى , تصميم , استايلات , استضافة , مواقع , دعم , فنى , للمنتديات , برمجه , خاصة , وبرمجة , اسكربتات , تصميم , تصميم , ستايل , تصميم , موقع , دعم , فنى , استضافة , استضافة , تصميم , دعم , فنى , تطوير , تصميم , مواقع , تصميم , منتدى , تصميم , ستايل , تصميم , ستايلات , دعم , فنى , حماية , موقع , حماية , منتدى , شركة , حماية , منتديات , عمل , موقع , شركة , تصميم , موقع , دكتور , تصميم , موقع , ادارة , محتوى , استضافة , مواقع , اسضافة , استضافات , host , دعم , وحماية , مواقع , تصميم , هيدر , تصميم , موقع , رسمى , تصميم , قبلى , تصميم , منتدى , قبلى , تصميم , منتدى , رومانسى , تصميم , منتدى , رخيص , التصميم , للتصميم , للدعم , الفنى , للحماية , داعم , مواقع , تصميم , شبكة , اسلامية , تصميم , شبكة , رومانسية , تصميم , مجلة , انفنتى , لتصميم , الانفنتى , لتصميم , ثيم , انفنتى , تصميم , جوملا , تصميم , جوملا , لتصميم , جوملا , للتصميم , الاحترافى , تصميم , احترافى , للتصميمات , الاحترافية , تصميمات , مميزة , للتصميم , الجمالى , شركة , تصميم , سعودية , شركة , تصميم , عربية , شركة , تصميم , اماراتية , شركة , تصميم , سورية , شركة , تصميم , مواقع , امريكية , شركة , تصميم , مواقع , بحرينية , شركة , بحرينية , للتصميم , السعودية , للتصميم , سعودى , للتصميم , شركة , سعودية , للدعم , الفنى , الدعم , الفنى , السعودية , الاستضافة , بالسعودية , استضافة , مصرية , استضافة , عربية , للاسضافة , استضافة , موقع , تجارى , للاستضافة , التجارية , للاستضافة , القومية , استضافة , مجانية , استضافة , رخيصة , استضافة , محمية , حماية , مع , اسضافة , مستيف , مواقع , webstdy.com , tech-go.net , techgo.net , tech-go.com , techgo.com , منتدى , منتديات  , l,ru  , تصميمات , ارشفة , الدعم , الفنى , استضافة , منتدى , استايلات , استضافة , موقع , استضافة , مواقع , استضافة , شات , للدعم , الفنى , للتصميم , لتصميم , لتصميم , مدونة , لتصميم , موقع , لتصميم , المواقع , شركة , تصميم , شركات , تصميم , تصميم , منتدى , تصميم , موقع , شركة , الرياض , تصميم , استضافة , دعم , فنى , تصميم , استايلات , مساحة , ريسيلر , منتدى , تصميم , تصميم , ستايل , تصميم , موقع , دعم , فنى , استضافة , استضافة , الرياض , منتدى , منتديات , jwldl , l,ru , jwldl , تصميمات , ارشفة , الدعم , الفنى , استضافة , منتدى , استايلات , استضافة , موقع , استضافة , مواقع , استضافة , شات , للدعم , الفنى , للتصميم , لتصميم , لتصميم , مدونة , لتصميم , موقع , لتصميم , المواقع , شركة , تصميم , شركات , تصميم , تصميم , منتدى , تصميم , موقع , تصميم , ستايل , ستايلات , تصميم , موقع , لشركة , شركات , تصميم , لتصميم , المواقع ,  الرياض , الرياض , ويب , عمل , موقع , انشاء , منتدى , انشاء , مواقع , للتصميم , fvhl[ , jwldl , jwldl , l,hru , jwldl , sjhdg , jwldl , gav;hj , av;m , jwldl , hgvdhq , hgvdhq , ggjwldl , jwldl , hgav;hj , hgfvl[m , ,استضافة , مواقع , شركة , تقدم , خدمات , الدعم , الفني , تصميم , مواقع , الانترنت , سواء , تصميم , موقع , تصميم , منتدى , استضافة , المواقع , تصميم , الماقع , الدعم , الفني , برمجة , المواقع ,     استضافة , استضافه , استضافة , مواقع , استضافة , المواقع , شركة , استضافة , تصميم , موقع , تصميم , مواقع , الانترنت , تصميم , منتدى , تصميم , مواقع , تصميم , المواقع , تصميم , المنتديات , برمجة , مواقع , حجز , نطاق , شركة , تصميم , مواقع , برمجة , موقع , تصميم , منتديات , حجز , دومين , دعم , فني , إدارة ,  , ترخيص , منتدى , ترخيص , منتديات , تطوير , مواقع , تطوير , المواقع , رسائل , جوال , شركة برمجيات ، شركة برمجة ، شركة تصميم وبرمجة مواقع انترنت ، شركة برمجة تطبيقات، برمجة تطبيقات ايفون، برمجة تطبيقات اندرويد ، برمجة تطبيقات هواوي، برمجة موقع الكتروني، برمجة حراج ، برمجة متجر الكتروني، تصميم موقع">
  

    <meta property="og:description" content="شركة تيك جو هي شركة برمجة وتصميم مواقع الانترنت وتطبيقات الموبايل ايفون واندرويد وهواوي ، شركة برمجيات مصرية متخصصة في برمجة المواقع وتطبيقات الجوال ."/>


    <meta property="og:locale" content="ar_AR" />

<?php else: ?>

    <meta name="author" content="Tech GO" />

   <meta name="description" content="TechGo provides website design and programming services, electronic store design, and smart phone application design.">

    <meta name="keywords" content="
TechGo is the best Saudi software company , Tech Go For IT Solutions , mobile applications , tech-go.net , Saudi application programming company, mobile application design company, web design, online store design, forest design, special programming and solutions services for businessmen and companies. TechGo company, TechGo website, TechGo web design company, TechGo, TechGo web design and programming company, solutions, design, programming, web design, TechGo company, hosting, the best web design company, the most powerful web design company, Haraj design, Haraj programming, online market design, online store design, company website design, website hosting, Saudi design company, best design company in Saudi Arabia, Tech Go Group, Tech-Go, Tech-Go Group, Tech Go, Tech Go Group , TechGo, TechGo, website design, web design
  Style design, web programming, domain reservation, domain reservation, web design company, website programming, script programming, e-marketing sms, mobile messages, vps, hosting, Riyadh, company, design, support, technical, design, hosting, sites, Support, technical, programming, data, design, style, design, site, support, technical, design, design, style, styles, support, technical, protection, site, protection, forum, company, protection, forums, work, site Company, site, doctor, site, management, content, hosting, sites, hosting, hosting, host, support, protection, sites, design, header, site, official, design, tribal, design, forum, tribal, design, Forum, cheap, design, design, support, technical, protection, supportive, sites, design, network, Islamic, design, network, romantic, design, magazine, Infinity, to design, Infinity, to design, theme, Infinity, design, Joomla Design, Joomla, for design, Joomla, for professional, design, design, professional, for professional, designs, distinctive, designs, for aesthetic, design, company, design, Saudi, company, design, Arabic, company, design, Emirati, Syrian, company American, company, Bahraini, company, Bahraini, for design, Saudi, for design, Saudi, for design, Saudi, company, for, technical, support, technical, support, Saudi Arabia, hosting, in Saudi Arabia, hosting, Egyptian, hosting, Arabic, for hosting, hosting A commercial site for hosting, commercial hosting, national hosting, free, hosting, cheap, hosting, protected, protection, with hosting, hosting, hosting, sites, forum, l, ru, jwldl, designs, archiving, support, Technical, hosting, forum, styles, hosting, site, hosting, sites, hosting, chat, for technical, support, for design, for design, for design, blog, for design, site, for design, websites, company, design, companies, design, design, forum, Design, website, Riyadh, design, hosting, support, technical, design, styles, space, reseller, forum, design, design, style, design, website, support, technical, hosting, hosting, Riyadh forum, forums, jwldl , l, ru, designs, archive, support, technical, hosting, forum, styles, hosting, site, hosting, sites, hosting, chat, for technical support, for design, for design, for design, blog, for design, website, for designing, websites company, design, companies, design, design, forum, design, site, webstdy , , techgo , tech-go , company, design, hosting, support, technical, design, styles, hosting, sites, support, technical, for forums, programming, special, programming, scripts, Design, design, style, design, site, support, technical, hosting, hosting, design, support, technical, development, design, websites, design, forum, design, style, design, styles, support, technical, protection, site, Protection, forum, company, protection, forums, work, site, company, design, site, doctor, design, site, management, content, hosting, sites, hosting, hosting, host, support, protection, sites, design, header, Design, site, official, design, tribal, design, forum, tribal, design, forum, romantic, design, forum, cheap, design, design, support, technical, protection, supportive, sites, design, network, Islamic, design, Network, romance, design, magazine, Infinity, to design, Infinity, to design, theme, Infinity, design, Joomla, design, Joomla, to design, Joomla, for professional design, design, professional, for professional, designs, distinctive, designs, for design, Al-Jamali company, design, Saudi, company, design, Arab, company, design, Emirati, company, design, Syrian, company, design, sites, American, company, design, sites, Bahraini, company, Bahraini, design, Saudi Arabia, Design, Saudi, design, company, Saudi, for, technical, support, technical, Saudi Arabia, hosting, in Saudi Arabia, hosting, Egyptian, hosting, Arabic, for hosting, hosting, commercial, website, for hosting, commercial, for hosting, national, hosting, Free, hosting, cheap, hosting, protected, protection, with, hosting, hosting, sites, webstdy.com , tech-go.net , techgo.net , tech-go.com , techgo.com , forum, forums, l, ru, designs, archiving, support, technical, hosting, forum, styles, hosting, site, Hosting, websites, hosting, chat, for technical support, design, design, design, blog, design, website, design, websites, company, design, companies, design, design, forum, design, site, company, Riyadh, design, Hosting, support, technical, design, styles, space, reseller, forum, design, design, style, design, site, technical support, hosting, hosting, Riyadh, forum, forums, jwldl, l, ru, jwldl, designs, Archive, support, technical, hosting, forum, styles, hosting, site, hosting, sites, hosting, chat, for technical, support, for design, for design,To design, blog, to design, website, to design, websites, company, design, companies, design, design, forum, design, website, design, style, styles, design, website, for, companies, companies, design, to design, websites, Riyadh, Riyadh, Web, work, site, establishment, forum, creation, sites, for design, fvhl [, jwldl, jwldl, l, hru, jwldl, sjhdg, jwldl, gav; hj, av; m, jwldl, hgvdhq, hgvdhq, ggjwldl , jwldl , hgav;hj , hgfvl[m , , hosting , sites , company , providing , services , technical , support , design , sites , internet , whether , design , site , design , forum , hosting , sites , design , sites , Support, technical, programming, websites, hosting, hosting, hosting, websites, hosting, websites, company, hosting, design, website, design, websites, internet, design, forum, design, websites, design, websites, design, forums, Programming, sites, reservation, domain, company, design, sites, programming, site, design, forums, reservation, domain, support, technical, management, license, forum, license, forums, development, sites, development, sites, messages , mobile, software company, programming company, website design and programming company, application programming company, iPhone application programming, Android application programming, Huawei application programming, website programming, forest programming, online store programming, website design">
  
    <meta property="og:description" content="TechGo is a programming and design company for websites and mobile applications iPhone, Android and Huawei, an Egyptian software company specialized in programming websites and mobile applications."/>

    <meta property="og:locale" content="en_EN" />

<?php endif; ?>

 
 
  </head>

  <body>

    <input type="hidden" id="locale" value="<?php echo e(app()->getLocale()); ?>" />
    <!-- start laoder -->

    <div class="loader hidden">

      <div class="spinner"></div>

    </div>

    <!-- End laoder -->

    <!-- Start Button Scroll -->

    <?php
      $scroll_top = $settings->where('key','scroll_top_enabled')->first()->value;
      if($scroll_top == "true") {
    ?>
    <div class="btnScroll">

      <i class="fa-solid fa-long-arrow-up"></i>

    </div>
    <?php } ?>

    <!-- End Button Scroll -->

    <!-- ========= Start Whatsapp Contact====== -->

    <div class="whatsappContact">

      <!-- Start Button Anim -->

      <div class="buttonAnim whatsapp conversionButton">

<?php


$whatsappContacts = [
    $settings->where('key','contact_whatsapp')->first()->value,
    "+971501927944"
];

$randomContact = $whatsappContacts[array_rand($whatsappContacts)];

$whatsappText = $settings->where('key','whatsapp_main_text_' . app()->getLocale())->first()->value;


?>


        <a href="<?php echo e(url('/')); ?>/whatsapp/contact?url=https://wa.me/<?php echo e($randomContact); ?>?text=<?php echo e($whatsappText); ?>">
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

                <li class="link__Footer conversionButton">

                  <a href="<?php echo e(url('/')); ?>/whatsapp/contact?url=https://wa.me/<?php echo e($settings->where('key','contact_whatsapp')->first()->value); ?>" class="link__Item"><?php echo e(__('lang.contact_us')); ?></a>

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

                <?php echo e(__('lang.all_rights_reserved')); ?> <span>TechGo@</span> 2023

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

      <!-- ====== Linked-In Footer ====== -->

<script type="text/javascript">
_linkedin_partner_id = "5973801";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=5973801&fmt=gif" />
</noscript>

<!-- LinkedIn Insight Tag Code -->
<script>
    // Get all elements with the class 'conversionButton'
    var conversionButtons = document.querySelectorAll('.conversionButton');

    // Attach the click event listener to each button with the class 'conversionButton'
    conversionButtons.forEach(function (button) {
        button.addEventListener('click', function () {
        
            window.lintrk('track', { conversion_id: 14994057 });
          
        });
    });
</script>




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
      $(window).on("load", function() {
        // var imgs = JSON.parse($(".mock-slider-content").val())

        // imgs.forEach(function(item) {
        //   var elm = `
        //     <div>
        //       <img src="`+item+`" />
        //     </div>
        //   `;
        //   $(".mockupSC").append(elm)
        // })

          $(".mockupSC").owlCarousel({

              singleItem: true,

              autoPlay: false,

              navigation: false,

              pagination: false,

              mouseDrag: true,

              touchDrag: false,

              nav: true,

              dots: true,

              loop: true,

              margin: 0,

              navText: false,

              items: 1,

              navText: [

                "<i class='fa-solid fa-chevron-right'></i>",

                "<i class='fa-solid fa-chevron-left'></i>"

              ],

              touchDrag: true,

              smartSpeed: 1000,

              autoplay: true,

              autoplayTimeout: 20000,

              autoplayHoverPause: false,

              responsiveClass: true,

              autoHeight: true

        });
      })
    </script>

    <script>

      app(); // Function mixitup && magnific Popup

    </script>

  </body>

</html>    <?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/front/layouts/app.blade.php ENDPATH**/ ?>