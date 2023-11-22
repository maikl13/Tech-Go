<?php $__env->startSection('content'); ?>

    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">


                <h1>الطلبية <?php echo e($order->id); ?></h1>
                <form method="post" action="<?php echo e(action('OrdersController@update',["order_id",$order->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                    <div class="">
                        <label class="d-print-none">حالة الطلبية : </label>
                        <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>"/>
                        <select class="form-control col-md-12 d-print-none" name="status">
                            <?php if($order->status=="pending"): ?>
                                <option name="pending" selected value="pending">قيد الموافقة</option>
                            <?php else: ?>
                                <option name="pending" value="pending">قيد الموافقة</option>
                            <?php endif; ?>
                            <?php if($order->status=="processing"): ?>
                                <option name="processing" selected value="processing">قيد التنفيذ</option>
                            <?php else: ?>
                                <option name="processing" value="processing">قيد التنفيذ</option>
                            <?php endif; ?>

                            <?php if($order->status=="in_delivery"): ?>
                                <option name="in_delivery" selected value="in_delivery">قيد التوصيل</option>
                            <?php else: ?>
                                <option name="in_delivery" value="in_delivery">قيد التوصيل</option>
                            <?php endif; ?>

                            <?php if($order->status=="delivered"): ?>
                                <option name="delivered" selected value="delivered">تم التوصيل</option>
                            <?php else: ?>
                                <option name="delivered" value="delivered">تم التوصيل</option>
                            <?php endif; ?>

                            <?php if($order->status=="cancel"): ?>
                                <option name="cancel" selected value="cancel">ملغي</option>
                            <?php else: ?>
                                <option name="cancel" value="cancel">ملغي</option>
                            <?php endif; ?>
                        </select>
                        <textarea class="form-control col-md-12 d-print-none" style="margin-top: 10px"
                                  placeholder="نص الإشعار والرسالة ..." name="message"></textarea>

                    </div>
                    <hr/>
                    <div class="row d-print-none" style="margin-top: 10px" >
                        <div class="col-md-4 col-sm-4">
                            <input type="checkbox" name="notification" checked
                                   style="color: #fff"><span>إرسال إشعار</span></div>

                        <div class="col-md-4 col-sm-4">
                            <input type="checkbox" name="sms" checked
                                   style="color: #fff"><span>SMS إرسال</span></div>


                        <div class="col-md-4 col-sm-4" style="float:left">
                            <a href="/admin/create_notification/<?php echo e($order->user_id); ?>" class="btn btn-outline-primary">ارسال
                                إشعار</a>
                        </div>

                    </div>
                    <hr/>
                    <div class="product-list-cart" >
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <tr>
                                    <th style="text-align:center;">نظام التشغيل</th>

                                    <th style="text-align:center;">Mac Address</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><?php echo e($order->OS); ?></td>

                                    <td style="text-align:center;"><?php echo e($order->mac_address); ?></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="product-list-cart">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable">

                                <tr>
                                    <th style="text-align:center;">السائق</th>
                                    <th style="text-align:center;">حالة السائق</th>
                                    <th style="text-align:center;">هاتف السائق</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><?php if($driver!=""): ?> <?php echo e($driver->name); ?> <?php else: ?>
                                            - <?php endif; ?></td>
                                    <td style="text-align:center;"><?php if($order_driver!=""): ?><?php echo e($order_driver->order_status); ?><?php else: ?>
                                            - <?php endif; ?></td>
                                    <td style="text-align:center;"><?php if($driver!=""): ?><?php echo e($driver->phone); ?><?php else: ?> - <?php endif; ?></td>

                                </tr>
                            </table>
                        </div>
                    </div>
                    <b>معلومات :</b>


                    <div class="product-list-cart">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <tr>
                                    <th style="text-align:center;">إسم المشتري</th>
                                    <th style="text-align:center;">الهاتف</th>
                                    <th style="text-align:center;">البريد الإلكتروني</th>
                                    <th style="text-align:center;">خصم</th>
                                    <th style="text-align:center;">التاريخ</th>
                                    <th style="text-align:center;">الوقت</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><?php echo e($order->name); ?></td>
                                    <td style="text-align:center;"><a href="tel:<?php echo e($order->phone); ?>"><?php echo e($order->phone); ?></a>
                                    </td>
                                    <td style="text-align:center;"><a
                                                href="mailto:<?php echo e($order->email); ?>"><?php echo e($order->email); ?></a></td>
                                    <td style="text-align:center;">
                                        <?php if($order->code_percentage!=0): ?>
                                            <p style="color:#fff;margin: 10px;background-color: #980000;padding: 5px"><?php echo e($order->code_percentage); ?></p>
                                        <?php else: ?>
                                            <p style="color:#fff;margin: 10px;background-color: #21891d;padding: 5px"><?php echo e($order->code_percentage); ?></p>
                                        <?php endif; ?>
                                    </td>
                                    <td style="text-align:center;"><?php echo e($order->date); ?></td>
                                    <td style="text-align:center;"><?php echo e($order->time); ?></td>

                                </tr>
                            </table>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <tr>
                                    <th style="text-align:center;">المنطقة الجغرافية</th>
                                    <th style="text-align:center;">المدينة</th>
                                    <th style="text-align:center;">المنطقة</th>
                                    <th style="text-align:center;">بالقرب من</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><?php echo e($country_name); ?></td>
                                    <td style="text-align:center;"><?php echo e($city); ?></td>
                                    <td style="text-align:center;"><?php echo e($area_name); ?></td>
                                    <td style="text-align:center;"><?php echo e($order->area); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    <div class="product-list-cart" style="display: none">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <tr>
                                    <th style="text-align:center;">هاتف المتجر 1</th>
                                    <th style="text-align:center;">هاتف المتجر 2</th>
                                    <th style="text-align:center;">هاتف المتجر 3</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><a
                                                href="tel:<?php echo e($order->store_number); ?>"><?php echo e($order->store_number); ?></a>
                                    </td>
                                    <td style="text-align:center;"><a
                                                href="tel:<?php echo e($order->store_number_1); ?>"><?php echo e($order->store_number_1); ?></a>
                                    </td>
                                    <td style="text-align:center;"><a
                                                href="tel:<?php echo e($order->store_number_2); ?>"><?php echo e($order->store_number_2); ?></a>
                                    </td>

                                </tr>
                            </table>
                        </div>
                    </div>


                    <div class="product-list-cart">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <tr>
                                    <th style="text-align:center;">ملاحظات</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><?php echo e($order->note); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    <div class="product-list-cart" style="display: none">
                        <div class="product-status-wrap border-pdt-ct">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <tr>
                                    <th style="text-align:center;">إسم المتجر</th>
                                    <th style="text-align:center;">عنوان المتجر</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><?php echo e($order->store_name); ?></td>
                                    <td style="text-align:center;"><?php echo e($order->store_address); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    <div style="margin: 10px">
                        <b>المنتجات :</b>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <tr>
                                <th style="text-align:center;">الرقم</th>
                                <th style="text-align:center;">الصورة</th>
                                <th style="text-align:center;">barcode</th>
                                <th style="text-align:center;">الإسم</th>
                                <th style="text-align:center;">الموديل</th>
                                <th style="text-align:center;">السعر</th>
                                <th style="text-align:center;">الكمية</th>
                                <th style="text-align:center;">المجموع</th>
                            </tr>
                            <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="text-align:center;"><a href="/product/<?php echo e($r->product_id); ?>" target="_blank"><img src="/storage/small_image/<?php echo e($r->image); ?>" width="50px"/></a> </td>
                                    <td style="text-align:center;"><a href="/product/<?php echo e($r->product_id); ?>" target="_blank"><?php echo e($r->product_id); ?></a></td>
                                    <td style="text-align:center;"><a href="/product/<?php echo e($r->product_id); ?>" target="_blank"><?php echo e($r->barcode); ?></a></td>
                                    <td style="text-align:center;"><a href="/product/<?php echo e($r->product_id); ?>" target="_blank"><?php echo e($r->name); ?></a></td>
                                    <td style="text-align:center;"><?php echo e($r->model); ?></td>
                                    <td style="text-align:center;">₪<?php echo e($r->price); ?></td>
                                    <td style="text-align:center;"><?php echo e($r->qty); ?></td>
                                    <td style="text-align:center;">₪<?php echo e($r->sum); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <div style="margin: 10px">
                        <div class="product-list-cart">
                            <div class="product-status-wrap border-pdt-ct" style="text-align:center;">
                                <table style="text-align:center;" class="table table-hover table-bordered" id="sampleTable">
                                    <tr>
                                        <th style="text-align:center;">المجموع</th>
                                        <th style="text-align:center;">سعر التوصيل</th>
                                        <th style="text-align:center;">المجموع الكلي</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">₪<?php echo e($order->sum); ?></td>
                                        <td style="text-align:center;">₪<?php echo e($order->delivery); ?></td>
                                        <td style="text-align:center;">₪<?php echo e($order->all_sum); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-print-block">
                        <button class="form-control col-md-12 d-print-none btn btn-outline-primary">حفظ</button>
                        <center>
                            <button onclick="myFunction()" class="form-control col-md-12 d-print-none btn btn-outline-primary"
                                    style="margin-top: 10px;margin-bottom: 10px;">طباعة الطلبية
                            </button>
                        </center>
                        <input type="text" id="gps_text" class="form-control d-print-none"
                               value="https://www.google.com/maps/search/?api=1&query=<?php echo e($order->latitude); ?>,<?php echo e($order->longitude); ?>">
                        <button onclick="copy()" style="margin-top: 10px" class="form-control btn btn-outline-primary d-print-none">نسخ الموقع
                            الجغرافي
                        </button>
                    </div>


                    <div id="map" class="d-print-none" style="height: 400px;width: 100%; margin-top: 10px"></div>

                </form>
            </div>
        </div>
    </div>
    
    
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var lat = JSON.parse("<?php echo e(json_encode($order->latitude)); ?>");
            var lang = JSON.parse("<?php echo e(json_encode($order->longitude)); ?>");
            if (lat == 0 || lang == 0) {
                var uluru = {lat: 31.526334, lng: 35.0975293};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 11, center: uluru});
                // The marker, positioned at Uluru


                // var marker = new google.maps.Marker({position: uluru, map: map});
            } else {
                var uluru = {lat: lat, lng: lang};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 11, center: uluru});
                // The marker, positioned at Uluru


                var marker = new google.maps.Marker({position: uluru, map: map});
            }
        }

        function copy() {
            /* Get the text field */
            var copyText = document.getElementById("gps_text");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW01rvsbUVUBdG0sMgYKdUiw8peflr0Jg&callback=initMap">
    </script>
    <script>
        function myFunction() {
            window.print();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script src="js/bootstrap-modalmanager.js"></script>
    <script src="js/bootstrap-modal.js"></script>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/orders/show.blade.php ENDPATH**/ ?>