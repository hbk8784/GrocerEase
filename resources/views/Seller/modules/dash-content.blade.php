<div id="content" class="main-content">
    <div class="container">
        <div class="content">
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                @php
                                    $total_sale = 0;
                                    $total_revenu = 0;
                                    foreach ($s1_orders as $sale) {
                                        $total_sale++;
                                        $total_revenu = $total_revenu + $sale->price * $sale->oqty;
                                    }
                                @endphp
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">{{ $total_sale }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">&#8377 {{ $total_revenu }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Sales</h6>

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">

                                    <th scope="col">Date</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($s1_orders as $od1)
                                @endforeach
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($od1->created_at)->format('j F, Y ') }}</td>
                                    <td>{{ $od1->id }}</td>
                                    <td>{{ $od1->uName }}</td>
                                    <td>&#8377 {{ $od1->price }}</td>
                                    <td>{{ $od1->oqty }}</td>
                                    <td>&#8377 {{ $od1->price * $od1->oqty }}</td>
                                    <td>
                                        @if ($od1->payment_status == 1)
                                            Paid
                                        @else
                                            Not Paid
                                        @endif
                                    </td>
                                    <td>
                                        {{-- <form action="">
                                            <select name="orderstatus" id="">
                                                <option value="">- Select -</option>
                                                <option value="2">Shipped</option>
                                                <option value="3">On the Way</option>
                                                <option value="4">Delivered</option>
                                            </select>
                                        </form> --}}
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
