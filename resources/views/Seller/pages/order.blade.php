<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Orders | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{-- <link href="assets/css/loader.css" rel="stylesheet" type="text/css" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('seller/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('seller/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/assets/css/ecommerce/order.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="background-color: black;">

        <!--  BEGIN SIDEBAR  -->
        @include('Seller.modules.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="order-top-section">
                            <h4 class="mb-5 card-title text-center" style="color:white;">ORDER STATUS</h4>
                            <div class="card-section mx-md-auto">
                                <div class="row mt-5">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="o-cards">
                                            @php
                                                $processing = 0;
                                                $shiped = 0;
                                                $ontheway = 0;
                                                $delivered = 0;

                                                foreach ($orderToSeller as $mod) {
                                                    if ($mod->order_status == 1) {
                                                        $processing++;
                                                    } elseif ($mod->order_status == 2) {
                                                        $shiped++;
                                                    } elseif ($mod->order_status == 3) {
                                                        $ontheway++;
                                                    } elseif ($mod->order_status == 4) {
                                                        $delivered++;
                                                    }
                                                }
                                            @endphp
                                            <h5 class="txt-o-placed">Processing</h5>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                    <div id="o-progress-order-placed" class=""></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                    <h4>{{ $processing }}</h4>
                                                    <h6>Pending Orders</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="o-cards">
                                            <h5 class="txt-o-preparing">Shipped</h5>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                    <div id="o-progress-preparing" class=""></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                    <h4>{{ $shiped }}</h4>
                                                    <h6>In Transit</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="o-cards">
                                            <h5 class="txt-o-shipped">On the Way</h5>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                    <div id="o-progress-shipped" class=""></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                    <h4>{{ $ontheway }}</h4>
                                                    <h6>Out For Devlivery</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-5">
                                        <div class="o-cards">
                                            <h5 class="txt-o-arrival">Delivered</h5>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                    <div id="o-progress-delivered" class=""></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                    <h4>{{ $delivered }}</h4>
                                                    <h6>Delivered To Customer</h6>
                                                </div>
                                            </div>
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
                                        <h4>Order Listing</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="ecommerce-order-list" class="table table-hover table-bordered">
                                        <thead>
                                            <tr>

                                                <th>Order ID</th>
                                                <th>Purchased On</th>
                                                <th>Brand</th>
                                                <th>Ship To</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Total Price</th>
                                                <th class="align-center">Status</th>
                                                <th class="align-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderToSeller as $ots)
                                                <tr>
                                                    <td>{{ $ots->id }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($ots->created_at)->format('j F, Y ') }}
                                                    </td>
                                                    <td>{{ $ots->pBrand }}</td>
                                                    <td>{{ $ots->uName }}</td>
                                                    <td>&#8377 {{ $ots->price }}</td>
                                                    <td>{{ $ots->oqty }}</td>
                                                    <td>&#8377 {{ $ots->oqty * $ots->price }}</td>
                                                    <td class="align-center">

                                                        @if ($ots->order_status == 1)
                                                            <span class="badge badge-warning">Processing</span>
                                                        @elseif ($ots->order_status == 2)
                                                            <span class="badge badge-info">Shipped</span>
                                                        @elseif ($ots->order_status == 3)
                                                            <span class="badge badge-secondary">On the way</span>
                                                        @else
                                                            <span class="badge badge-success">Delivered</span>
                                                        @endif

                                                    </td>
                                                    <td class="align-center">
                                                        <form action="{{ url('seller/order/status/change/') }}"
                                                            method="POST">
                                                            @csrf
                                                            <select name="status" id="">
                                                                <option value="">- Select -</option>
                                                                <option value="2">Shiped</option>
                                                                <option value="3">On The Way</option>
                                                                <option value="4">Delivered</option>
                                                            </select>
                                                            <input type="hidden" name="id"
                                                                value="{{ $ots->id }}">
                                                            <button type="submit" class="btn btn-danger"
                                                                style="color: black">Update</button>
                                                        </form>
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

    <!--  BEGIN CONTROL SIDEBAR  -->

    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('seller/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('seller/assets/js/loader.js') }}"></script>
    <script src="{{ asset('seller/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('seller/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('seller/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('seller/assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('seller/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script src="{{ asset('seller/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('seller/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('seller/assets/js/ecommerce/order.js') }}"></script>
    <!--  END CUSTOM SCRIPT FILES  -->
</body>

</html>
