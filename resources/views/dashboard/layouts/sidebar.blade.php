<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="">
                <a href="{{ url('dashboard/users') }}">
                    <i class="fa fa-dashboard"></i> <span> لوحه التحكم</span>
                </a>
            </li>

            <!--  this section for add tables -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>المستخدمين</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/users/create ')}}"><i class="fa fa-user-plus"></i>أضافه مستخدم</a></li>
                    <li class=""><a href="{{ url('dashboard/users') }}"><i class="fa fa-list"></i>الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>الأقسام</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/departments/create ')}}"><i class="fa fa-plus"></i>أضافه قسم</a></li>
                    <li class=""><a href="{{ url('dashboard/departments') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>الخدمات</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/services/create ')}}"><i class="fa fa-plus"></i>أضافه خدمه</a></li>
                    <li class=""><a href="{{ url('dashboard/services') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>المدن</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/cites/create ')}}"><i class="fa fa-plus"></i>أضافه مدينه</a></li>
                    <li class=""><a href="{{ url('dashboard/cites') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li> --}}

            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>GOVERNORATES</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/governorates/create ')}}"><i class="fa fa-plus"></i>ADD GOVERNORATES</a></li>
                    <li class=""><a href="{{ url('dashboard/governorates') }}"><i class="fa fa-list"></i> LIST</a></li>
                </ul>
            </li> --}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>درجه الطبيب</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/docDegrees/create ')}}"><i class="fa fa-plus"></i>اضافه درجه الطبيب</a></li>
                    <li class=""><a href="{{ url('dashboard/docDegrees') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>تخصص الطبيب</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/docSpecialties/create ')}}"><i class="fa fa-plus"></i>أضافه تخصص الطبيب</a></li>
                    <li class=""><a href="{{ url('dashboard/docSpecialties') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>المرحله الدراسيه</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/levels/create ')}}"><i class="fa fa-plus"></i>أضافه مرحله</a></li>
                    <li class=""><a href="{{ url('dashboard/levels') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>الصف الدراسى</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/groups/create ')}}"><i class="fa fa-plus"></i>أضافه صف دراسى</a></li>
                    <li class=""><a href="{{ url('dashboard/groups') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>الماده الدراسيه</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/subjects/create ')}}"><i class="fa fa-plus"></i>أضافه ماده</a></li>
                    <li class=""><a href="{{ url('dashboard/subjects') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <!-- End This section For add Tables-->

            {{-- <li class="header"><hr></li> --}}


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span> المواصلات</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/cars') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>العيادات</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/clinic') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>الملابس</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/clothes') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>الاطباء</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/doctors') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>مراكز الصيانه</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/maintenance') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>سوبر ماركيت</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/markets') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>المطاعم</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/restaurants') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>المدرسين</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/techer') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>النقل</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class=""><a href="{{ url('dashboard/categories/create ')}}"><i class="fa fa-plus"></i>ADD CATEGORIES</a></li> --}}
                    <li class=""><a href="{{ url('dashboard/transports') }}"><i class="fa fa-list"></i> الكل</a></li>
                </ul>
            </li>

            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashcube"></i> <span>المدينه</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{ url('dashboard/sub_categories/create ')}}"><i class="fa fa-plus"></i>ADD SUB CATEGORIES</a></li>
                    <li class=""><a href="{{ url('dashboard/cites') }}"><i class="fa fa-list"></i> LIST</a></li>
                </ul>
            </li> --}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
