<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Hatif Belal Khan</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/top-nav.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Top Navigation</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/top-nav-sidebar.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Top Navigation + Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/boxed.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Boxed</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/fixed-sidebar.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fixed Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/fixed-sidebar-custom.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fixed Sidebar <small>+ Custom Area</small></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/fixed-topnav.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fixed Navbar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/fixed-footer.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fixed Footer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ asset('admin/pages/layout/collapsed-sidebar.html') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Collapsed Sidebar</p>
                        </a>
                    </li>
                </ul>
                </li>

                <li class="nav-item">

                </li>
                <li class="nav-item">

                </li>
                <li class="nav-item">

                </li>
                <li class="nav-header">OPTIONS</li>



                <li class="nav-item">
                <li class="nav-item">
                    <a href="{{ url('/admin/customer/profile') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/seller/products') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Products</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ url('/admin/seller/profile') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sellers</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/contacts.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Manage Account</p>
                    </a>
                </li> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/logout') }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
