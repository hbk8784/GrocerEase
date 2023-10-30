<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recently Added Products</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <ul class="products-list product-list-in-card pl-2 pr-2">
            @foreach ($latestRecords as $latest)
                <li class="item">
                    <div class="product-img">
                        <img src="{{ asset('storage/' . $latest->image) }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">{{ $latest->brand }} {{ $latest->name }}
                            <span class="badge badge-warning float-right">&#8377 {{ $latest->price }}</span></a>
                        <span class="product-description">
                            {{ $latest->desc }}
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Products</a>
    </div>
    <!-- /.card-footer -->
</div>
