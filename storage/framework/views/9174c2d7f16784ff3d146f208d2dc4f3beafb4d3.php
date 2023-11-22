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


    <li><a class="app-menu__item" href="/admin/about"><i class="app-menu__icon fa fa-bars"></i><span
                        class="app-menu__label">من نحن</span></a></li> 
                        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">البرامج</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/programs?type=youth">
                        برامج تثقيف الشباب</a></li>
                <li><a class="treeview-item" href="/admin/programs?type=education">برامج التعليم الامنهجية</a></li>

            </ul>
        </li> 



        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">شركاؤنا</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/teams">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/teams/create">اضافة</a></li>

            </ul>
        </li> 

        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">الاستبيان</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/faq">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/faq/create">اضافة</a></li>

            </ul>
        </li> 

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">النشرة الاخبارية</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/news">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/news/create">اضافة</a></li>

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
                <!-- <li><a class="treeview-item" href="/admin/superCategories">التصنيفات</a></li> -->
            </ul>
        </li>


        <!-- <li><a class="app-menu__item" href="/admin/faq"><i class="app-menu__icon fa fa-question-circle"></i><span
                        class="app-menu__label">الأسئلة الشائعة</span></a></li> -->
        
        
        <li><a class="app-menu__item" href="/admin/messages"><i class="app-menu__icon fa fa-question-circle"></i><span
                        class="app-menu__label">الرسائل</span></a></li>                        
        

        <li><a class="app-menu__item" href="/admin/users/<?php echo e(auth()->user()->id); ?>/edit"><i class="app-menu__icon fa fa-user-circle"></i><span
                        class="app-menu__label">تعديل الحساب</span></a></li>


        <li><a class="app-menu__item" href="/admin/settings"><i class="app-menu__icon fa fa-cog"></i><span
                        class="app-menu__label">الإعدادات</span></a></li>




        <li><a class="app-menu__item" href="/admin/logout"><i class="app-menu__icon fa fa-sign-out"></i><span
                        class="app-menu__label">تسجيل الخروج</span></a></li>

        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">معرض الصور</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/gallery">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/gallery/create">اضافة</a></li>

            </ul>
        </li> -->  
        
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ol"></i><span
                        class="app-menu__label">الشرائح</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/admin/sliders">
                        عرض</a></li>
                <li><a class="treeview-item" href="/admin/sliders/create">اضافة</a></li>

            </ul>
        </li>                         -->        
 
    </ul>
</aside><?php /**PATH C:\laragon\www\charity\resources\views/layouts/left.blade.php ENDPATH**/ ?>