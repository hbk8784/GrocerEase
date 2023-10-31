<link rel="stylesheet" href="{{ asset('css/best.css') }}">

<h3 class="best-seller-h3">Best Sellers</h3>
<section class="best-seller-container">
    <i class="bi-chevron-left" id="left"></i>


    <div class="products-container">

        @foreach ($on_bestSeller as $best)
            <div class="products">
                <img style="width:12rem; height: 12rem" src="{{ asset('storage/' . $best->image) }}" alt="">
                <hr>
                <div>
                    <p style="font-size: 1.2rem" class="brand">{{ $best->brand }}</p>
                    <p>{{ $best->name }}</p>
                    <p>&#8377 {{ $best->price }} / <span>{{ $best->weight }}</span></p>

                    <div class="products-form">

                        <form class="form1" action="{{ url('/customer/cart/' . $best->pid) }}" method="POST">
                            @csrf
                            <label for="qty">Qty:</label>
                            <input type="number" min="1" name="qty" id="qty" style="width: 3rem;">
                            <button type="submit" class="bi bi-cart"></button>
                        </form>

                        <form action="{{ url('/customer/wishlist/' . $best->pid) }}" method="POST">
                            @csrf
                            <button type="submit" class="bi bi-heart"></button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <i class="bi-chevron-right" id="right"></i>
    <script src="{{ asset('script/best.js') }}"></script>
</section><br><br>
