<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <link rel="stylesheet" href="{{ asset('css/invoice.css') }}">
</head>

<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">GrocerEase</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">support 24/7</p>
                        <p class="text-white">+91 6290465395</p>
                    </div>
                </div>
            </div>
        </div>
        @php
            $rand = str_pad(mt_rand(1, 9999999999), 10, '0', STR_PAD_LEFT);
        @endphp
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No:- {{ @Session('usersInfo')['id'] }}</h2>
                    <p class="sub-heading">Tracking No:- {{ $rand }} </p>
                    <p class="sub-heading">Order Date:- {{ $records[0]->created_at }} </p>
                    <p class="sub-heading">Email Address:- {{ @Session('usersInfo')['email'] }} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:- {{ @Session('usersInfo')['firstName'] }}
                        {{ @Session('usersInfo')['lastName'] }}</p>
                    <p class="sub-heading">Address:- {{ @Session('usersInfo')['address'] }} </p>
                    <p class="sub-heading">Phone Number:- {{ @Session('usersInfo')['phone'] }}</p>

                </div>
            </div>
        </div>
        @php
            $i = 0;
            $j = 0;
            $total = 0;
            foreach ($products as $product) {
                $total = $total + $product->price * $records[$j]->oqty;
                $j++;
            }
        @endphp
        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>&#8377 {{ $product->price }}</td>
                            <td>{{ $records[$i]->oqty }}</td>
                            <td>&#8377 {{ $product->price * $records[$i]->oqty }}</td>
                        </tr>
                        <p class="hide-me">{{ $i++ }}</p>
                    @endforeach


                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td>&#8377 <b>{{ $total }} </b></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">
                @if ($records[0]->payment_status == 1)
                    Payment Status:- Paid
                @else
                    Payment Status:- Due
                @endif

            </h3>
            <h3 class="heading">Payment Mode:- {{ $records[0]->method }}</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2023 - GrocerEase. All rights reserved.
                <a href="{{ url('/') }}" class="float-right">www.GrocerEase.com</a>
            </p>
        </div>
    </div>

</body>

</html>
