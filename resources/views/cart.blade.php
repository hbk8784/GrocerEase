<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-Nz1080J1SMQ68JPo0bNTaL7ebZ7vFeIMFg3AqW7z58qF5Xr9nBE5k4Z2nuaVlDui" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Document</title>
</head>

<body style="width: 80%; margin:auto;">
    @include('component.profile-header')
    <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <!-- Set columns width -->
                                <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details
                                </th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                                <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#"
                                        class="shop-tooltip float-none text-light" title=""
                                        data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($product as $item)
                                <tr>
                                    <td class="p-4">
                                        <div class="media align-items-center">
                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                            <div class="media-body">
                                                <a href="#" class="d-block text-dark">{{ $item->brand }}</a>
                                                <small>
                                                    <span class="text-muted">{{ $item->name }} / </span>

                                                    <span class="text-muted">{{ $item->weight }} /</span>

                                                    <span class="text-muted">{{ $item->maincat }} /</span>
                                                    <span class="text-muted">{{ $item->subcat }}</span>
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right font-weight-semibold align-middle p-4">
                                        &#8377 {{ $item->price }}
                                    </td>

                                    <td class="align-middle text-center p-4">{{ $item->qtys }}</td>
                                    <td
                                        class="text-right
                                            font-weight-semibold align-middle p-4">
                                        &#8377 {{ $item->price * $item->qtys }}
                                    </td>
                                    <td class="text-center align-middle px-0"><a
                                            href="{{ url('/customer/remove/cart/' . $item->pid) }}"
                                            class="shop-tooltip close float-none text-danger" title=""
                                            data-original-title="Remove"><i class="bi bi-trash"></i></a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- / Shopping cart table -->

                <div class="d-flex flex-wrap justify-content-end align-items-center pb-4">
                    <div class="mt-4">
                        <label class="text-muted font-weight-normal"></label>
                        <input type="text" class="border border-white">
                    </div>
                    <div class="d-flex">
                        <div class="text-right mt-4 mr-5">
                            <label class="text-muted font-weight-normal m-0"></label>
                            <div class="text-large"><strong></strong></div>
                        </div>
                        <div class="text-right mt-4">
                            <label class="text-muted font-weight-normal m-0">Total price</label>
                            @php
                                $totalPrice = 0;

                                foreach ($product as $item) {
                                    $totalPrice = $totalPrice + $item->price * $item->qtys;
                                }
                            @endphp

                            <div class="text-large"><strong>&#8377 {{ $totalPrice }}</strong></div>
                        </div>
                    </div>
                </div>

                <div class="float-right">
                    <form action="{{ url('/customer/order/' . $product) }}" method="POST">
                        @csrf
                        <label for="method">Payment Method</label>
                        <select name="method">
                            <option value="">- Please Select -</option>
                            <option value="internet">Internet Banking</option>
                            <option value="card">Credit/Debit Card</option>
                            <option value="cash">Cash</option>
                            <option value="paypal">PayPal</option>
                        </select>
                        <button type="submit" class="btn btn-lg btn-primary mt-2">Checkout</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
