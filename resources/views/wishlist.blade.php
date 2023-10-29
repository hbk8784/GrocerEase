<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
    <title>Wishlist</title>
</head>

<body style="width: 80%; margin:auto;">
    @include('component.profile-header')
    <div class="cart-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading mb-10">My wishlist</div>
                    <div class="table-wishlist">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="45%">Product Name</th>
                                    <th width="15%">Unit Price</th>
                                    <th width="15%">Stock Status</th>
                                    <th width="15%"></th>
                                    <th width="10%">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td width="45%">
                                            <div class="display-flex align-center">
                                                <div class="img-product">
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt=""
                                                        class="mCS_img_loaded">
                                                </div>
                                                <div class="name-product">
                                                    {{ $product->name }}
                                                </div>
                                            </div>
                                        </td>
                                        <td width="15%" class="price">&#8377 {{ $product->price }}</td>
                                        <td width="15%"><span class="btn btn-success">In
                                                Stock</span></td>
                                        <td width="15%">
                                            <form class="form1" action="{{ url('/customer/cart/' . $product->pid) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="round-black-btn small-btn">Add to
                                                    Cart</button>

                                            </form>
                                        </td>
                                        <td width="10%" class="text-center"><a
                                                href="{{ url('/customer/remove/wishlist/' . $product->pid) }}"
                                                class=""><i class="bi bi-trash3" style="color: red"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
