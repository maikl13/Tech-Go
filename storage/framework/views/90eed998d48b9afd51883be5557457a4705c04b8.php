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
          <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
          <link href="https://hajzakaltibi.tk/public/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="https://hajzakaltibi.tk/public/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		
		<link href="https://hajzakaltibi.tk/public/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  
    <?php echo $__env->yieldContent('head'); ?>
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="/"><font face="Tahoma">لوحة التحكم</font></a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
   
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<?php echo $__env->make('layouts.left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<main class="app-content">
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

<script src="https://hajzakaltibi.tk/public/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://hajzakaltibi.tk/public/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script>
            $("#datatable").DataTable({
        "aaSorting": [],
        "searching": false,
        
        "language":{
            "loadingRecords": "جارٍ التحميل...",
            "lengthMenu": "عرض _MENU_ عناصر",
            "zeroRecords": "لم يعثر على أية سجلات",
            "info": "عرض _START_ إلى _END_ من _TOTAL_ عنصر",
            "infoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
            "search": "البحث:",
            "paginate": {
                "first": "الأول",
                "previous": "السابق",
                "next": "التالي",
                "last": "الأخير"
            },
            "aria": {
                "sortAscending": ": تفعيل لترتيب العمود تصاعدياً",
                "sortDescending": ": تفعيل لترتيب العمود تنازلياً"
            },
            "select": {
                "rows": {
                    "_": "%d قيمة محددة",
                    "1": "1 قيمة محددة"
                },
                "cells": {
                    "1": "1 خلية محددة",
                    "_": "%d خلايا محددة"
                },
                "columns": {
                    "1": "1 عمود محدد",
                    "_": "%d أعمدة محددة"
                }
            },
            "buttons": {
                "print": "طباعة",
                "copyKeys": "زر <i>ctrl<\/i> أو <i>⌘<\/i> + <i>C<\/i> من الجدول<br>ليتم نسخها إلى الحافظة<br><br>للإلغاء اضغط على الرسالة أو اضغط على زر الخروج.",
                "pageLength": {
                    "-1": "اظهار الكل",
                    "_": "عرض %d أسطر"
                },
                "collection": "مجموعة",
                "copy": "نسخ",
                "copyTitle": "نسخ إلى الحافظة",
                "csv": "CSV",
                "excel": "Excel",
                "pdf": "PDF",
                "colvis": "عرض الأعمدة",
                "colvisRestore": "إستعادة العرض",
                "copySuccess": {
                    "1": "تم نسخ سطر واحد الى الحافظة",
                    "_": "تم نسخ %ds أسطر الى الحافظة"
                }
            },
            "autoFill": {
                "cancel": "إلغاء",
                "fill": "املأ جميع الحقول بـ <i>%d&lt;\\\/i&gt;<\/i>",
                "fillHorizontal": "تعبئة الحقول أفقيًا",
                "fillVertical": "تعبئة الحقول عموديا"
            },
            "searchBuilder": {
                "add": "اضافة شرط",
                "clearAll": "ازالة الكل",
                "condition": "الشرط",
                "data": "المعلومة",
                "logicAnd": "و",
                "logicOr": "أو",
                "title": [
                    "منشئ البحث"
                ],
                "value": "القيمة",
                "conditions": {
                    "date": {
                        "after": "بعد",
                        "before": "قبل",
                        "between": "بين",
                        "empty": "فارغ",
                        "equals": "تساوي",
                        "not": "ليس",
                        "notBetween": "ليست بين",
                        "notEmpty": "ليست فارغة"
                    },
                    "number": {
                        "between": "بين",
                        "empty": "فارغة",
                        "equals": "تساوي",
                        "gt": "أكبر من",
                        "gte": "أكبر وتساوي",
                        "lt": "أقل من",
                        "lte": "أقل وتساوي",
                        "not": "ليست",
                        "notBetween": "ليست بين",
                        "notEmpty": "ليست فارغة"
                    },
                    "string": {
                        "contains": "يحتوي",
                        "empty": "فاغ",
                        "endsWith": "ينتهي ب",
                        "equals": "يساوي",
                        "not": "ليست",
                        "notEmpty": "ليست فارغة",
                        "startsWith": " تبدأ بـ "
                    }
                },
                "button": {
                    "0": "فلاتر البحث",
                    "_": "فلاتر البحث (%d)"
                },
                "deleteTitle": "حذف فلاتر"
            },
            "searchPanes": {
                "clearMessage": "ازالة الكل",
                "collapse": {
                    "0": "بحث",
                    "_": "بحث (%d)"
                },
                "count": "عدد",
                "countFiltered": "عدد المفلتر",
                "loadMessage": "جارِ التحميل ...",
                "title": "الفلاتر النشطة",
                "showMessage": "عرض الجميع",
                "collapseMessage": "إخفاء الجميع"
            },
            "infoThousands": ",",
            "datetime": {
                "previous": "السابق",
                "next": "التالي",
                "hours": "الساعة",
                "minutes": "الدقيقة",
                "seconds": "الثانية",
                "unknown": "-",
                "amPm": [
                    "صباحا",
                    "مساءا"
                ],
                "weekdays": [
                    "الأحد",
                    "الإثنين",
                    "الثلاثاء",
                    "الأربعاء",
                    "الخميس",
                    "الجمعة",
                    "السبت"
                ],
                "months": [
                    "يناير",
                    "فبراير",
                    "مارس",
                    "أبريل",
                    "مايو",
                    "يونيو",
                    "يوليو",
                    "أغسطس",
                    "سبتمبر",
                    "أكتوبر",
                    "نوفمبر",
                    "ديسمبر"
                ]
            },
            "editor": {
                "close": "إغلاق",
                "create": {
                    "button": "إضافة",
                    "title": "إضافة جديدة",
                    "submit": "إرسال"
                },
                "edit": {
                    "button": "تعديل",
                    "title": "تعديل السجل",
                    "submit": "تحديث"
                },
                "remove": {
                    "button": "حذف",
                    "title": "حذف",
                    "submit": "حذف",
                    "confirm": {
                        "_": "هل أنت متأكد من رغبتك في حذف السجلات %d المحددة؟",
                        "1": "هل أنت متأكد من رغبتك في حذف السجل؟"
                    }
                },
                "error": {
                    "system": "حدث خطأ ما"
                },
                "multi": {
                    "title": "قيم متعدية",
                    "restore": "تراجع"
                }
            },
            "processing": "جارٍ المعالجة...",
            "emptyTable": "لا يوجد بيانات متاحة في الجدول",
            "infoEmpty": "يعرض 0 إلى 0 من 0 مُدخل",
            "thousands": ".",
            "stateRestore": {
                "creationModal": {
                    "columns": {
                        "search": "إمكانية البحث للعمود",
                        "visible": "عرض العمود"
                    },
                    "toggleLabel": "تتضمن"
                }
            }
        } 
    }) 
    </script>
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
</html><?php /**PATH /home/hajzakaltibi/public_html/resources/views/layouts/template.blade.php ENDPATH**/ ?>