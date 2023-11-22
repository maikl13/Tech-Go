<!DOCTYPE html>
<html lang="en">
<head>
    <title>لوحة التحكم</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"
          type="image/png"
          href="/themes/ar/default_theme/logo.ico">
    <!-- Refresh Design  -->

    <link href="/assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="{{url('/')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/assets/css/elements/alert.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/switches.css">
    <link href="/css/apexcharts.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/refresh_v1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/refresh_media.css')}}">
    @yield('head')
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="/"><font face="Tahoma">لوحة التحكم</font></a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
   
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
@include('layouts.left')




<main class="app-content">
    @section('content')
    @show
</main>
<!-- Essential javascripts for application to work-->
<script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('/js/popper.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/tinymce/tinymce.min.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('/js/plugins/pace.min.js')}}"></script>

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
@section('js')@show
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
</html>