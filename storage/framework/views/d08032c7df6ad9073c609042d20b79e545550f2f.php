<?php $__env->startSection('content'); ?>
    <div class="text-muted f-w-400">
        <h1 style="color:#333">
            <center>إضافة منتج</center>
        </h1>
    </div>
    <div class="container" style="margin-top: 20px">

        <form method="POST" class="row" action="<?php echo e(action('ProductsController@store')); ?>"
              enctype='multipart/form-data'>
            <?php echo csrf_field(); ?>
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="text-muted f-w-400">
                            <h3 style="color:#333">تفاصيل أساسية</h3>
                        </div>

                        <input type="text" name="name" required placeholder="اسم المنتج" class="form-control" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>/>
                        <label>القسم الرئيسي :</label>
                        <select name="super_category" required class="form-control" id="super_category_id" <?php if(env('ACCOUNTING_CONNECT', 'no') == 'yes'): ?> readonly <?php endif; ?>>

                            <option value="0">إختيار القسم الرئيسي</option>
                            <?php $__currentLoopData = $super_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label>القسم الفرعي :</label>
                        <select name="category_id" required class="form-control" id="category_id">
                            <option value="0">إختيار القسم الفرعي</option>
                        </select>
                        <label>القسم الفرعي الفرعي :</label>
                        <select name="sub_category_id" required class="form-control" id="sub_category_id">
                            <option value="0">إختيار القسم الفرعي</option>
                        </select>
                        <label>تفاصيل المنتج :</label>
                        <textarea required name="note" placeholder="تفاصيل المنتج" class="form-control"></textarea>

                        
                        
                               

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

                                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><label><?php echo e($c->name); ?></label></td>
                                        <td><input type="number" id="inlineCheckbox1" value="0" step="0.01"
                                                   name="prices[]"></td>
                                        <input type="hidden" id="inlineCheckbox1" value="<?php echo e($c->id); ?>"
                                               name="number[]">
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>


                        </div>


                        <label>الكمية :</label>
                        <input type="number" name="qty" value="0" class="form-control" required
                               placeholder="الكمية"/>
                        <label>صور المنتج :</label>
                        <input type="file" name="image[]" multiple class="form-control"
                               accept="image/*" required>
                        <label>الصورة المصغرة : </label>
                        <input type="file" name="small_image" class="form-control"
                               accept="image/*" required>
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
                                <input type="checkbox" id="inlineCheckbox1" name="active" checked>
                                <label class="form-check-label" for="inlineCheckbox1">فعال</label>
                            </div>
                            <div class="form-check" style="margin-top: 10px">
                                <input type="checkbox" id="inlineCheckbox1" name="is_new">
                                <label class="form-check-label" for="inlineCheckbox1">عرض بقسم الجديد</label>
                            </div>
                            <label>فيديو يوتيوب : </label>
                            <input type="text" name="video_youtube" placeholder="فيديو يوتيوب"
                                   class="form-control"/>
                            <label>بداية السلايدر :</label>
                            <input type="date" name="start_feature" class="form-control"/>
                            <label>نهاية السلايدر :</label>
                            <input type="date" name="end_feature" class="form-control"/>
                            <label>صورة السلايدر :</label>
                            <input type="file" name="image_slide" multiple class="form-control"
                                   accept="image/*">
                            <label>السعر المشطوب :</label>
                            <input type="number" name="del_price" class="form-control" placeholder="السعر المشطوب"/>
                            <label>سعر التكلفة :</label>
                            <input type="number" name="basic_price" class="form-control" placeholder="سعر التكلفة"/>
                            <label>الباركود :</label>
                            <input type="number" name="barcode" class="form-control" placeholder="الباركود"/>
                            <label>الموديل :</label>
                            <input type="text" name="model" class="form-control" placeholder="الموديل"/>
                            <label>بداية الخصم :</label>
                            <input type="date" name="start_offer" class="form-control"/>
                            <label>نهاية الخصم :</label>
                            <input type="date" name="end_offer" class="form-control"/>
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
                            <?php for($i=1;$i<=10;$i++): ?>
                                <tr>
                                    <td><input type="text" class="form-control" name="key[[<?php echo e($i); ?>]]"
                                               placeholder=" اسم الفئة <?php echo e($i); ?>">
                                    </td>
                                    <td><input type="text" class="form-control" name="value[[<?php echo e($i); ?>]]"
                                               placeholder="القيمة <?php echo e($i); ?> "></td>
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
                               placeholder="العنوان الرئيسي"/>
                        <table class="table" id="table_product_details" style="margin-top: 20px;">


                            <tbody class="orders-data-body">
                            <?php for($i=1;$i<=10;$i++): ?>
                                <tr>
                                    <td><input type="text" class="form-control" name="det[[<?php echo e($i); ?>]]"
                                               placeholder="إسم التفصيلة">
                                    </td>
                                    <td><input type="text" class="form-control" name="qty_det[[<?php echo e($i); ?>]]"
                                               placeholder="الكمية">
                                    </td>
                                    <td><input type="number" class="form-control" name="price_det[[<?php echo e($i); ?>]]"
                                               placeholder="زيادة على السعر"></td>
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
            $('#category_id').on('change', function (e) {
                var valueSelected = this.value;
                var selectElem = $("#mySelect");
                $.getJSON("/getSubCategories/" + valueSelected, function (data) {
                    $('#sub_category_id').find('option').remove().end().append('<option value="">إختيار القسم الفرعي الفرعي</option>').val('0');
                    $.each(data, function (index, value) {
                        $("#sub_category_id").append(new Option(value.name, value.id));

                    });

                });

            });
        });


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hajzakaltibi/public_html/resources/views/products/create.blade.php ENDPATH**/ ?>