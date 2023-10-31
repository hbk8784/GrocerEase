<link rel="stylesheet" href="{{ asset('css/browse-by-category.css') }}">

@php
    $homeKitchen = 'home kitchen';
    $sanck = 'sanck';
    $beverages = 'beverages';
    $fandv = 'fruits vegetables';
    $bandh = 'beauty hygiene';
    $candh = 'cleaning household';
@endphp

<h3 class="brows-by-cat-h3">Browse by Category</h3>
<section class="browse-by-category-container">
    <div class="browse-by-category-wrapper">
        <div>
            <img src="{{ asset('image/sweets.png') }}" alt="sweets">
            <p><a href="{{ url('products/' . $homeKitchen) }}">Home & Kitchen</a></p>
        </div>

        <div>
            <img src="{{ asset('image/snack.png') }}" alt="">
            <p><a href="{{ url('products/' . $sanck) }}">Snack</a></p>
        </div>
        <div>
            <img src="{{ asset('image/beverage.png') }}" alt="">
            <p><a href="{{ url('products/' . $beverages) }}">Beverages</a></p>
        </div>
        <div>
            <img src="{{ asset('image/fruits.png') }}" alt="">
            <p><a href="{{ url('products/' . $fandv) }}">Fruites & Vegetables</a></p>
        </div>
        <div>
            <img src="{{ asset('image/beauty.png') }}" alt="">
            <p><a href="{{ url('products/' . $bandh) }}">Beauty & Hygiene</a></p>
        </div>
        <div>
            <img src="{{ asset('image/household.png') }}" alt="">
            <p><a href="{{ url('products/' . $candh) }}">Cleaning & Household</a></p>
        </div>
    </div>

</section>
