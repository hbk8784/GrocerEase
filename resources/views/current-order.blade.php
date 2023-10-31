<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/current-order.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>

<body style="width: 80%; margin: auto;">
    @include('component.profile-header')

    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                        <div class="card-body p-5">

                            <p class="lead fw-bold mb-5" style="color: #f37a27;">Order Tracker</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>{{ \Carbon\Carbon::parse($records[0]->created_at)->format('j F, Y ') }}</p>
                                </div>
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    @php
                                        $rand = '';
                                        foreach ($records as $value) {
                                            $rand = $rand . (string) $value->pid;
                                        }
                                    @endphp
                                    <p>{{ $rand }}</p>
                                </div>
                            </div>
                            @foreach ($products as $product)
                                <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p>{{ $product->name }} <br> <span
                                                    style="color: rgb(0, 0, 0, 0.5)">{{ $product->desc }}</span></p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>{{ $product->price }}</p>
                                        </div>
                                    </div>
                            @endforeach



                            <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="horizontal-timeline">

                                        <ul class="list-inline items d-flex justify-content-between">
                                            @if ($records[0]->order_status == 1)
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Processing</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-black">
                                                        Shipped</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-black">
                                                        On the way</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">

                                                </li>
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-black">
                                                        Delivered
                                                    </p>
                                                </li>
                                            @elseif ($records[0]->order_status == 2)
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Processing</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Shipped</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">

                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-black">
                                                        On the way</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">

                                                </li>
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-black">
                                                        Delivered
                                                    </p>
                                                </li>
                                            @elseif ($records[0]->order_status == 3)
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Processing</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Shipped</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        On the way</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">

                                                </li>
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-black">
                                                        Delivered
                                                    </p>
                                                </li>
                                            @elseif ($records[0]->order_status == 4)
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Processing</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Shipped</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                </li>

                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        On the way</p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">

                                                </li>
                                                <li class="list-inline-item items-list">
                                                    <p class="py-1 px-2 rounded text-white"
                                                        style="background-color: #f37a27;">
                                                        Delivered
                                                    </p>
                                                </li>
                                            @endif

                                        </ul>

                                    </div>

                                </div>
                            </div>

                            <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #f37a27;">Please
                                    contact
                                    us</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</body>

</html>
