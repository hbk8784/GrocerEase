<link rel="stylesheet" href="{{ asset('css/hero-img.css') }}">

<div class="hero-img">

    <section class="ad-fit">

        @foreach ($hero as $item)
            <div class="ad1">
                <img src="{{ asset('storage/' . $item->image) }}" alt="juice-box">
                <div class="ad1-desc">
                    <button>Shop Now</button>
                </div><br>
            </div>
        @endforeach
    </section>
</div>

{{-- style="background-image: url('{{ asset('background.jpeg')}}');" --}}
