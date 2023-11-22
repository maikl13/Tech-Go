<aside class="app-sidebar" id="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                                        src="https://i.imgur.com/s7eimIR.png"
                                        alt="Administator">
        <div>
            <center><p class="app-sidebar__user-name"><?php echo e(auth()->user()->name); ?></p>
                <p class="app-sidebar__user-designation">لوحة التحكم</p></center>
        </div>
    </div>
    <ul class="app-menu">


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">العيادات</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/clinics/active">
                        العيادات المفعلة</a></li>
                <li><a class="treeview-item" href="/admin/clinics/pending">العيادات قيد الموافقة</a></li>
                <li><a class="treeview-item" href="/admin/clinics/reject">العيادات المرفوضة</a></li>

                <li><a class="treeview-item" href="/admin/clinics/create/new">اضافة عيادة</a></li>
            </ul>
        </li>                        

    <li><a class="app-menu__item" href="/admin/medical_records"><i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">السجلات الطبية</span></a></li>    
                        
    <li><a class="app-menu__item" href="/admin/reservations"><i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">الحجوزات</span></a></li>    
                        
    <li><a class="app-menu__item" href="/admin/blog"><i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">المقالات</span></a></li> 
                        
    <li><a class="app-menu__item" href="/admin/teams"><i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">فريق العمل</span></a></li>                          
<!-- 
        <li><a class="app-menu__item" href="/admin/orders"><i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">الطلبيات</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-archive"></i><span
                        class="app-menu__label">المنتجات</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/products">
                        عرض جميع المتنجات</a></li>
                <li><a class="treeview-item" href="/admin/products_active/all/0">
                        عرض المنتجات الفعالة</a></li>
                <li><a class="treeview-item" href="/admin/products_inactive/all/0">
                        عرض المنتجات الغير فعالة</a></li>
                <li><a class="treeview-item" href="/admin/products/create">إضافة منتج</a></li>
            </ul>
        </li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-picture-o"></i><span
                        class="app-menu__label">عرض الشرائح</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/sliders">
                        عرض الشرائح</a></li>
                <li><a class="treeview-item" href="/admin/sliders/create">اضافة شريحة جديدة</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">الأقسام الرئيسية</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/superCategories">
                        عرض الأقسام الرئيسية</a></li>
                <li><a class="treeview-item" href="/admin/superCategories/create">إضافة قسم رئيسي</a></li>
            </ul>
        </li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list"></i><span
                        class="app-menu__label">الأقسام الفرعية</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/categories">
                        عرض الأقسام الفرعية</a></li>
                <li><a class="treeview-item" href="/admin/categories/create">إضافة قسم فرعي</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list"></i><span
                        class="app-menu__label">الأقسام الفرعية الفرعية</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/SubCategories">
                        عرض الأقسام الفرعية الفرعية</a></li>
                <li><a class="treeview-item" href="/admin/SubCategories/create">إضافة قسم فرعي فرعي</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-globe "></i><span
                        class="app-menu__label">المناطق الجغرافية</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/countries">
                        عرض المناطق الجغرافية</a></li>
                <li><a class="treeview-item" href="/admin/countries/create">إضافة منطقة جغرافية</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-map-marker"></i><span
                        class="app-menu__label">المدن</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/cities">
                        عرض المدن</a></li>
                <li><a class="treeview-item" href="/admin/cities/create">إضافة مدينة</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-map-signs"></i><span
                        class="app-menu__label">المناطق</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/areas">
                        عرض المناطق</a></li>
                <li><a class="treeview-item" href="/admin/areas/create">إضافة منطقة</a></li>
            </ul>
        </li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-money"></i><span
                        class="app-menu__label">كود الخصم</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/code">
                        عرض أكواد الخصم</a></li>
                <li><a class="treeview-item" href="/admin/code/create">إضافة كود خصم</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-files-o"></i><span
                        class="app-menu__label">التقارير</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/code">
                        تقرير الطلبيات</a></li>
                <li><a class="treeview-item" href="/admin/code/create">تقرير المنتجات</a></li>
                <li><a class="treeview-item" href="/admin/code/create">تقرير المستخدمين</a></li>
            </ul>
        </li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users"></i><span
                        class="app-menu__label">المستخدمين</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/users">
                        عرض المستخدمين</a></li>
                        <li><a class="treeview-item" href="/admin/users/dr/show">
                        عرض الاطباء</a></li>
                <li><a class="treeview-item" href="/admin/admins">عرض المسؤولين</a></li>
                <li><a class="treeview-item" href="/admin/users/create">اضافة مستخدم</a></li>
            </ul>
        </li>


        <li><a class="app-menu__item" href="/admin/promotions"><i class="app-menu__icon fa fa-bookmark-o"></i><span
                        class="app-menu__label">العروض</span></a></li>
        <li><a class="app-menu__item" href="/admin/drivers"><i class="app-menu__icon fa fa-motorcycle"></i><span
                        class="app-menu__label">السائقين</span></a></li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-bell"></i><span
                        class="app-menu__label">الاشعارات</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/notifications">
                        عرض الاشعارات</a></li>
                <li><a class="treeview-item" href="/admin/getNotificationName">ارسال اشعار</a></li>
            </ul>
        </li>

        <li><a class="app-menu__item" href="/admin/packages"><i class="app-menu__icon fa fa-inbox"></i><span
                        class="app-menu__label">فئات الأسعار</span></a></li>
        <li><a class="app-menu__item" href="/edit_user"><i class="app-menu__icon fa fa-user-circle"></i><span
                        class="app-menu__label">تعديل الحساب</span></a></li>


        <li><a class="app-menu__item" href="/admin/settings"><i class="app-menu__icon fa fa-cog"></i><span
                        class="app-menu__label">الإعدادات</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-refresh"></i><span
                        class="app-menu__label">المزامنه</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/sync/getConnection">اعدادات الاتصال</a></li>
                <li><a class="treeview-item" href="/admin/sync/getSyncPage">مزامنة البيانات</a></li>
                <li><a class="treeview-item" href="/admin/sync/imagesuploader">تحميل الصور</a></li>
            </ul>
        </li>

        <li><a class="app-menu__item" href="/admin/pages"><i class="app-menu__icon fa fa-file-o"></i><span
                        class="app-menu__label">الصفحات</span></a></li>
        <li><a class="app-menu__item" href="/admin/subscribe"><i class="app-menu__icon fa fa-envelope"></i><span
                        class="app-menu__label">الإشتراكات</span></a></li>
        <li><a class="app-menu__item" href="/admin/ads"><i class="app-menu__icon fa fa-link"></i><span
                        class="app-menu__label">الإعلانات</span></a></li>
        <li><a class="app-menu__item" href="/admin/faq"><i class="app-menu__icon fa fa-question-circle"></i><span
                        class="app-menu__label">الأسئلة الشائعة</span></a></li>
        <li><a class="app-menu__item" href="/admin/contact_us"><i class="app-menu__icon fa fa-commenting"></i><span
                        class="app-menu__label">الرسائل</span></a></li>
        <li><a class="app-menu__item" href="/admin/getViews"><i class="app-menu__icon fa fa-eye"></i><span
                        class="app-menu__label">الزيارات</span></a></li>
        <li><a class="app-menu__item" href="/admin/getSearch"><i class="app-menu__icon fa fa-search"></i><span
                        class="app-menu__label">البحوثات</span></a></li>

        
        
        
        
        
        
        <li><a class="app-menu__item" href="/admin/logout"><i class="app-menu__icon fa fa-sign-out"></i><span
                        class="app-menu__label">تسجيل الخروج</span></a></li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>
</aside><?php /**PATH /home/hajzakaltibi/public_html/resources/views/layouts/left.blade.php ENDPATH**/ ?>