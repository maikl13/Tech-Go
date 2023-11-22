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
                                    <td>الإسم</td>
                                    <td><?php echo e($contact_us->name); ?></td>
                                </tr>
                                <tr>
                                    <td>البريد الإلكتروني</td>
                                    <td><a href="mailto:<?php echo e($contact_us->email); ?>"><?php echo e($contact_us->email); ?></a></td>
                                </tr>
                                <tr>
                                    <td>الهاتف</td>
                                    <td style="direction: ltr"><a href="tel:<?php echo e($contact_us->phone); ?>"><?php echo e($contact_us->phone); ?></a></td>
                                </tr>
                                <tr>
                                    <td>التاريخ</td>
                                    <td><?php echo e($contact_us->created_at); ?></td>
                                </tr>
                                <tr>
                                    <td>عنوان الرسالة</td>
                                    <td><?php echo e($contact_us->title); ?></td>
                                </tr>
                                <tr>
                                    <td>نص الرسالة</td>
                                    <td><?php echo e($contact_us->body); ?></td>
                                </tr>

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/contact_us/show.blade.php ENDPATH**/ ?>