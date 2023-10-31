<div class="card">
    <div class="card-header">
        <h3 class="card-title">Latest Members</h3>

        <div class="card-tools">
            <span class="badge badge-danger">{{ @count($au_latestMembers->toArray()) }} New Members</span>
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
        <ul class="users-list clearfix">
            @foreach ($au_latestMembers as $latest)
                <li>
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User Image"
                        style="width: 3rem; height: 3rem;">
                    <a class="users-list-name" href="#">{{ $latest->firstName }} {{ $latest->lastName }}</a>
                    <span class="users-list-date">{{ $latest->created_at }}</span>
                </li>
            @endforeach

        </ul>
        <!-- /.users-list -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
        <a href="javascript:">View All Users</a>
    </div>
    <!-- /.card-footer -->
</div>
