<link rel="stylesheet" href="{{ asset('css/best.css') }}">

<h3 class="best-seller-h3">Best Sellers</h3>
<section class="best-seller-container">
    <i class="bi-chevron-left" id="left"></i>


    <div class="products-container">

        @foreach ($bestSeller as $best)
            <div class="products">
                <img style="width:12rem; height: 12rem" src="{{ asset('storage/' . $best->image) }}" alt="">
                <hr>
                <form action="">
                    <p style="font-size: 1.2rem" class="brand">{{ $best->brand }}</p>
                    <p>{{ $best->name }}</p>
                    <p>Rs: {{ $best->price }} / <span>{{ $best->weight }}</span></p>
                    <label for="qty">Qty</label>
                    <input type="number" name="qty" id="qty" style="width:50px" min="1">
                    <a href=""><button>Add</button></a>
                </form>
            </div>
        @endforeach

    </div>

    <i class="bi-chevron-right" id="right"></i>
    <script src="{{ asset('script/best.js') }}"></script>
</section><br><br>
