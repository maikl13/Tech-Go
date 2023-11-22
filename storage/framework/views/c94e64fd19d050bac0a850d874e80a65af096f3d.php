<?php $__env->startSection('head'); ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>
        .center-cropped {
            width: 100px;
            height: 100px;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover
        }

    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>





    <div class="text-muted f-w-400">
        <h1 style="color:#333">
            <center>تعديل منتج</center>
        </h1>
    </div>
    <div class="container" style="margin-top: 20px">
        <form method="POST" class="row" action="<?php echo e(action('ProductsController@update',["product",$product->id])); ?>"
              enctype='multipart/form-data'>
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('PUT')); ?>

            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">تفاصيل أساسية</h3>
                        </div>
                        <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id" >
                        <input type="text" name="name" required placeholder="اسم المنتج" class="form-control"
                               value="<?php echo e($product->name); ?>" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>/>
                        <label>القسم الرئيسي :</label>
                        <select name="super_category" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?> required class="form-control" id="super_category_id">

                            <option value="0">إختيار القسم الرئيسي</option>
                            <?php $__currentLoopData = $super_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"
                                        <?php if($product->super_category_id == $cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label>القسم الفرعي :</label>
                        <select name="category_id" required class="form-control" id="category_id" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>>
                            <option value="0">إختيار القسم الفرعي</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"
                                        <?php if($product->category_id == $cat->id): ?> selected <?php endif; ?> ><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <label>تفاصيل المنتج :</label>
                        <textarea name="note" placeholder="تفاصيل المنتج"
                                  class="form-control"><?php echo e($product->note); ?></textarea>

                        
                        
                        

                        <div class="col-md-12">
                            <label>الأسعار</label>
                            <div class="col-md-12">
                                <table class="table table-hover" id="">
                                    <thead>
                                    <tr>

                                        <th>الحزمة</th>

                                        <th>السعر</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php $__currentLoopData = $package_price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><label><?php echo e($c->name); ?></label></td>
                                            <td><input type="number" value="<?php echo e($c->price); ?>" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                                                       name="prices[]" step="0.01"></td>
                                            <input type="hidden" id="inlineCheckbox1" value="<?php echo e($c->id); ?>"
                                                   name="number[]">
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>


                            </div>
                        </div>


                        <label>الكمية :</label>
                        <input type="number" name="qty" value="<?php echo e($product->qty); ?>" class="form-control" required <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                               placeholder="الكمية"/>
                        <label>صور المنتج :</label>
                        <input type="file" name="image[]" multiple class="form-control"
                               onchange="get_multi_image(this);"
                               accept="image/*">
                        <div class="row" id="images_div">
                            <?php $index = 0;?>
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-3" id="image_div_<?php echo e($i); ?>" style="padding: 5px">
                                    <div class="center-cropped"
                                         style="width: 100%;border: 2px solid #212f31;padding: 1px;border-radius: 3px 4px 0px 0px;height: 100px;
                                                 background-image: url('<?php echo e(url('/storage/large_image/', $i->image)); ?>');">
                                        <a onclick="myfunction('image_div_<?php echo e($i); ?>',<?php echo e($i->id); ?>)" id="close_img">
                                            <img class="close"
                                                 style="background-color: #fff;border-radius: 100px;border: 1px solid white"
                                                 height="20px" width="20px"
                                                 src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjc2IDUxMS43NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjc2IDUxMS43NjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00MzYuODk2LDc0Ljg2OWMtOTkuODQtOTkuODE5LTI2Mi4yMDgtOTkuODE5LTM2Mi4wNDgsMGMtOTkuNzk3LDk5LjgxOS05OS43OTcsMjYyLjIyOSwwLDM2Mi4wNDgNCgkJCWM0OS45Miw0OS44OTksMTE1LjQ3Nyw3NC44MzcsMTgxLjAzNSw3NC44MzdzMTMxLjA5My0yNC45MzksMTgxLjAxMy03NC44MzdDNTM2LjcxNSwzMzcuMDk5LDUzNi43MTUsMTc0LjY4OCw0MzYuODk2LDc0Ljg2OXoNCgkJCSBNMzYxLjQ2MSwzMzEuMzE3YzguMzQxLDguMzQxLDguMzQxLDIxLjgyNCwwLDMwLjE2NWMtNC4xNiw0LjE2LTkuNjIxLDYuMjUxLTE1LjA4Myw2LjI1MWMtNS40NjEsMC0xMC45MjMtMi4wOTEtMTUuMDgzLTYuMjUxDQoJCQlsLTc1LjQxMy03NS40MzVsLTc1LjM5Miw3NS40MTNjLTQuMTgxLDQuMTYtOS42NDMsNi4yNTEtMTUuMDgzLDYuMjUxYy01LjQ2MSwwLTEwLjkyMy0yLjA5MS0xNS4wODMtNi4yNTENCgkJCWMtOC4zNDEtOC4zNDEtOC4zNDEtMjEuODQ1LDAtMzAuMTY1bDc1LjM5Mi03NS40MTNsLTc1LjQxMy03NS40MTNjLTguMzQxLTguMzQxLTguMzQxLTIxLjg0NSwwLTMwLjE2NQ0KCQkJYzguMzItOC4zNDEsMjEuODI0LTguMzQxLDMwLjE2NSwwbDc1LjQxMyw3NS40MTNsNzUuNDEzLTc1LjQxM2M4LjM0MS04LjM0MSwyMS44MjQtOC4zNDEsMzAuMTY1LDANCgkJCWM4LjM0MSw4LjMyLDguMzQxLDIxLjgyNCwwLDMwLjE2NWwtNzUuNDEzLDc1LjQxM0wzNjEuNDYxLDMzMS4zMTd6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo="/>
                                        </a>
                                        
                                        
                                    </div>
                                    <div style="background-color: #212e31;    border-radius: 0px 0px 3px 3px;width: 100%;text-align: center">
                                        <a href="<?php echo e(url('/storage/large_image/', $i->image)); ?>" target="_blank"
                                           style="text-align: center">
                                            <span style="color: #fff">عرض</span>
                                        </a>
                                    </div>
                                </div>
                                <?php $index++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <label>الصورة المصغرة : </label>
                        <input type="file" name="small_image" class="form-control" onchange="get_small_image(this)"
                               accept="image/*">
                        <div class="col-6" style="padding: 5px">
                            <div style="width: 100%;border: 2px solid #ced4d9;padding: 1px;border-radius: 3px;">

                                <img src="<?php echo e(url('/storage/small_image/', $product->image)); ?>" width="100%" id="img">
                            </div>

                        </div>
                        <input type="hidden" name="store_id" value="<?php echo e($store->id); ?>"/>


                        <button class="btn btn-primary" type="submit" style="margin-top: 10px">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>حفظ
                        </button>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="tile">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">تفاصيل إضافية</h3>
                            <div class="form-check" style="margin-top: 10px">
                                <input type="checkbox" id="inlineCheckbox1" name="active"
                                       <?php if($product->active=="yes"): ?> checked <?php endif; ?>>
                                <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                            </div>

                            <div class="form-check" style="margin-top: 10px">
                                <input type="checkbox" id="inlineCheckbox1" name="is_new"
                                       <?php if($product->is_new == "true"): ?> checked <?php endif; ?> >
                                <label class="form-check-label" for="inlineCheckbox1">عرض بقسم الجديد</label>
                            </div>
                            <label>فيديو يوتيوب :</label>
                            <input type="text" name="video_youtube" value="<?php echo e($product->youtube_video); ?>"
                                   placeholder="فيديو يوتيوب"
                                   class="form-control"/>
                            <label>بداية السلايدر :</label>
                            <input type="date" name="start_feature" value="<?php echo e($product->start_feature); ?>"
                                   class="form-control"/>
                            <label>نهاية السلايدر :</label>
                            <input type="date" name="end_feature" value="<?php echo e($product->end_feature); ?>"
                                   class="form-control"/>
                            <label>صورة السلايدر :</label>
                            <input type="file" name="image_slide" multiple class="form-control"
                                   accept="image/*">
                            <label>السعر المشطوب :</label>
                            <input type="number" name="del_price" class="form-control" placeholder="السعر المشطوب"
                                   value="<?php echo e($product->del_price); ?>"/>
                            <label>سعر التكلفة :</label>
                            <input type="number" value="<?php echo e($product->basic_price); ?>" name="basic_price" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                                   class="form-control" placeholder="سعر التكلفة"/>
                            <label>الباركود :</label>
                            <input type="number" name="barcode" value="<?php echo e($product->barcode); ?>" class="form-control" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                                   placeholder="الباركود"/>
                            <label>الموديل :</label>
                            <input type="text" name="model" value="<?php echo e($product->model); ?>" class="form-control" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>
                                   placeholder="الموديل"/>
                            <label>بداية الخصم :</label>
                            <input type="date" name="start_offer" value="<?php echo e($product->start_offer); ?>"
                                   class="form-control"/>
                            <label>نهاية الخصم :</label>
                            <input type="date" name="end_offer" value="<?php echo e($product->end_offer); ?>" class="form-control"/>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="col-md-12">
                    <div class="tile">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">جدول القيم</h3>
                        </div>
                        <table class="table" id="table_product_details" style="margin-top: 20px;">
                            <tbody class="orders-data-body">

                            <?php for($i=0;$i<=9;$i++): ?>
                                <tr>
                                    <td><input type="text" class="form-control" name="key[[<?php echo e($i); ?>]]"
                                               placeholder=" اسم الفئة <?php echo e($i+1); ?>"
                                               <?php if(count($keyvalue)>$i): ?> value="<?php echo e($keyvalue[$i]->key); ?>" <?php endif; ?>>
                                    </td>
                                    <td><input type="text" class="form-control" name="value[[<?php echo e($i); ?>]]"
                                               placeholder="القيمة <?php echo e($i+1); ?>"
                                               <?php if(count($keyvalue)>$i): ?> value="<?php echo e($keyvalue[$i]->value); ?>" <?php endif; ?> ></td>
                                </tr>
                            <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="tile">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">جدول التفصيلات</h3>
                        </div>

                        <label>العنوان الرئيسي :</label>
                        <input type="text" name="product_details_select" class="form-control"
                               placeholder="العنوان الرئيسي" value="<?php echo e($product->product_details_select); ?>"/>
                        <table class="table" id="table_product_details" style="margin-top: 20px;">


                            <tbody class="orders-data-body">
                            <?php for($i=0;$i<=9;$i++): ?>
                                <tr>
                                    <td><input type="text" class="form-control" name="det[[<?php echo e($i); ?>]]"
                                               placeholder="إسم التفصيلة"
                                               <?php if(count($product_details)>$i): ?> value="<?php echo e($product_details[$i]->name); ?>" <?php endif; ?>>
                                    </td>
                                    <td><input type="text" class="form-control" name="qty_det[[<?php echo e($i); ?>]]"
                                               placeholder="الكمية"
                                               <?php if(count($product_details)>$i): ?> value="<?php echo e($product_details[$i]->qty); ?>" <?php endif; ?>>
                                    </td>
                                    <td><input type="number" class="form-control" name="price_det[[<?php echo e($i); ?>]]"
                                               placeholder="زيادة على السعر"
                                               <?php if(count($product_details)>$i): ?> value="<?php echo e($product_details[$i]->price); ?>" <?php endif; ?>>
                                    </td>
                                </tr>

                            <?php endfor; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function () {
            $('#super_category_id').on('change', function (e) {
                var valueSelected = this.value;
                var selectElem = $("#mySelect");
                $.getJSON("/getCategories/" + valueSelected, function (data) {
                    $('#category_id').find('option').remove().end().append('<option value="0">إختيار القسم الفرعي</option>').val('0');
                    $.each(data, function (index, value) {
                        $("#category_id").append(new Option(value.name, value.id));

                    });
                });
            });
        });

        function myfunction(div, id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post("/admin/delete_image",
                {
                    id: id
                },
                function (data, status) {
                    console.log(data.toString());
                    var obj = data;
                    if (obj["status"] == "true") {
                        var myobj = document.getElementById(div);
                        myobj.parentNode.removeChild(myobj);
                    }

                    // alert("Data: " + obj + "\nStatus: " + status);
                });


        }

        function get_small_image(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector("#img").setAttribute("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function get_multi_image(input) {
            // a.forEach(function(entry) {
            //     console.log(entry);
            // });
            //

            console.log("length : " + input.files.length)
            for (var i = 0; i < input.files.length; i++) {
                if (input.files && input.files[i]) {

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        // document.querySelector("#img").setAttribute("src",e.target.result);

                        document.getElementById("images_div").innerHTML += "<div class=\"col-3\" id=\"image_div_{&quot;id&quot;:40,&quot;image&quot;:&quot;1619595983875876816195959833600129.jpg&quot;,&quot;product_id&quot;:3349668588626,&quot;created_at&quot;:&quot;2021-04-28 10:46:23&quot;,&quot;updated_at&quot;:&quot;2021-04-28 10:46:23&quot;}\" style=\"padding: 5px\">\n" +
                            "                                    <div class=\"center-cropped\" style=\"width: 100%;border: 2px solid #212f31;padding: 1px;border-radius: 3px 4px 0px 0px;height: 100px;\n" +
                            "                                                 background-image: url(" + e.target.result + ");\">\n" +
                            "                                        <a onclick=\"myfunction('image_div_{&quot;id&quot;:40,&quot;image&quot;:&quot;1619595983875876816195959833600129.jpg&quot;,&quot;product_id&quot;:3349668588626,&quot;created_at&quot;:&quot;2021-04-28 10:46:23&quot;,&quot;updated_at&quot;:&quot;2021-04-28 10:46:23&quot;}',40)\" id=\"close_img\">\n" +
                            "                                            <img class=\"close\" style=\"background-color: #fff;border-radius: 100px;border: 1px solid white\" height=\"20px\" width=\"20px\" src=\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjc2IDUxMS43NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjc2IDUxMS43NjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00MzYuODk2LDc0Ljg2OWMtOTkuODQtOTkuODE5LTI2Mi4yMDgtOTkuODE5LTM2Mi4wNDgsMGMtOTkuNzk3LDk5LjgxOS05OS43OTcsMjYyLjIyOSwwLDM2Mi4wNDgNCgkJCWM0OS45Miw0OS44OTksMTE1LjQ3Nyw3NC44MzcsMTgxLjAzNSw3NC44MzdzMTMxLjA5My0yNC45MzksMTgxLjAxMy03NC44MzdDNTM2LjcxNSwzMzcuMDk5LDUzNi43MTUsMTc0LjY4OCw0MzYuODk2LDc0Ljg2OXoNCgkJCSBNMzYxLjQ2MSwzMzEuMzE3YzguMzQxLDguMzQxLDguMzQxLDIxLjgyNCwwLDMwLjE2NWMtNC4xNiw0LjE2LTkuNjIxLDYuMjUxLTE1LjA4Myw2LjI1MWMtNS40NjEsMC0xMC45MjMtMi4wOTEtMTUuMDgzLTYuMjUxDQoJCQlsLTc1LjQxMy03NS40MzVsLTc1LjM5Miw3NS40MTNjLTQuMTgxLDQuMTYtOS42NDMsNi4yNTEtMTUuMDgzLDYuMjUxYy01LjQ2MSwwLTEwLjkyMy0yLjA5MS0xNS4wODMtNi4yNTENCgkJCWMtOC4zNDEtOC4zNDEtOC4zNDEtMjEuODQ1LDAtMzAuMTY1bDc1LjM5Mi03NS40MTNsLTc1LjQxMy03NS40MTNjLTguMzQxLTguMzQxLTguMzQxLTIxLjg0NSwwLTMwLjE2NQ0KCQkJYzguMzItOC4zNDEsMjEuODI0LTguMzQxLDMwLjE2NSwwbDc1LjQxMyw3NS40MTNsNzUuNDEzLTc1LjQxM2M4LjM0MS04LjM0MSwyMS44MjQtOC4zNDEsMzAuMTY1LDANCgkJCWM4LjM0MSw4LjMyLDguMzQxLDIxLjgyNCwwLDMwLjE2NWwtNzUuNDEzLDc1LjQxM0wzNjEuNDYxLDMzMS4zMTd6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=\">\n" +
                            "                                        </a>\n" +
                            "                                        \n" +
                            "                                        \n" +
                            "                                    </div>\n" +
                            "                                    <div style=\"background-color: #212e31;    border-radius: 0px 0px 3px 3px;width: 100%;text-align: center\">\n" +
                            "                                        <a href=\"" + e.target.result + "\" style=\"text-align: center\">\n" +
                            "                                            <span style=\"color: #fff\">عرض</span>\n" +
                            "                                        </a>\n" +
                            "                                    </div>\n" +
                            "                                </div>";

                    };

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/brothers/public_html/resources/views/products/edit.blade.php ENDPATH**/ ?>