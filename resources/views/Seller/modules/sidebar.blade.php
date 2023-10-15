<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> Seller | Dashboard </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#ecommerce" data-toggle="collapse" aria-expanded="true">
                    <div class="">
                        <h1 class="bi bi-person-workspace"></h1>
                        <span>Hatif Belal Khan</span>
                    </div>
                </a>
                <hr>
                <ul class="collapse submenu list-unstyled show" id="ecommerce" data-parent="#accordionExample">
                    <li class="active">
                        <a href="{{ url('/seller/dashboard') }}"> Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ url('/seller/orders') }}"> Orders </a>
                    </li>
                    <li>
                        <a href="{{ url('/seller/products') }}"> Products </a>
                    </li>

                    <li>
                        <a href="{{ url('/seller/add/product') }}"> Add Products </a>
                    </li>

                    <li>
                        <a href="{{ url('/seller/view/payment') }}"> View Payments </a>
                    </li>
                    <li>
                        <a href="{{ url('/seller/view/customers') }}"> View Customers </a>
                    </li>
                    <li>
                        <a href="{{ url('seller/invoice') }}"> Invoice </a>
                    </li>
                    <li>
                        <a href="ecommerce_invoices.html"> Logout </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
