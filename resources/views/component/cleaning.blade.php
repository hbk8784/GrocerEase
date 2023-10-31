<link rel="stylesheet" href="{{ asset('css/cleaning.css') }}">

@php
    $cleaners = 'cleaners';
    $detergent = 'detergent';
    $fresheners = 'fresheners';
    $kitchenw = 'kitchen wipes';
@endphp

<h3>Cleaning & Household</h3>

<section class="cleaning-container">
    <div>
        <img src="{{ asset('image/detergent.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $detergent) }}">Detergent</a></p>
    </div>
    <div>
        <img src="{{ asset('image/cleaner.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $cleaners) }}">Cleaners</a></p>
    </div>
    <div>
        <img src="{{ asset('image/freshner.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $fresheners) }}">Fresheners</a></p>
    </div>
    <div>
        <img src="{{ asset('image/wipes.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $kitchenw) }}">Kitchen Wipes</a></p>
    </div>
</section>
