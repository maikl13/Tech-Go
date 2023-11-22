<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <form class="club-form" action="<?php echo e(action('PackageController@store')); ?>" method="post"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="col-md-12">
                            <label>اسم الفئة</label>
                            <input type=text" class="col-md-12 form-control" name="name" placeholder="إسم فئة"
                                   style="text-align:center;" required>
                        </div>


                        <div class="form-check" style="margin-top: 10px">
                            <input type="checkbox" id="inlineCheckbox1" name="default">
                            <label class="form-check-label" for="inlineCheckbox1">افتراضي</label>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit" style="margin: 10px;"><i
                                            class="fa fa-fw fa-lg fa-check-circle"></i>حفظ
                                </button>
                            </div>
                        </div>


                    </form>


                    <p style="color: rgb(255,69,52)">في حال كان متجرك مرتبط ببرنامج المحاسبة يرجى عدم إضافة فئة جديدة</p>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyA2BeSa8JVMwYm-g6TQHeZ24PfSuumvztc",
            authDomain: "abuzina-fb13e.firebaseapp.com",
            databaseURL: "https://abuzina-fb13e.firebaseio.com",
            projectId: "abuzina-fb13e",
            storageBucket: "abuzina-fb13e.appspot.com",
            messagingSenderId: "118295257421",
            appId: "1:118295257421:web:69d334020aa53b9a"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xmarket/public_html/resources/views/packages/create.blade.php ENDPATH**/ ?>