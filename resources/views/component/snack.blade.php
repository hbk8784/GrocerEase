<link rel="stylesheet" href="{{ asset('css/snack.css') }}">

@php
    $biscutesc = 'biscutes cookies';
    $chipsn = 'chips nachos';
    $chocolate = 'chocolate';
    $pastas = 'pasta sauce';
@endphp

<h3 class="snack-h3">Snack Store</h3>
<section class="snack-container">
    <div>
        <img src="{{ asset('image/nachose.webp') }}" alt="">
        <p><a href="{{ url('products/sub/' . $chipsn) }}">Chips and Nachos</a></p>
    </div>

    <div>
        <img src="{{ asset('image/biscuits.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $biscutesc) }}">Biscutes and Cookies</a></p>
    </div>

    <div>
        <img src="{{ asset('image/pasta.jpg') }}" alt="">
        <p><a href="{{ url('products/sub/' . $pastas) }}">Pasta and Sauce</a></p>
    </div>

    <div>
        <img src="{{ asset('image/chocolate.webp') }}" alt="">
        <p><a href="{{ url('products/sub/' . $chocolate) }}">Chocolates</a></p>
    </div>

</section>
