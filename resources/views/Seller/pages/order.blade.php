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
                                            <h5 class="txt-o-placed">Processing</h5>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6 mt-4">
                                                    <div id="o-progress-order-placed" class=""></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6 mt-4 text-right">
                                                    <h4>2215</h4>
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
                                                    <h4>1344</h4>
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
                                                    <h4>924</h4>
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
                                                    <h4>768</h4>
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
                                                <th class="checkbox-column"> Record No. </th>
                                                <th>Order</th>
                                                <th>Purchased On</th>
                                                <th>Vendor</th>
                                                <th>Ship To</th>
                                                <th>Base Price</th>
                                                <th>Purchased Price</th>
                                                <th class="align-center">Status</th>
                                                <th class="align-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="checkbox-column"> 1 </td>
                                                <td>1</td>
                                                <td>12/09/2017</td>
                                                <td>HP</td>
                                                <td>Liam Sheldon</td>
                                                <td>$234.40</td>
                                                <td>$200.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-success">Approved</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 2 </td>
                                                <td>2</td>
                                                <td>21/01/2018</td>
                                                <td>APPLE</td>
                                                <td>Donna Rogers</td>
                                                <td>$234.40</td>
                                                <td>$205.40</td>
                                                <td class="align-center"><span class="badge badge-danger">Closed</span>
                                                </td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 3 </td>
                                                <td>3</td>
                                                <td>12/02/2018</td>
                                                <td>MICROSOFT</td>
                                                <td>Grace Roberts</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-primary">Pending</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 4 </td>
                                                <td>4</td>
                                                <td>12/02/2018</td>
                                                <td>DELL</td>
                                                <td>James Taylor</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-warning">Suspended</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 5 </td>
                                                <td>5</td>
                                                <td>12/02/2018</td>
                                                <td>SAMSUNG</td>
                                                <td>Alexander Gray</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-primary">Pending</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 6 </td>
                                                <td>6</td>
                                                <td>12/02/2018</td>
                                                <td>SONY</td>
                                                <td>Nia Hillyer</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-success">Approved</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 7 </td>
                                                <td>7</td>
                                                <td>12/02/2018</td>
                                                <td>GoPro</td>
                                                <td>Andy King</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-primary">Pending</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 8 </td>
                                                <td>8</td>
                                                <td>12/02/2018</td>
                                                <td>RAYBAN</td>
                                                <td>Laurie Fox</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-warning">Suspended</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 9 </td>
                                                <td>9</td>
                                                <td>12/02/2018</td>
                                                <td>WALMART</td>
                                                <td>Ryan McKillop</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-danger">Closed</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 10 </td>
                                                <td>10</td>
                                                <td>12/02/2018</td>
                                                <td>ROLEX</td>
                                                <td>Roxanne</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-success">Approved</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 11 </td>
                                                <td>11</td>
                                                <td>12/02/2018</td>
                                                <td>LG</td>
                                                <td>Iris Hubbard</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-warning">Suspended</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="checkbox-column"> 12 </td>
                                                <td>12</td>
                                                <td>12/02/2018</td>
                                                <td>SHARP</td>
                                                <td>Keith Foster</td>
                                                <td>$234.40</td>
                                                <td>$210.40</td>
                                                <td class="align-center"><span
                                                        class="badge badge-danger">Closed</span></td>
                                                <td class="align-center"><button type="button"
                                                        class="btn btn-default btn-sm"><i class="icon-search"></i>
                                                        View</button></td>
                                            </tr>
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
