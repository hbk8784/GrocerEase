<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    <title>Order History</title>
</head>

<body style="width: 80%; margin: auto;">
    @include('component.profile-header')
    <div class="card">
        <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New
                Order</a>
        </div>
        <div class="card-header border-transparent">
            <h3 class="card-title">Order History</h3>

        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ordertime as $time)
                            <tr>
                                <td><a
                                        href="{{ url('/customer//invoice/' . $time->created_at) }}">{{ $time->created_at }}</a>
                                    ...Click for Invoice</td>
                                <td>
                                    @if ($time->order_status == 1)
                                        <span class="badge badge-warning">Ordered</span>
                                    @elseif ($time->order_status == 2)
                                        <span class="badge badge-info">Shipped</span>
                                    @elseif ($time->order_status == 3)
                                        <span class="badge badge-secondary">On the way</span>
                                    @else
                                        <span class="badge badge-success">Delivered</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</body>

</html>
