<link rel="stylesheet" href="{{ asset('css/fruits-vegetable.css') }}">

@php
    $sfv = 'seasonal fruits vegetable';
    $freshf = 'fresh fruits';
    $freshv = 'fresh vegetable';
    $herbss = 'herbs seasonings';
    $exoticfv = 'exotic fruits vegetables';
@endphp

<h3 class="fruit-veg-h3">Fruits & Vegetable</h3>
<section class="fruits-vegetable-container"> <!-- main container -->

    <div class="f-v-hero-img"> <!-- hero image container -->
        <img src="{{ asset('image/seasonal.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $sfv) }}">Seasonal Fruits & Vegetable</a></p>
    </div>

    <div class="f-v-options"> <!-- categroy container -->
        <div>
            <img src="{{ asset('image/carrot.jpg') }}" alt="">
            <p><a href="{{ url('products/sub/' . $freshv) }}">Fresh Vegetable</a></p>
        </div>
        <div>
            <img src="{{ asset('image/Apple-Babanas.jpg') }}" alt="">
            <p><a href="{{ url('products/sub/' . $freshf) }}">Fresh Fruits</a></p>
        </div>
        <div>
            <img src="{{ asset('image/DHANIA-SEEDS.jpg') }}" alt="">
            <p><a href="{{ url('products/sub/' . $herbss) }}">Herbs & Seasonings</a></p>
        </div>
        <div>
            <img src="{{ asset('image/exotic-fruits.jpg') }}" alt="">
            <p><a href="{{ url('products/sub/' . $exoticfv) }}">Exotic Fruits & Vegetables</a></p>
        </div>
    </div>
</section>
