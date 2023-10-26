<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{-- <link href="assets/css/loader.css" rel="stylesheet" type="text/css" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ecommerce/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="background-color: black;">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        @include('Seller.modules.sidebar')

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3 style="color: white;">PRODUCTS</h3>
                    </div>
                </div>

                <div class="row margin-bottom-120">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Product List </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="ecommerce-product-list" class="table  table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Desc</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Weight</th>
                                                <th class="align-center">Status</th>
                                                <th class="align-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product->pid }}</td>
                                                    <td class="text-center">
                                                        <a class="product-list-img" href="javascript: void(0);"><img
                                                                src="{{ asset('storage/1698074477-ws.jpg') }}"
                                                                alt="product"></a>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->desc }}</td>
                                                    <td>{{ $product->maincat }}</td>
                                                    <td>{{ $product->brand }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>{{ $product->qty }}</td>
                                                    <td>{{ $product->weight }}</td>

                                                    @if ($product->status == 1)
                                                        <td class="text-center"><i class="bi bi-check-circle-fill"
                                                                style="color:rgb(40, 205, 40)"></i> </td>
                                                    @else
                                                        <td class="text-center"><i class="bi bi-check-circle-fill"
                                                                style="color:rgb(205, 40, 40)"></i> </td>
                                                    @endif
                                                    <td class="align-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a href="javascript:void(0);" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit">
                                                                    <i class="bi bi-pencil-fill "></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete">
                                                                    <i class="bi bi-trash"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
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

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>


    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->


    <!--  END CUSTOM SCRIPT FILES  -->
</body>

</html>
