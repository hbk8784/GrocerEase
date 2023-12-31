<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Seller Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('Admin.modules.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Admin.modules.sidebar');

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Seller Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Seller Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body pb-0">
                        <div class="row">

                            @foreach ($au_sellerProfile as $profile)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">
                                            Seller ID: {{ $profile->id }}
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b>{{ $profile->firstName }}
                                                            {{ $profile->lastName }}</b></h2>
                                                    <p class="text-muted text-sm"><b>User Name: </b>
                                                        {{ $profile->userName }}</p>
                                                    <p class="text-muted text-sm"><b>DOB: </b>
                                                        {{ $profile->dob }}</p>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-building"></i></span> Address:
                                                            {{ $profile->address }}</li>
                                                        <li class="small"><span class="fa-li"><i
                                                                    class="fas fa-lg fa-phone"></i></span> Phone
                                                            #:{{ $profile->phone }}</li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="col-5 text-center">
                                                    <img src="../../dist/img/user2-160x160.jpg" alt="user-avatar"
                                                        class="img-circle img-fluid">
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                @if ($profile->active == 1)
                                                    <a href="{{ url('/admin/seller/profile/deactivate/' . $profile->id) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="fas fa-user"></i> Active
                                                    </a>
                                                @elseif ($profile->active == 0)
                                                    <a href="{{ url('/admin/seller/profile/activate/' . $profile->id) }}"
                                                        class="btn btn-sm btn-danger">
                                                        <i class="fas fa-user"></i> Inavtive
                                                @endif

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            @include('Admin.modules.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>
