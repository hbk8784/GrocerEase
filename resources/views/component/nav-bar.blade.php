<link rel="stylesheet" href="{{ asset('css/nav-bar.css') }}">


<div class="main-nav-container" id="main-nav-container"> {{-- main container --}}

    <nav class="nav-container">
        <p class="bi-list" id="sandwi-icon"></p>
        <div class="logo-container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="logo-img">
            </a>

        </div>

        <div class="main-catagroy-container">
            <div class="catagory-container">
                <select name="catagory" class="catagory">
                    <option value="all">ALL CATEGORIES</option>
                    <option value="breads-sweets">Sweets</option>
                    <option value="coffees-teas">Snacks</option>
                    <option value="food-cupboard">Beverages</option>
                    <option value="frozen-seafoods">Fruits & Vegetables</option>

                    <option value="milk-daries">Beauty & Hygiene</option>
                    <option value="pet-foods">Cleaning & Household</option>
                </select>
            </div>

            <form action="" method="" class="search-bar">
                <input type="text" placeholder="I'm searching for..." size="30">
                <button class="bi-search"></button>
            </form>

        </div>

        <div class="support">
            <h2>62904 65395</h2>
            <h5>support 24/7</h5>
        </div>

        <div class="profile">
            <a href="/login" class="bi-person" id="person"></a>
            <a href="{{ url('/customer/wishlist') }}" class="bi-heart"></a>
            <a href="{{ url('/customer/cart') }}" class="bi-cart"></a>
        </div>

        <div class="profile-toggle" id="profile-toggle">
            @if (@Session('usersInfo'))
                <Span>Welcome, </Span>
            @endif

            <span>{{ @Session('usersInfo')['firstName'] }}</span><br>
            <a href="{{ url('/customer/profile') }}">Profile</a><br>
            <a href="{{ url('/customer/order/current') }}">Orders</a><br>
            <a href="{{ url('customer/order/history') }}">History</a><br>
            @if (@Session('usersInfo'))
                <a href="{{ url('/logout') }}">Logout</a>
            @else
                <a href="{{ url('/register') }}">Register / </a>
                <a href="{{ url('/login') }}">Login</a>
            @endif
        </div>

        <p class="bi-search" id="responsive-search-icon"></p>
</div>
</nav>

<br>
<hr>
<div class="nav2-container">
    <div class="nav2-group">
        <div class="sandwi-category" id="sandwi-category">
            <button class="bi-border-width"> SHOP BY CATEGORY</button>
        </div>
        <div class="deals">
            <a href="" class="bi-lightning-charge">Deals Today</a>
            <a href="" class="bi-tag">Special Prices</a>
        </div>
    </div>
    <br>
    <ul class="option" id="option">
        <li><a href="">Sweets</a></li>
        <hr>
        <li><a href="">Snack</a></li>
        <hr>
        <li><a href="">Beverages</a></li>
        <hr>
        <li><a href="">Fruites & Vegetables</a></li>
        <hr>
        <li><a href="">Beauty & Hygiene</a></li>
        <hr>
        <li><a href="">Cleaning & Household</a></li>
    </ul>

</div>
<script src="{{ asset('script/nav-bar.js') }}"></script>
</div>
