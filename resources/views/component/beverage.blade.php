<link rel="stylesheet" href="{{ asset('css/beverage.css') }}">

@php
    $coffee = 'coffee';
    $juice = 'juice';
    $softd = 'soft drink';
    $tea = 'tea';
@endphp

<h3 class="beverage-h3">Beverages</h3>
<section class="beverage-container">
    <div>
        <img src="{{ asset('image/softdrink.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $softd) }}">Soft Drink</a></p>
    </div>

    <div>
        <img src="{{ asset('image/tea.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $tea) }}">Tea</a></p>
    </div>

    <div>
        <img src="{{ asset('image/coffee.webp') }}" alt="">
        <p><a href="{{ url('products/sub/' . $coffee) }}">Coffee</a></p>
    </div>

    <div>
        <img src="{{ asset('image/juice.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $juice) }}">Juice</a></p>
    </div>

</section>
