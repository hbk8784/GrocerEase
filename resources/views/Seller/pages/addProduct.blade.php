<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Add/Edit Product | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{-- <link href="assets/css/loader.css" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('seller/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('seller/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('seller/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('seller/assets/css/ecommerce/addedit_product.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--  END CUSTOM STYLE FILE  -->
</head>

<body>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="background-color: black">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('Seller.modules.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <h3 style="color:white">ADD PRODUCTS</h3>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Add Products </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area add-manage-product-2">
                                <div class="row">
                                    <div class="col-xl-7 col-md-12">
                                        <div class="card card-default">
                                            <div class="card-heading">
                                                <h2 class="card-title"><span>GENERAL</span></h2>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-body">
                                                    {{-- form begins here --}}
                                                    <form class="form-horizontal" action="/seller/add/product"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Name :</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" name="name"
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Description :</label>
                                                                <div class="col-md-8">
                                                                    <textarea rows="4" cols="5" name="desc" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Category Main :</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control form-custom mb-4"
                                                                        name="maincat">
                                                                        <option value="">Select Category
                                                                        </option>

                                                                        <option value="sanck">Sanck</option>
                                                                        <option value="beverages">Beverages</option>
                                                                        <option value="fruits vegetables">Fruits &
                                                                            Vegetables
                                                                        </option>

                                                                        <option value="beauty hygiene">Beauty & Hygiene
                                                                        </option>
                                                                        <option value="home kitchen">Home &
                                                                            Kitchen
                                                                        </option>
                                                                        <option value="cleaning household">Cleaning &
                                                                            Household
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <label class="col-md-4">Category Sub :</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control form-custom mb-4"
                                                                        name="subcat">
                                                                        <option value="">Select Category
                                                                        </option>
                                                                        <option value="seasonal fruits vegetable">
                                                                            Seasonal Fruits &
                                                                            Vegetable
                                                                        </option>
                                                                        <option value="fresh vegetable">Fresh Vegetable
                                                                        </option>
                                                                        <option value="fresh fruits">Fresh Fruits
                                                                        </option>
                                                                        <option value="herbs seasonings">Herbs &
                                                                            Seasonings
                                                                        </option>
                                                                        <option value="exotic fruits vegetables">Exotic
                                                                            Fruits &
                                                                            Vegetables</option>
                                                                        <option value="chips nachos">Chips & Nachos
                                                                        </option>
                                                                        <option value="biscutes cookies">Biscutes &
                                                                            Cookies
                                                                        </option>
                                                                        <option value="pasta sauce">Pasta & Sauce
                                                                        </option>
                                                                        <option value="chocolate">Chocolate</option>
                                                                        <option value="soft drink">Soft Drink</option>
                                                                        <option value="tea">Tea</option>
                                                                        <option value="coffee">Coffee</option>
                                                                        <option value="juice">Juice</option>
                                                                        <option value="makeup">Makeup</option>
                                                                        <option value="anti ageing">Anti Ageing
                                                                        </option>
                                                                        <option value="sentful perfumes">Sentful
                                                                            Perfumes
                                                                        </option>
                                                                        <option value="bathing essentials">Bathing
                                                                            Essentials
                                                                        </option>
                                                                        <option value="moisturisers serums">
                                                                            Moisturisers & Serums
                                                                        </option>
                                                                        <option value="kitchen tools">Kitchen Tools
                                                                        </option>
                                                                        <option value="stationary">Stationary</option>
                                                                        <option value="storage solutions">Storage
                                                                            Solutions
                                                                        </option>
                                                                        <option value="battery electricals">Battery &
                                                                            Electricals
                                                                        </option>
                                                                        <option value="detergent">Detergent</option>
                                                                        <option value="cleaners">Cleaners</option>
                                                                        <option value="fresheners">Fresheners</option>
                                                                        <option value="kitchen wipes">Kitchen Wipes
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Brand :</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control form-custom"
                                                                        name="brand">
                                                                        <option value="">Select a Brand</option>
                                                                        <option value="Fresho">Fresho</option>
                                                                        <option value="Maggi">Maggi</option>
                                                                        <option value="Britannia">Britannia</option>
                                                                        <option value="Parle">Parle</option>
                                                                        <option value="Lays">Lays</option>
                                                                        <option value="Cadbury">Cadbury</option>
                                                                        <option value="Kurkure">Kurkure</option>
                                                                        <option value="ACT II">ACT II</option>
                                                                        <option value="Sunfeast">Sunfeast</option>
                                                                        <option value="wai wai">wai wai</option>
                                                                        <option value="Coca Cola">Coca Cola</option>
                                                                        <option value="Thums Up">Thums Up</option>
                                                                        <option value="Pepsi">Pepsi</option>
                                                                        <option value="Lipton">Lipton</option>
                                                                        <option value="Red/Label">Red Label</option>
                                                                        <option value="Taj">Taj</option>
                                                                        <option value="Nescafe">Nescafe</option>
                                                                        <option value="BRU">BRU</option>
                                                                        <option value="Tropicana">Tropicana</option>
                                                                        <option value="Real">Real</option>
                                                                        <option value="Lakme">Lakme</option>
                                                                        <option value="Ponds">Ponds</option>
                                                                        <option value="Engage">Engage</option>
                                                                        <option value="Nivea">Nivea</option>
                                                                        <option value="Dove">Dove</option>
                                                                        <option value="Pears">Pears</option>
                                                                        <option value="Prestige">Prestige</option>
                                                                        <option value="Pioner">Pioner</option>
                                                                        <option value="Apsara">Apsara</option>
                                                                        <option value="Milton">Milton</option>
                                                                        <option value="Duracell">Duracell</option>
                                                                        <option value="Phillips">Phillips</option>
                                                                        <option value="Surf Excel">Surf Excel</option>
                                                                        <option value="Domix">Domix</option>
                                                                        <option value="Odonil">Odonil</option>
                                                                        <option value="Colin">Colin</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Weight :</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" name="weight"
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Status :</label>
                                                                <div class="col-md-8">
                                                                    <select class="form-control form-custom"
                                                                        name="status">
                                                                        <option value="">Please Select</option>
                                                                        <option value="1">In Stock</option>
                                                                        <option value="0">Out of Stock</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-4">
                                                            <div class="row">
                                                                <label class="col-md-4">Price :</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" name="price"
                                                                        type="text">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-md-12"><span>Image</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-md-4">Image :</label>
                                                                <div class="col-md-8">
                                                                    <div class="mb-3">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="form-control-file"
                                                                                id="file-input" name="media">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-md-12"><span>INVENTORY</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-md-4">QTY :</label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control" name="qty"
                                                                        type="number">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="align-center">
                                                            <input value="Insert Product" class="btn"
                                                                type="submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script src="assets/js/ecommerce/autocomplete-addedit_product.js"></script>
    <!--  END CUSTOM SCRIPT FILES  -->
</body>

</html>
