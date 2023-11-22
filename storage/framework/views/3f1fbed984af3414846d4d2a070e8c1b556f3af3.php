<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <h3 style="color:#333">الرسائل</h3>
                <section>
                    <div class="product-status-wrap border-pdt-ct">
                        <table class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
                            <tr>
                                
                                <th>العميل</th>
                                <th>الشركة</th>
            
                                <th>الموضوع</th>
                                <th>الرسالة</th>
                                <th>التاريخ</th>
                             
                                <th></th>
                            </tr>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                             
                                        
                            
                                        <td>الاسم:<?php echo e($s->name); ?> <br/>
                                            هاتف: <?php echo e($s->phone); ?> <br/>
                                            واتس: <?php echo e($s->phone_whatsapp); ?><br/>
                                            البريد الالكتروني: <br/> <?php echo e($s->email); ?>

                                        </td>
                                        <td>
                                            اسم الشركة: <?php echo e($s->company_name); ?> <br/>
                                            عنوان الشركة: <?php echo e($s->company_location); ?>


                                        </td>

                                        <td><?php echo e($s->subject); ?></td>
                                        <td><?php echo e($s->message); ?></td>
                                        <td><?php echo e($s->created_at->format('Y-m-d h:i a')); ?></td>

                                        <td>

                                        <a class="btn btn-danger"
                                               href="/admin/medicalrequests/<?php echo e($s->id); ?>/delete">حذف</a>
                                    
                                        </td>
                                    
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
                    </div>

                </section>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        function edit($name) {
            window.location.href = $name;
        }
    </script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\newtechgo\resources\views/dashboard/medical-requests.blade.php ENDPATH**/ ?>