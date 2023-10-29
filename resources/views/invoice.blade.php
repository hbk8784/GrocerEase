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

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No:</h2>
                    <p class="sub-heading">Tracking No: </p>
                    <p class="sub-heading">Order Date: </p>
                    <p class="sub-heading">Email Address: </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: </p>
                    <p class="sub-heading">Address: </p>
                    <p class="sub-heading">Phone Number: </p>

                </div>
            </div>
        </div>

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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td>Rs. </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status:</h3>
            <h3 class="heading">Payment Mode:</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2023 - GrocerEase. All rights reserved.
                <a href="{{ url('/') }}" class="float-right">www.GrocerEase.com</a>
            </p>
        </div>
    </div>

</body>

</html>
