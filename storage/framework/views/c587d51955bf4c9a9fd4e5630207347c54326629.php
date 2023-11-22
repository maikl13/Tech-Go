<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo e($g->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"><?php echo e($g['title_' . app()->getLocale()]); ?></h5>
		</div>
		<div class="modal-body">
			<div id="gallery">
				<?php $__currentLoopData = $g['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<figure id="1">
					<a href="/uploads/gallery/<?php echo e($img['image']); ?>" target="_blank">
					<img src="/uploads/gallery/<?php echo e($img['image']); ?>">
					<figcaption><?php echo e($img['description_' . app()->getLocale()]); ?></figcaption>
</a>
				</figure>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>

		</div>
	</div>
</div>	

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('/storage/images/<?php echo e($item['icon']); ?>');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1 class="single-title"><?php echo e($item['title_' . app()->getLocale()]); ?></h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>"><?php echo e(__('lang.home')); ?></a></li>
                          
							<li class="breadcrumb-item"><a href="#!">البرامج</a></li>
             
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->

					<div class="dz-social-icon style-1" style="margin-top:20px">
						<ul>
							<?php if($item['facebook']): ?>
							<li><a target="_blank" class="fab fa-facebook-f" href="<?php echo e($item['facebook']); ?>"></a></li>
							<?php endif; ?>
							<?php if($item['instagram']): ?>
							<li><a target="_blank" class="fab fa-instagram" href="<?php echo e($item['instagram']); ?>"></a></li>
							<?php endif; ?>
							<?php if($item['twitter']): ?>
							<li><a target="_blank" class="fab fa-twitter" href="<?php echo e($item['twitter']); ?>"></a></li>
							<?php endif; ?>
							<?php if($item['youtube']): ?>
							<li><a target="_blank" class="fab fa-youtube" href="<?php echo e($item['youtube']); ?>"></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<?php if(count($sub_programs) > 0): ?>
		<!-- Programs -->
		<div class="content-inner-3 section-pattren1" style="padding-bottom:0">
			<div class="container">

				<div class="swiper categories-swiper">
					<div class="swiper-wrapper">

					<?php $__currentLoopData = $sub_programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/programs/<?php echo e($p['id']); ?>/show" class="icon-cell">
									<img src="/storage/images/<?php echo e($p['icon']); ?>" />
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/programs/<?php echo e($p['id']); ?>/show"><?php echo e($p['title_'. app()->getLocale()]); ?></a></h6>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					</div>
					<div class="swiper-pagination style-1 text-center"></div>
				</div>
				<!-- View More -->
				<!-- <div class="row">
					<div clas="col-12">
						<div class="view-more-box">
							<a href="#!" class="btn btn-primary"><?php echo e(__('lang.more')); ?> <i class="fas fa-angle-down"></i></a>
						</div>
					</div>
				</div> -->
			</div>
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-3" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-4" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-5" alt="shape">
		</div>
		<!-- End Programs -->
		<?php endif; ?>

		<!-- About -->
		<section class="content-inner section-wrapper4" style="padding-top:25px">
			<div class="container">
				<div class="row">
	
					<div class="col-xl-12 col-lg-12  wow fadeInUp" data-wow-delay="0.4s">
						<p>
							<?php echo $item['content_' . app()->getLocale()]; ?>

						</p>
					</div>
				</div>
                <div class="row">
                    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($g['id']); ?>" class="col-6 g-item">
                            <img src="/storage/images/<?php echo e($g->short_image); ?>" style="width:100%;margin-bottom:15px" />
							<p class="album-title"><?php echo e($g['title_' . app()->getLocale()]); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
			</div>
	
		</section>
		<!-- About End-->

		<?php if(count($blog) > 0): ?>
		<!-- Our Blog  -->
		<section class="content-inner-2 section-pattren1" style="padding-top:0;padding-bottom:50px">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h2 class="title"><?php echo e(__('lang.blog')); ?></h2>
					<p><?php echo e(__('lang.blog_intro')); ?></p>
				</div>
				<div class="row">
			<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 ">
					<div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
						<div class="dz-media">
							<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/blog/<?php echo e($item2['id']); ?>/show"><img src="/blog_images/<?php echo e($item2['image']); ?>" alt=""></a>
							<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/blog/<?php echo e($item2['id']); ?>/show" class="btn btn-secondary"><?php echo e(__('lang.more')); ?></a>
						</div>
						<div class="dz-info">
							<h5 class="dz-title"><a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/blog/<?php echo e($item2['id']); ?>/show"><?php echo e($item2['title_' . app()->getLocale()]); ?></a></h5>
							<p><?php echo strip_tags(substr($item2['content_' . app()->getLocale()],0,148)); ?>...</p>
							
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
			<div class="row">
				<div clas="col-12">
					<div class="view-more-box">
						<a href="<?php echo e(url('/') . '/' . app()->getLocale()); ?>/blog?program_id=<?php echo e($item['id']); ?>" class="btn btn-primary"><?php echo e(__('lang.more')); ?> <i class="fas fa-angle-down"></i></a>
					</div>
				</div>
			</div>	
			</div>
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
			<img src="<?php echo e(url('/')); ?>/front/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
		</section>
		<!-- Our Blog End  -->
		<?php endif; ?>
	
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demosupercode/public_html/resources/views/front/single-program.blade.php ENDPATH**/ ?>