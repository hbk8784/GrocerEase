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
                                                <th>Type</th>
                                                <th>Category</th>
                                                <th>Sku</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th class="align-center">Status</th>
                                                <th class="align-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0010</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/001.jpg" alt="product"></a>
                                                </td>
                                                <td>CK Glasses</td>
                                                <td>Simple Product</td>
                                                <td>Glasses</td>
                                                <td>ITEM-0001</td>
                                                <td>$120.00</td>
                                                <td>80,000</td>
                                                <td class="text-center"><i class="bi bi-check-circle-fill"
                                                        style="color:rgb(40, 205, 40)"></i> </td>
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
                                            <tr>
                                                <td>0011</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/002.jpg" alt="product"></a>
                                                </td>
                                                <td>Flower Pot</td>
                                                <td>Simple Product</td>
                                                <td>Decor</td>
                                                <td>ITEM-0002</td>
                                                <td>$149.00</td>
                                                <td>64,000</td>
                                                <td class="text-center"> <i class="bi bi-check-circle-fill"
                                                        style="color:rgb(40, 205, 40)"></i> </td>
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
                                            <tr>
                                                <td>0012</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/003.jpg" alt="product"></a>
                                                </td>
                                                <td>Chair</td>
                                                <td>Simple Product</td>
                                                <td>Furniture</td>
                                                <td>ITEM-0003</td>
                                                <td>$49.00</td>
                                                <td>42,000</td>
                                                <td class="text-center"> <i class="bi bi-check-circle-fill"
                                                        style="color:rgb(40, 205, 40)"></i> </td>
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
                                            <tr>
                                                <td>0013</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/004.jpg" alt="product"></a>
                                                </td>
                                                <td>Night Lamp</td>
                                                <td>Simple Product</td>
                                                <td>Decor</td>
                                                <td>ITEM-0004</td>
                                                <td>$79.00</td>
                                                <td>51,000</td>
                                                <td class="text-center"> <i class="bi bi-x-circle-fill"
                                                        style="color:red"></i> </td>
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
                                            <tr>
                                                <td>0014</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/005.jpg" alt="product"></a>
                                                </td>
                                                <td>Wall Clock</td>
                                                <td>Simple Product</td>
                                                <td>Electronics</td>
                                                <td>ITEM-0005</td>
                                                <td>$120.00</td>
                                                <td>80,000</td>
                                                <td class="text-center"> <i class="bi bi-x-circle-fill"
                                                        style="color:red"></i>
                                                </td>
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
                                            <tr>
                                                <td>0015</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/006.jpg" alt="product"></a>
                                                </td>
                                                <td>Canon 1300B</td>
                                                <td>Simple Product</td>
                                                <td>Electronics</td>
                                                <td>ITEM-0006</td>
                                                <td>$149.00</td>
                                                <td>64,000</td>
                                                <td class="text-center"> <i class="bi bi-x-circle-fill"
                                                        style="color:red"></i>
                                                </td>
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
                                            <tr>
                                                <td>0016</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/007.jpg" alt="product"></a>
                                                </td>
                                                <td>Leather Bag</td>
                                                <td>Simple Product</td>
                                                <td>Accessories</td>
                                                <td>ITEM-0007</td>
                                                <td>$49.00</td>
                                                <td>42,000</td>
                                                <td class="text-center"> <i class="bi bi-check-circle-fill"
                                                        style="color:rgb(40, 205, 40)"></i> </td>
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
                                            <tr>
                                                <td>0017</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/008.jpg" alt="product"></a>
                                                </td>
                                                <td>Adidas Cap</td>
                                                <td>Simple Product</td>
                                                <td>Accessories</td>
                                                <td>ITEM-0008</td>
                                                <td>$79.00</td>
                                                <td>51,000</td>
                                                <td class="text-center"> <i class="bi bi-x-circle-fill"
                                                        style="color: red;"></i> </td>
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
                                            <tr>
                                                <td>0018</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/009.jpg" alt="product"></a>
                                                </td>
                                                <td>Winter Boots</td>
                                                <td>Simple Product</td>
                                                <td>Footwear</td>
                                                <td>ITEM-0009</td>
                                                <td>$120.00</td>
                                                <td>80,000</td>
                                                <td class="text-center"> <i class="bi bi-check-circle-fill"
                                                        style="color:rgb(40, 205, 40)"></i> </td>
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
                                            <tr>
                                                <td>0019</td>
                                                <td class="text-center">
                                                    <a class="product-list-img" href="javascript: void(0);"><img
                                                            src="assets/img/0010.jpg" alt="product"></a>
                                                </td>
                                                <td>Hover Board</td>
                                                <td>Simple Product</td>
                                                <td>Sports</td>
                                                <td>ITEM-0010</td>
                                                <td>$149.00</td>
                                                <td>64,000</td>
                                                <td class="align-center"> <i class="bi bi-check-circle-fill"
                                                        style="color:rgb(40, 205, 40)"></i> </td>
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
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <div class="">

            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="close-sidebar">
                        <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="usr-info text-center mb-5">
                        <img alt="admin-profile" src="assets/img/c-14.jpeg" class="img-fluid rounded-circle mb-3">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">Linda Nelson</h5>
                            <p class="usr-occupation mb-0 mt-1">Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#feeds-tab" class="nav-link rounded-circle active show">
                            <p class="mb-0">Task</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Friends</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#alerts-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Settings</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div id="feeds-tab" class="tab-pane tab-1 fade show active">

                    <div class="tasks">

                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">

                                <div class="icon">
                                    <i class="flaticon-clock-1"></i>
                                </div>


                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-13.jpeg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-15.jpeg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>


                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                        </div>



                        <div class="today mt-5">

                            <div class="d-flex justify-content-between mb-5">

                                <div class="icon">
                                    <i class="flaticon-bell-fill-1"></i>
                                </div>
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpeg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-5.jpeg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpeg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-9.jpeg" class="img-fluid mr-3">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                        </div>


                        <div class="task-stats mt-5">

                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <h6><span>Task Statistics</span></h6>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <i class="flaticon-close-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between">
                                            <p>Feature Development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar"
                                                style="width: 70%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar"
                                                style="width: 30%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total Progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar"
                                                style="width: 86%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                                <div class="text-center mt-5 mb-5">
                                    <button class="btn btn-primary btn-rounded mb-5">See all</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">

                        <div class="recent">

                            <div class="t-s-header mb-5">

                                <div class="row">

                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>New Activity</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p>See all</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <ul class="list-inline text-center mb-5">

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-1.jpeg">
                                    <span class="badge badge-pill badge-new">8</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-2.jpeg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-13.jpeg">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-3.jpeg">
                                    <span class="badge badge-pill badge-new">5</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-4.jpeg">
                                </li>

                            </ul>


                            <div class="friend-request">

                                <div class="d-flex justify-content-between header mb-5">

                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-1">Friend request</h6>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="mb-0 mt-2">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img alt="admin-profile" src="assets/img/c-15.jpeg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/P-2.jpeg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-5.jpeg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-6.jpeg" class="img-fluid mr-3">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>


                        </div>



                        <div class="online mt-5">

                            <div class="t-s-header mb-5">

                                <div class="row">

                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>Online</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p class="mb-0 mt-0">See all</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3" src="assets/img/c-7.jpeg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Irene
                                            Collins</span><span class="badge badge-info float-sm-right ml-2">9</span>
                                    </h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded"
                                    src="assets/img/c-8.jpeg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Thomas
                                            Granger</span><span
                                            class="badge badge-secondary float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded-circle"
                                    src="assets/img/c-9.jpeg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Grace
                                            Roberts</span><span
                                            class="badge badge-warning float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>


                        <div class="away-stats">


                            <div class="t-s-header mb-5 mt-5">

                                <div class="row">

                                    <div class="col-md-12">
                                        <h6>
                                            <span>Away</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>

                            <div class="a-s-media mb-5">

                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/profile-16.jpeg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Traci Lopez</h6>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-11.jpeg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Kristen Beck</h6>
                                    </div>
                                </div>

                                <div class="media mb-5">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-12.jpeg" class="img-fluid">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Keith Foster</h6>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div id="alerts-tab" class="tab-pane tab-3 fade">

                    <div class="settings">

                        <div class="admin-setting">


                            <div class="d-flex justify-content-between">

                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0 mt-2">See all</p>
                                </div>

                            </div>


                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label
                                        class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">


                            <div class="d-flex justify-content-between mb-5">

                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label
                                        class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label
                                        class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label
                                        class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label
                                        class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label
                                        class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>






                            <div class="chk-settings mt-5">

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Report panel
                                                usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Allow mail
                                                redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Show author name
                                                in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Sync phone when
                                                connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                            <input type="checkbox" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-5 delete-chat mb-5">

                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Delete chat
                                                history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat-his flaticon-delete-1 mb-4"></i>

                                </div>

                            </div>




                            <div class="mt-5 usr-status mb-5">

                                <div class="d-flex justify-content-between mb-5">

                                    <div class="media">
                                        <i class="flaticon-chat-fill mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Status</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Online</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label
                                            class="new-control new-checkbox  mr-1  checkbox-outline-success new-checkbox-rounded">
                                            <input type="checkbox" class="chb new-control-input">
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>

                                </div>


                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Offline</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label
                                            class="new-control new-checkbox  mr-1  checkbox-outline-default new-checkbox-rounded">
                                            <input type="checkbox" class="chb new-control-input">
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>



                                <div class="media mb-5 stats">
                                    <div class="media-body mb-5">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Away</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label
                                            class="new-control new-checkbox  mr-1  checkbox-outline-warning new-checkbox-rounded">
                                            <input type="checkbox" class="chb new-control-input">
                                            <span class="new-control-indicator"></span><span
                                                class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
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
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPT FILES  -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <script>
        $('#ecommerce-product-list').DataTable({
            "lengthMenu": [5, 10, 20, 50, 100],
            "language": {
                "paginate": {
                    "previous": "<i class='flaticon-arrow-left-1'></i>",
                    "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            },
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
    </script>
    <!--  END CUSTOM SCRIPT FILES  -->
</body>

</html>
