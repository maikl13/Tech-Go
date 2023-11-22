<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3>اتصل بنا</h3>
                <section>

                    <div class="product-status-wrap border-pdt-ct">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                                <tr>
                                    <th>البريد الإلكتروني</th>
                                    <th>الإسم</th>
                                    <th>العنوان</th>
                                    <th>تاريخ التسجيل</th>
                                    <th>عمليات</th>
                                </tr>
                                <?php $i = 0; ?>
                                <?php $__currentLoopData = $contact_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><p id="sample_<?php echo e($i); ?>"><?php echo e($c->email); ?></p></td>
                                        <td><?php echo e($c->name); ?></td>
                                        <td><?php echo e($c->title); ?></td>
                                        <td><?php echo e($c->created_at); ?></td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary"
                                               onclick="CopyToClipboard('sample_<?php echo e($i); ?>');return false;">نسخ البريد</a>
                                            <a href="mailto:<?php echo e($c->email); ?>" class="btn btn-outline-primary">مراسلة</a>
                                            <a href="/admin/contact_us/<?php echo e($c->id); ?>" class="btn btn-outline-primary">عرض</a>
                                        </td>
                                    </tr>

                                    <?php $i++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function CopyToClipboard(id) {
            var r = document.createRange();
            r.selectNode(document.getElementById(id));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/contact_us/index.blade.php ENDPATH**/ ?>