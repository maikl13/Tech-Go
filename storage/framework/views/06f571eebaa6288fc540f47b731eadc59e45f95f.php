<?php $__env->startSection('content'); ?>
<style>
    .widget-chart-one .widget-heading {
        justify-content:center
    }
</style>

<div class="container">

    <div class="row justify-content-center">


        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">زيارات الموقع</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item"><?php echo e($stats['website_views']); ?></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">نقرات اتصال الواتساب</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item"><?php echo e($stats['whatsapp_clicks']); ?></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">الرسائل</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item"><?php echo e($stats['messages']); ?></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">المشاريع</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item"><?php echo e($stats['projects']); ?></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">المنتجات</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item"><?php echo e($stats['products']); ?></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="col-md-4">
            <div class="tile chart-tile statistic-tile">
                <div class="tile-body text-center">
                    <div class="widget widget-chart-one text-center">
                        <div class="widget-heading">
                            <h5 class="">اشتراكات النشرة البريدية</h5>
                        </div>

                        <div class="widget-content">
                           <p class="statistics-item"><?php echo e($stats['subscribers']); ?></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/eda7hy73qgy6/public_html/tech-go.net/resources/views/home.blade.php ENDPATH**/ ?>