<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
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
                    <a href="{{ asset('admin/pages/calendar.htm') }}l" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('admin/pages/mailbox/mailbox.html') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('admin/pages/mailbox/compose.html') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('admin/pages/mailbox/read-mail.html') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/invoice.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoices</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/profile.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/e-commerce.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>GrocerEase</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/projects.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Products</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/project-edit.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product Edit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/project-detail.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Products Detail</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('admin/pages/examples/contacts.html') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sellers</p>
                    </a>
                </li>
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
