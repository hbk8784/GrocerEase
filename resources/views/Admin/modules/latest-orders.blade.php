<div class="card">
    <div class="card-header border-transparent">
        <h3 class="card-title">Latest Orders</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($dashProduct as $dp)
                        <tr>
                            <td><a>{{ $dp->pid }}</a>
                            </td>
                            <td>{{ $dp->name }}</td>
                            <td>
                                @if ($dp->order_status == 1)
                                    <span class="badge badge-warning">Processing</span>
                                @elseif ($dp->order_status == 2)
                                    <span class="badge badge-info">Shipped</span>
                                @elseif ($dp->order_status == 3)
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
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New
            Order</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All
            Orders</a>
    </div>
    <!-- /.card-footer -->
</div>
