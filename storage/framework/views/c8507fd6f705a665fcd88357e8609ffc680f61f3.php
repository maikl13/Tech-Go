<!DOCTYPE html>
<html <?php if(app()->getLocale() == "ar"): ?> lang="ar" dir="rtl" <?php else: ?> lang="en" dir="ltr" <?php endif; ?>>
<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="description" content="Akcel Crowdfunding & Charity is a Responsive HTML Template that can be used to build Non-Profit, Charity Website. Template is well designed and well coded and flexible">
	<meta property="og:title" content="Akcel - Crowdfunding & Charity HTML5 Template">
	<meta property="og:description" content="Akcel Crowdfunding & Charity is a Responsive HTML Template that can be used to build Non-Profit, Charity Website. Template is well designed and well coded and flexible">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title><?php echo e(__('lang.website_title')); ?></title>
	
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="images/logo.png">
    
	<!-- Stylesheet -->
    <link href="<?php echo e(url('/')); ?>/front/vendor/animate/animate.css" rel="stylesheet">
    <link href="<?php echo e(url('/')); ?>/front/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
	<link href="<?php echo e(url('/')); ?>/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?php echo e(url('/')); ?>/front/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
	
	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/front/css/style.css">
	<link rel="stylesheet" class="skin" href="<?php echo e(url('/')); ?>/front/css/skin/skin-1.css">
	<link rel="stylesheet" class="skin" href="<?php echo e(url('/')); ?>/front/css/custom.css">
	<?php if(app()->getLocale() == "ar"): ?>
	<link rel="stylesheet" class="skin" href="<?php echo e(url('/')); ?>/front/css/rtl.css">
	<?php endif; ?>
	<link rel="stylesheet" class="skin" href="<?php echo e(url('/')); ?>/front/css/media.css">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	
</head>
<body id="bg">

<div id="loading-area" class="loading-page-1">
	<div class="loading-inner">
		<div class="item-wrapper">
			<img class="item1" src="<?php echo e(url('/')); ?>/front/images/hand1.png" alt="">
			<img class="item2" src="<?php echo e(url('/')); ?>/front/images/hand2.png" alt="">
			<img class="item3" src="<?php echo e(url('/')); ?>/front/images/heart.png" alt="">
		</div>
		<div class="load-text">
			<span data-text="<?php echo e(__('lang.assosiation')); ?>" class="text-load"><?php echo e(__('lang.assosiation')); ?></span>
			<span data-text="<?php echo e(__('lang.homes')); ?>" class="text-load"><?php echo e(__('lang.homes')); ?></span>
			<span data-text="<?php echo e(__('lang.happy')); ?>" class="text-load"><?php echo e(__('lang.happy')); ?></span>

		</div>
	</div>
</div>
<a href="https://wa.me/9720595014941">
	<div class="whatsapp-floater">
		<i class="fab fa-whatsapp"></i>
	</div>
</a>
<div class="page-wraper">

	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Top Header -->
		<div class="top-bar">
			<div class="container">
				<div class="dz-topbar-inner d-flex justify-content-between align-items-center">
					<div class="dz-topbar-left">
						<ul>
							<li><?php echo e(__('lang.welcome_to')); ?> <b><?php echo e(__('lang.website_title')); ?></b></li>
						</ul>
					</div>
					<div class="dz-topbar-right">
						<ul>
							<li><i class="fas fa-map-marker-alt"></i> <span class="ltr"><?php echo e($global_settings->where('key', 'contact_phone')->first()->value); ?></span></li>
							<li><i class="fas fa-envelope"></i><?php echo e($global_settings->where('key', 'contact_email')->first()->value); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header mostion logo-dark">
						<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><img src="<?php echo e(url('/')); ?>/front/images/logo.png" alt=""></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					
					<!-- Header Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><img src="<?php echo e(url('/')); ?>/front/images/logo.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav navbar navbar-left">	
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/about"><?php echo e(__('lang.about_us')); ?></a></li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><?php echo e(__('lang.programs')); ?></a>
								<ul class="sub-menu">
									<?php $__currentLoopData = $menu_programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/programs/<?php echo e($menu_p['id']); ?>/show"><?php echo e($menu_p['title_' . app()->getLocale()]); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</li>
							<?php if(isset($single_program)): ?>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/blog?program_id=<?php echo e($item['id']); ?>"><?php echo e(__('lang.blog')); ?></a></li>
							<?php else: ?>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/blog"><?php echo e(__('lang.blog')); ?></a></li>
							<?php endif; ?>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/news"><?php echo e(__('lang.news')); ?></a></li>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/contact"><?php echo e(__('lang.contact_us')); ?></a></li>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/jobs"><?php echo e(__('lang.jobs')); ?></a></li>
							<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/team"><?php echo e(__('lang.team')); ?></a></li>
							<li class="sub-menu-down"><a href="javascript:void(0);"><?php echo e(__('lang.more')); ?></a>
								<ul class="sub-menu">
									
									<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/videos"><?php echo e(__('lang.videos')); ?></a></li>
									<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/questions"><?php echo e(__('lang.questions')); ?></a></li>
								</ul>
							</li>

							<?php if(app()->getLocale() == "ar"): ?>
								<li><a href="<?php echo e(url('/')); ?>/en">EN</a></li>
							<?php else: ?>
							<li><a href="<?php echo e(url('/')); ?>/ar">العربية</a></li>
							<?php endif; ?>
						</ul>
						<div class="header-bottom">
							<div class="dz-social-icon">
								<ul>
									<li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
									<li><a class="fab fa-twitter" href="https://twitter.com/"></a></li>
									<li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
									<li><a class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
	</header>
	<!-- Header End -->
	
	<div class="page-content bg-white">	
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>

    </div>
	
	<!-- Footer -->
    <footer class="site-footer style-1" id="footer">
		<div class="footer-top">
            <div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
						<div class="widget widget_about">
							<div class="footer-logo logo-white">
								<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><img src="<?php echo e(url('/')); ?>/front/images/logo.png" alt=""></a> 
							</div>
							<p>
								<?php echo e($global_settings->where('key', 'footer_description_' . app()->getLocale())->first()->value); ?>

							</p>
							<div class="dz-social-icon style-1">
								<ul>
									<li><a target="_blank" class="fab fa-facebook-f" href="<?php echo e($global_settings->where('key', 'contact_facebook')->first()->value); ?>"></a></li>
									<li><a target="_blank" class="fab fa-instagram" href="<?php echo e($global_settings->where('key', 'contact_instagram')->first()->value); ?>"></a></li>
									<li><a target="_blank" class="fab fa-twitter" href="<?php echo e($global_settings->where('key', 'contact_twitter')->first()->value); ?>"></a></li>
									<li><a target="_blank" class="fab fa-youtube" href="<?php echo e($global_settings->where('key', 'contact_youtube')->first()->value); ?>"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="widget widget_services">
							<h5 class="footer-title"><?php echo e(__('lang.important_links')); ?></h5>
							<ul>
								<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/about"><?php echo e(__('lang.about_us')); ?></a></li>
								<li><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/contact"><?php echo e(__('lang.contact_us')); ?></a></li>
	
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
						<div class="widget widget_getintuch">
							<h5 class="footer-title"><?php echo e(__('lang.contact_us')); ?></h5>
							<ul>
								<li>
									<i class="fas fa-map-marker-alt"></i>
									<span><?php echo e($global_settings->where('key', 'contact_address_' . app()->getLocale())->first()->value); ?></span>
								</li>
								<li>
									<i class="fa-solid fa-phone"></i>
									<span class="ltr"><?php echo e($global_settings->where('key', 'contact_phone')->first()->value); ?></span>
								</li>
								<li>
									<i class="fa fa-envelope"></i> 
									<span><?php echo e($global_settings->where('key', 'contact_email')->first()->value); ?></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
            </div>
			
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape7.png" class="shape-1 move-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape8.png" class="shape-2 move-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape9.png" class="shape-3 move-2" alt="shape">
			
		</div>
        <!-- Footer Bottom Part -->
        <div class="footer-bottom">
            <div class="container">
				<div class="text-center"> 
					<span class="copyright-text"><?php echo e(__('lang.all_rights_reserved')); ?><a href="https://supercode.ps" target="_blank">Supercode</a> @ 2023</span> 
				</div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
	
	<button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
	
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="<?php echo e(url('/')); ?>/front/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo e(url('/')); ?>/front/vendor/wow/wow.js"></script><!-- WOW JS -->
<script src="<?php echo e(url('/')); ?>/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo e(url('/')); ?>/front/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="<?php echo e(url('/')); ?>/front/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="<?php echo e(url('/')); ?>/front/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php echo e(url('/')); ?>/front/js/dz.carousel.js"></script>
<script src="<?php echo e(url('/')); ?>/front/js/dz.ajax.js"></script><!-- AJAX -->
<script src="<?php echo e(url('/')); ?>/front/js/custom.js"></script><!-- CUSTOM JS -->
</body>
</html><?php /**PATH /home/demosupercode/public_html/resources/views/front/layouts/app.blade.php ENDPATH**/ ?>