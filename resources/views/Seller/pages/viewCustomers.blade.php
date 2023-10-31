<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>View Customers | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{-- <link href="assets/css/loader.css" rel="stylesheet" type="text/css" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('seller/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('seller/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('seller/assets/css/ecommerce/view_customers.css') }}">

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
                <h3 style="color: white;">View Customers</h3>

                <div class="row" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Customer Information Details </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="ecommerce-product-customers" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column">ID </th>

                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th class="">Account Active</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="checkbox-column"> 1 </td>
                                                <td class="">
                                                    <a class="product-list-img" href="javascript: void(0);">
                                                        <img src="assets/img/profile-1.jpeg" alt="product">
                                                    </a>
                                                </td>
                                                <td class="customer-name-1">John Doe</td>
                                                <td>johndoe@admin.com</td>
                                                <td>555-555-5555</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class=" align-self-center d-m-success  mr-1 data-marker">
                                                        </div>
                                                        <span class="label label-success">Yes</span>
                                                    </div>
                                                </td>

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

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <script>
        var product_customers = $('#ecommerce-product-customers').DataTable({
            "lengthMenu": [5, 10, 20, 50, 100],
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip();
            },
            headerCallback: function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML =
                    '<label class="new-control new-checkbox checkbox-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs: [{
                targets: 0,
                width: "30px",
                className: "",
                orderable: !1,
                render: function(e, a, t, n) {
                    return '<label class="new-control new-checkbox checkbox-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "language": {
                "paginate": {
                    "previous": "<i class='flaticon-arrow-left-1'></i>",
                    "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });
        multiCheck(product_customers);
    </script>
    <!--  BEGIN CUSTOM SCRIPT FILES  -->
</body>

</html>
