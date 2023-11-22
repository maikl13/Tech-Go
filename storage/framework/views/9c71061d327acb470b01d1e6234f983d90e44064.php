              <!-- ===== Start form news ===== -->
              <div class="formNews">
                <div class="title">
                  <h2 class="titleBlog"><?php echo e(__('lang.newsletter')); ?></h2>
                </div>
                <form class="newsletter" action="<?php echo e(url('/')); ?>/newsletter/submit">
                  <input
                    type="email"
                    placeholder="<?php echo e(__('lang.email')); ?>"
                    class="input"
                    name="email"
                    required
                  />
                  <p class="newsletter-success"><?php echo e(__('lang.newsletter_success')); ?></p>
                  <button class="btn btnSubmitBlog" type="submit">
                    <?php echo e(__('lang.subscribe')); ?>

                  </button>
                </form>
              </div>
              <!-- ===== End form news ===== --><?php /**PATH C:\laragon\www\newtechgo\resources\views/front/layouts/parts/newsletter.blade.php ENDPATH**/ ?>