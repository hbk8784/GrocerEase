<link rel="stylesheet" href="{{ asset('css/products-c.css') }}">

<div class="current-page-main-container" style="width: 100%; height: 8rem; background-color: #e0e0e0;; color: white">
    <div class="current-page-container">
        <a class="current-page1" href="" style="color:black">Home</a>
        /
        <a class="current-page2" href="" style="color:black">Products</a>
    </div>

</div>

<section class="products-main-container">

    <aside class="sidemenu-container">
        <h3>Categories</h3>
        <ul>
            <li><a href="">All</a></li>
            <li><a href="">Sweets</a></li>
            <li><a href="">Snack</a></li>
            <li><a href="">Beverages</a></li>
            <li><a href="">Fruits & Vegetable</a></li>
            <li><a href="">Milk & Dairies</a></li>
            <li><a href="">Beauty & Hygiene</a></li>
            <li><a href="">Cleaning & Household</a></li>
        </ul><br>
        <h3>Brand</h3>
        <select name="" id="">
            <option value="">ALL</option>
            <option value="">Random</option>
            <option value="">Random</option>
            <option value="">Random</option>
            <option value="">Random</option>
            <option value="">Random</option>
            <option value="">Random</option>
            <option value="">Random</option>
        </select>
        <br>
        <br>
        <h3>Price</h3>
        <input type="range" min="20" max="2000" value="20">
        <br>
    </aside>
    <hr class="products-hr">

    <section class="products-container">

        @foreach ($searchProduct as $product)
            <div class="products-img-detail">
                <img style="width:12rem; height: 12rem" src="{{ asset('storage/' . $product->image) }}" alt="">
                <hr>
                <p style="font-size: 1.2rem; color: rgb(0, 0, 0, 0.5);">{{ $product->brand }}</p>
                <p>{{ $product->name }}</p>
                <p>&#8377 {{ $product->price }} / <span>{{ $product->weight }}</span></p>

                <div class="add-to-cart">
                    <form class="form1" action="{{ url('/customer/cart/' . $product->pid) }}" method="POST">
                        @csrf
                        <label for="qty">Qty:</label>
                        <input type="number" min="1" name="qty" id="qty" style="width: 3rem;">
                        <button type="submit" class="bi bi-cart"></button>
                    </form>

                    <form action="{{ url('/customer/wishlist/' . $product->pid) }}" method="POST">
                        @csrf
                        <button type="submit" class="bi bi-heart"></button>
                    </form>
                </div>

            </div>
        @endforeach
    </section>
</section>
