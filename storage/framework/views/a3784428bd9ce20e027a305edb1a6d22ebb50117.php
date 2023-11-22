<?php $__env->startSection('header'); ?>

    <?php echo $__env->make('front.layouts.parts.header-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- ====== Start Content Header ==== -->

      <div class="content__Header">

        <!-- start Container -->

        <div class="container">

          <!-- ==== Start All contnet ==== -->

          <div class="all__Content flex-between">

            <!-- ==== Start Content Info === -->

            <div class="content__Info" data-aos="fade-left">

              <h1 class="titleInfo infoTitleProject"><?php echo e(__('lang.blog')); ?></h1>

            </div>

            <!-- ==== End Content Info ===== -->

            <!-- ==== Start Image Content ===== -->

            <div class="image__Content imgProject" data-aos="fade-right">

              <img src="<?php echo e(url('/')); ?>/front/assets/images/main/03.webp" alt="image" />

            </div>

            <!-- ==== End Image Content ====== -->

          </div>

          <!-- ==== End All Content ==== -->

        </div>

        <!-- End Container -->

      </div>

      <!-- ===== End Content Header ====== -->

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 

    <!-- ======== Start main ======= -->

    <main>

      <!-- =============== Start Section Blog ============== -->

      <div class="blog">

        <!-- ==== Start Container ===== -->

        <div class="container">

          <!-- ===== Start main Blog ===== -->

          <div class="mainBlog">

            <!-- ==== Start Right Blog ==== -->

            <div class="rightBlog">

              <!-- ===== Start all Blog ===== -->

              <div class="allBlog">



              <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- ===== Start Blog One ===== -->

                <div class="blogOne" data-aos="fade-left">

                  <a href="<?php echo e(url('/' . app()->getLocale())); ?>/blog/<?php echo e($p->id); ?>/show">

                  <!-- ==== Start img Blog ==== -->

                  <div class="imgBlog">

                    <img src="/blog_images/<?php echo e($p->image); ?>" alt="blogImg" />

                  </div>

                  <!-- ==== End img Blog ==== -->

                  <!-- ===== Start content ===== -->

                  <div class="content">

                    <!-- ==== Start Info ==== -->

                    <div class="info">

                      <h1 class="title"><?php echo e($p['title_' . app()->getLocale()]); ?></h1>

                      <div class="date"><?php echo e($p->created_at->format('Y-m-d')); ?></div>

                    </div>

                    <!-- ==== End Info ==== -->

                    <p class="text">

                    <?php echo strip_tags(mb_substr($p['content_' . app()->getLocale()],0,500)); ?>...

                    </p>

                  </div>

                  <!-- ===== End content ===== -->

                    </a>

                </div>

                <!-- ===== End Blog One ===== -->

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                <?php echo e($blog->links()); ?>


              </div>

              <!-- ===== End all Blog ===== -->

              <!-- ===== Start all Blog ===== -->

            </div>

            <!-- ==== End Right Blog ==== -->

            <!-- ====== Start left Blog ==== -->

            <div class="left__Blog" data-aos="fade-right">

              <div class="title"><h2 class="titleBlog"><?php echo e(__('lang.more_blogs')); ?></h2></div>

              <!-- === Start blogs New ==== -->

              <div class="blogsNew">



              <?php $__currentLoopData = $random; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- ==== Start Blog New One ==== -->

                <div class="blogNewOne">

                    <a href="<?php echo e(url('/' . app()->getLocale())); ?>/blog/<?php echo e($p->id); ?>/show">

                      <img src="/blog_images/<?php echo e($p->image); ?>" alt="BlogImage" />

                    </a>

                </div>

                <!-- ==== End Blog New One ==== -->

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



              </div>

              <!-- === End blogs New ==== -->



              <?php echo $__env->make('front.layouts.parts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <!-- ====== End left Blog ==== -->

          </div>

          <!-- ===== End main Blog ===== -->



        </div>

        <!-- ==== End Container ===== -->

      </div>

      <!-- =============== End Section Blog ============== -->

    </main>

    <!-- ======== End main ======= -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/front/blog.blade.php ENDPATH**/ ?>