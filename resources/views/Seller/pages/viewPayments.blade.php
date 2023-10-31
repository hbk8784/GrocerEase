<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>View Payments | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{-- <link href="assets/css/loader.css" rel="stylesheet" type="text/css" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('seller/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('seller/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/assets/css/ecommerce/view_payments.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--  BEGIN CUSTOM STYLE FILE  -->
</head>

<body>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="background-color: black; font-weight:bolder;">
        <!--  BEGIN SIDEBAR  -->
        @include('Seller.modules.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <h3 style="color: white;">View Payments</h3>

                @php
                    $internet = 0;
                    $card = 0;
                    $cash = 0;
                    $upi = 0;

                    foreach ($viewPayment as $vp) {
                        if ($vp->method == 'internet') {
                            $internet = $internet + $vp->price * $vp->oqty;
                        } elseif ($vp->method == 'card') {
                            $card = $card + $vp->price * $vp->oqty;
                        } elseif ($vp->method == 'cash') {
                            $cash = $cash + $vp->price * $vp->oqty;
                        } elseif ($vp->method == 'paypal') {
                            $upi = $upi + $vp->price * $vp->oqty;
                        }
                    }
                @endphp

                <div class="row" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing text-center">
                        <div class="payment-top-section">
                            <h4 class="mb-5 card-title">Payments</h4>
                            <div class="card-section mx-md-auto">
                                <div class="row mt-5">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="p-cards">
                                            <i class="bi bi-globe" style="color: rgb(36, 62, 191)"></i>
                                            <h5>&#8377 {{ $internet }}</h5>
                                            <h5 class="txt-net-bnk">Internet Banking</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="p-cards">
                                            <i class="bi bi-credit-card-fill" style="color: rgb(27, 161, 49)"></i>
                                            <h5>&#8377 {{ $card }}</h5>
                                            <h5 class="txt-c-d-card">Credit/Debit Card</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="p-cards">
                                            <i class="bi bi-cash" style="color: rgb(171, 69, 69)"></i>
                                            <h5>&#8377 {{ $cash }}</h5>
                                            <h5 class="txt-cash">Cash</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="p-cards">
                                            <i class="bi bi-paypal" style="color:orange"></i>
                                            <h5>&#8377 {{ $upi }}</h5>
                                            <h5 class="txt-paypal">UPI</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>View Payments </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="ecommerce-product-view" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Report Date</th>
                                                <th>Payment Method</th>

                                                <th>Invoice ID</th>

                                                <th>Total Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($viewPayment as $vip)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($vip->created_at)->format('j F, Y ') }}
                                                    </td>
                                                    <td>{{ $vip->method }}</td>
                                                    <td>{{ $vip->id }}</td>
                                                    <td>&#8377 {{ $vip->price * $vip->oqty }}</td>
                                                    <td>
                                                        @if ($vip->payment_status == 1)
                                                            Paid
                                                        @else
                                                            Not Paid
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    @include('Seller.modules.footer')
    <!--  END FOOTER  -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>


    <!--  END CUSTOM SCRIPT FILES  -->
</body>

</html>
