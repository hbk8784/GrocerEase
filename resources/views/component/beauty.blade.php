<link rel="stylesheet" href="{{ asset('css/beauty.css') }}">

@php
    $antia = 'anti ageing';
    $bathinge = 'bathing essentials';
    $makeup = 'makeup';
    $moisturiserss = 'moisturisers serums';
    $sentfulp = 'sentful perfumes';
@endphp

<h3 class="beaury-h3">Beauty & Hygiene</h3>
<section class="beauty-container">

    <div class="b-hero-img">
        <img src="{{ asset('image/makeup.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $makeup) }}">Makeup</a></p>
    </div>
    <div class="b-options">
        <div>
            <img src="{{ asset('image/anti-ageing.png') }}" alt="">
            <p><a href="{{ url('products/sub/' . $antia) }}">Anti-Ageing</a></p>
        </div>
        <div>
            <img src="{{ asset('image/perfumes.jpg') }}" alt="">
            <p><a href="{{ url('products/sub/' . $sentfulp) }}">Sentful Perfumes</a></p>
        </div>
        <div>
            <img src="{{ asset('image/bathing.webp') }}" alt="">
            <p><a href="{{ url('products/sub/' . $bathinge) }}">Bathing Essentials</a></p>
        </div>
        <div>
            <img src="{{ asset('image/Moisturisers.webp') }}" alt="">
            <p><a href="{{ url('products/sub/' . $moisturiserss) }}">Moisturisers & Serums</a></p>
        </div>
    </div>
</section>
