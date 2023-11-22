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
                        class="app-menu__label">الشرائح</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/sliders">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/sliders/create">اضافة</a></li>

            </ul>
        </li>                        

    <li><a class="app-menu__item" href="/admin/about"><i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">من نحن</span></a></li> 
                        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">الفيديوهات</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/videos">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/videos/create">اضافة</a></li>

            </ul>
        </li> 


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">الفروع</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/branches">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/branches/create">اضافة</a></li>

            </ul>
        </li> 

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">قصص النجاح</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/stories">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/stories/create">اضافة</a></li>

            </ul>
        </li> 

        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">مميزاتنا</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/features">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/features/create">اضافة</a></li>

            </ul>
        </li> 

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">التقييمات</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/reviews">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/reviews/create">اضافة</a></li>

            </ul>
        </li> 

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">انجازاتنا</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/numbers">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/numbers/create">اضافة</a></li>

            </ul>
        </li> 


        <li><a class="app-menu__item" href="/admin/faq"><i class="app-menu__icon fa fa-question-circle"></i><span
                        class="app-menu__label">الأسئلة الشائعة</span></a></li>
        
        
        <li><a class="app-menu__item" href="/admin/medicalrequests"><i class="app-menu__icon fa fa-question-circle"></i><span
                        class="app-menu__label">طلبات الاستشارات</span></a></li>                        
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">معرض الصور</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/gallery">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/gallery/create">اضافة</a></li>

            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">المقالات</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/blog">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/blog/create">اضافة</a></li>
                <li><a class="treeview-item" href="/admin/superCategories">التصنيفات</a></li>
            </ul>
        </li>


                        

        <li><a class="app-menu__item" href="/edit_user"><i class="app-menu__icon fa fa-user-circle"></i><span
                        class="app-menu__label">تعديل الحساب</span></a></li>


        <li><a class="app-menu__item" href="/admin/settings"><i class="app-menu__icon fa fa-cog"></i><span
                        class="app-menu__label">الإعدادات</span></a></li>




        <li><a class="app-menu__item" href="/admin/logout"><i class="app-menu__icon fa fa-sign-out"></i><span
                        class="app-menu__label">تسجيل الخروج</span></a></li>
 
    </ul>
</aside><?php /**PATH C:\laragon\www\dradel\resources\views/layouts/left.blade.php ENDPATH**/ ?>