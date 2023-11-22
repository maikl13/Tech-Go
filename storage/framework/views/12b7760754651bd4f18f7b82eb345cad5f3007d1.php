<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo e(__('lang.title')); ?></title>
	<!-- Stylesheets -->
	<link href="<?php echo e(url('/')); ?>/assets/vendor/slick/slick.css" rel="stylesheet">
	<link href="<?php echo e(url('/')); ?>/assets/vendor/animate/animate.min.css" rel="stylesheet">
	<link href="<?php echo e(url('/')); ?>/assets/icons/style.css" rel="stylesheet">
	<link href="<?php echo e(url('/')); ?>/assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="<?php echo e(url('/')); ?>/assets/css/style.css" rel="stylesheet">
    <?php if(app()->getLocale() == "ar"): ?>
    <link href="<?php echo e(url('/')); ?>/assets/css/style-rtl.css" rel="stylesheet">
    <?php endif; ?>
	<!--Favicon-->
	<link rel="icon" href="<?php echo e(url('/')); ?>/assets/images/favicon.png" type="image/x-icon">
	<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page">
	<!--header-->
	<header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:<?php echo e($global_settings->where('key','phone')->first()->value); ?>"><?php echo e($global_settings->where('key','phone')->first()->value); ?></a></div>
						<div class="header-info"><i class="icon-placeholder2"></i><?php echo e($global_settings->where('key','address_' . app()->getLocale())->first()->value); ?></div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:<?php echo e($global_settings->where('key','email')->first()->value); ?>"><?php echo e($global_settings->where('key','email')->first()->value); ?></a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="<?php echo e($global_settings->where('key','facebook')->first()->value); ?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="<?php echo e($global_settings->where('key','twitter')->first()->value); ?>" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="<?php echo e($global_settings->where('key','instagram')->first()->value); ?>" class="hovicon"><i class="icon-instagram"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>" class="header-logo"><img src="<?php echo e(url('/')); ?>/assets/images/logo.png" alt="" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a>
										</li>										
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/about"><?php echo e(__('lang.about_us')); ?></a>
										</li>

										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/videos"><?php echo e(__('lang.videos')); ?></a>
										</li>										
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/branches"><?php echo e(__('lang.branches')); ?></a>
										</li>										
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/stories"><?php echo e(__('lang.stories')); ?></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/gallery"><?php echo e(__('lang.gallery')); ?></a>
										</li>										
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/faqs"><?php echo e(__('lang.faqs')); ?></a>
										</li>									
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog"><?php echo e(__('lang.blog')); ?></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/contact"><?php echo e(__('lang.contact_us')); ?></a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
	
						<div class="header-lang lang-toggler">
							<a href="#" class="icon icon-globe1"></a>
							<div class="header-lang-dropdown">
								<ul>
									<li><a href="<?php echo e(url('/')); ?>/en"><span class="header-lang-flag"><img src="<?php echo e(url('/')); ?>/assets/images/flag/flag_en.png" alt=""></span><span>English</span></a></li>
									<li><a href="<?php echo e(url('/')); ?>/ar"><span class="header-lang-flag"><img style="width:16px" src="<?php echo e(url('/')); ?>/assets/images/flag/flag_ar.png" alt=""></span><span>العربية</span></a></li>
								</ul>
							</div>
						</div></div>
				</div>
			</div>
		</div>
	</header>
	<!--//header-->

    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>







    	<!--footer-->
	<div class="footer mt-0">
		<div class="container">
			<div class="row py-1 py-md-2 px-lg-0">
				<div class="col-lg-4 footer-col1">
					<div class="row flex-column flex-md-row flex-lg-column">
						<div class="col-md col-lg-auto">
							<div class="footer-logo">
								<img style="width:100px;border-radius:50%" src="<?php echo e(url('/')); ?>/assets/images/logo.png" alt="" class="img-fluid">
							</div>
							<div class="mt-2 mt-lg-0"></div>
							<div class="footer-social d-none d-md-block d-lg-none">
								<a href="<?php echo e($global_settings->where('key','facebook')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="<?php echo e($global_settings->where('key','twitter')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="<?php echo e($global_settings->where('key','instagram')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="col-md">

							<div class="footer-social d-md-none d-lg-block">
							<a href="<?php echo e($global_settings->where('key','facebook')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="<?php echo e($global_settings->where('key','twitter')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="<?php echo e($global_settings->where('key','instagram')->first()->value); ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<h3><?php echo e(__("lang.blog")); ?></h3>
					<div class="h-decor"></div>
					<?php $__currentLoopData = $global_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="footer-post d-flex">
						<div class="footer-post-photo"><img src="/blog_images/<?php echo e($item['image']); ?>" alt="" class="img-fluid"></div>
						<div class="footer-post-text">
							<div class="footer-post-title"><a href="post.html"><?php echo e($item['title_' . app()->getLocale()]); ?></a></div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
				<div class="col-sm-6 col-lg-4">
					<h3><?php echo e(__("lang.contact_us")); ?></h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i><?php echo e($global_settings->where('key','address_' . app()->getLocale())->first()->value); ?>

							
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap"><?php echo e($global_settings->where('key','phone')->first()->value); ?></span></span></b>
							</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:<?php echo e($global_settings->where('key','email')->first()->value); ?>"><?php echo e($global_settings->where('key','email')->first()->value); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm"><?php echo e(__('lang.all_rights_reserved')); ?> © 2022 <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Ask a Question</h3>
						<form class="mt-15" id="questionForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
								<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
								<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
								<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
							</div>
							<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal modal-form fade" id="modalBookingForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Book an Appointment</h3>
						<form class="mt-15" id="bookingForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
								<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*" />
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*" />
									</div>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone" />
									</div>
								</div>
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
										<input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age" />
									</div>
								</div>
							</div>
							<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-tooth"></i>
								</span>
								<select name="bookingservice" class="form-control">
									<option selected="selected" disabled="disabled">Select Service</option>
									<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
									<option value="General Dentistry">General Dentistry</option>
									<option value="Orthodontics">Orthodontics</option>
									<option value="Children`s Dentistry">Children`s Dentistry</option>
									<option value="Dental Implants">Dental Implants</option>
									<option value="Dental Emergency">Dental Emergency</option>
								</select>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
								</div>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
								</div>
							</div>
							<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Vendors -->
	<script src="<?php echo e(url('/')); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/cookie/jquery.cookie.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/bootstrap-datetimepicker/moment.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/popper/popper.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/waypoints/sticky.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/slick/slick.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/countTo/jquery.countTo.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/form-validation/jquery.form.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/vendor/form-validation/jquery.validate.min.js"></script>
	<!-- Custom Scripts -->
	<script src="<?php echo e(url('/')); ?>/assets/js/app.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/js/app-shop.js"></script>
	<script src="<?php echo e(url('/')); ?>/assets/form/forms.js"></script>
	<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
              new WOW().init();
              </script>
</body>

</html><?php /**PATH C:\laragon\www\dradel\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>