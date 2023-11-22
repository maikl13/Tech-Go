<!DOCTYPE html>
<html lang="en">
<head>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <title>لوحة التحكم</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/main.css')); ?>">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"
          type="image/png"
          href="/public/themes/ar/default_theme/logo.ico">
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="/areas"><font face="Tahoma">لوحة التحكم</font></a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

</header>
<!-- Sidebar menu-->






<main class="app-content" style="margin-right:0px">
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
</main>
<!-- Essential javascripts for application to work-->
<script src="<?php echo e(asset('public/js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/tinymce/tinymce.min.js')); ?>"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="<?php echo e(asset('public/js/plugins/pace.min.js')); ?>"></script>


<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }

</script>
<?php $__env->startSection('js'); ?><?php echo $__env->yieldSection(); ?>
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
<script>
    $(document).ready(function(){


        $('.app-sidebar__toggle').on('click', function (e) {
            $("#app-sidebar").css("display!important", "none");
            // alert("click")
            var isblock = document.getElementById("app-sidebar").style.display == "block";

            // if(!isblock)
            // {
            // }else {
            //     $(".app-sidebar").css("display!important", "block");
            // }

        });
    });
</script>
</body>
</html><?php /**PATH /home/hajzakaltibi/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>