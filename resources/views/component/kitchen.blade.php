<link rel="stylesheet" href="{{ asset('css/kitchen.css') }}">

@php
    $kitchent = 'kitchen tools';
    $stationary = 'stationary';
    $storages = 'storage solutions';
    $batterye = 'battery electricals';
@endphp

<h3>Home & Kitchen Essentials</h3>

<section class="kitchen-container">
    <div>
        <img src="{{ asset('image/kitchen-tools.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $kitchent) }}">Kitchen tools</a></p>
    </div>
    <div>
        <img src="{{ asset('image/stationary.png') }}" alt="">
        <p><a href="{{ url('products/sub/' . $stationary) }}">Stationary</a></p>
    </div>
    <div> <img src="{{ asset('image/storage.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $storages) }}">Storage Solutions</a></p>
    </div>
    <div>
        <img src="{{ asset('image/battery.webp') }}" alt="">
        <p><a href="{{ url('products/sub/' . $batterye) }}">Battery & Electricals</a></p>
    </div>
</section>
