<link rel="stylesheet" href="{{ asset('css/nav-bar.css') }}">


<div class="main-nav-container" id="main-nav-container"> {{-- main container --}}

    <nav class="nav-container">
        <p class="bi-list" id="sandwi-icon"></p>
        <div class="logo-container">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="logo-img">
        </div>

        <div class="main-catagroy-container">
            <div class="catagory-container">
                <select name="catagory" class="catagory">
                    <option value="all">ALL CATEGORIES</option>
                    <option value="breads-sweets">Breads Sweets</option>
                    <option value="coffees-teas">Coffees and Teas</option>
                    <option value="food-cupboard">Food Cupboard</option>
                    <option value="frozen-seafoods">Frozen Seafoods</option>
                    <option value="fruits-vegetables">Fruits & Vegetables</option>
                    <option value="milk-daries">Milks and Dairies</option>
                    <option value="pet-foods">Pet Foods</option>
                    <option value="raw-meats">Raw Meats</option>
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
            <a href="" class="bi-person" id="person"></a>
            <a href="" class="bi-heart"></a>
            <a href="" class="bi-cart"></a>
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
        <li><a href="">Breads Sweets</a></li>
        <hr>
        <li><a href="">Coffees and Teas</a></li>
        <hr>
        <li><a href="">Food Cupboard</a></li>
        <hr>
        <li><a href="">Frozen Seafoods</a></li>
        <hr>
        <li><a href="">Fruits & Vegetables</a></li>
        <hr>
        <li><a href="">Milks and Dairies</a></li>
        <hr>
        <li><a href="">Pet Foods</a></li>
        <hr>
        <li><a href="">Raw Meats</a></li>
    </ul>

</div>
<script src="{{ asset('script/nav-bar.js') }}"></script>
</div>
