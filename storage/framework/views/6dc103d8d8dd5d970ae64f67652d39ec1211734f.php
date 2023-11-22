<?php $__env->startSection('content'); ?>
	<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="<?php echo e(url('/')); ?>">الرئيسية</a>
					<span><?php echo e(__('lang.blog')); ?></span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first single-section">
		<div class="container">
			<?php if($single_cat): ?>
			<div class="title-wrap text-center">
				<h2 class="h1 title-with-clone" "><?php echo e($single_cat['name_' . app()->getLocale()]); ?></h2>
				<div class="h-decor"></div>
			</div>
			<?php endif; ?>
			<?php if($search): ?>
			<div class="title-wrap text-center">
				<h2 class="h1 title-with-clone" ><?php echo e($search); ?></h2>
				<div class="h-decor"></div>
			</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-lg-9 aside">
					<div class="blog-posts">
					<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="blog-post">
							<div class="blog-post-info">
								<div>
									<h2 class="post-title"><a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog/<?php echo e($item['id']); ?>/show"><?php echo e($item['title_' . app()->getLocale()]); ?></a></h2>
									<div class="post-meta">
										<div class="post-meta-author"><?php echo e($item['cat']['name_' . app()->getLocale()]); ?></div>
									</div>
								</div>
							</div>
							<div class="post-image">
								<a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog/<?php echo e($item['id']); ?>/show"><img src="/blog_images/<?php echo e($item['image']); ?>" alt=""></a>
							</div>
							<div class="post-teaser"><?php echo strip_tags(substr($item['content_' . app()->getLocale()],0,150)); ?>...</div>
							<div class="mt-3 mt-lg-4"><a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog/<?php echo e($item['id']); ?>/show" class="btn btn-sm btn-hover-fill read-more"><i class="icon-right-arrow"></i><span><?php echo e(__('lang.read_more')); ?></span><i class="icon-right-arrow"></i></a></div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

					</div>
				</div>
				<div class="col-lg-3 aside-left mt-5 mt-lg-0">
					<div class="side-block">
						<form action="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog" class="content-search d-flex">
							<?php echo e(csrf_field()); ?>

							<div class="input-wrap">
								<input name="search" required type="text" class="form-control" placeholder="<?php echo e(__('lang.search_blog')); ?>">
							</div>
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
					<div class="side-block">
						<h3 class="side-block-title"><?php echo e(__('lang.categories')); ?></h3>
						<ul class="categories-list">
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?php echo e(url('/')); ?>/<?php echo e(app()->getLocale()); ?>/blog?category_id=<?php echo e($item['id']); ?>"><?php echo e($item['name_' . app()->getLocale()]); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->


	</div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dradel\resources\views/front/blog.blade.php ENDPATH**/ ?>