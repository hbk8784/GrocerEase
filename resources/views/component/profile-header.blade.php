<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<div class="media align-items-center py-3 mb-3">
    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-100 rounded-circle">
    <div class="media-body ml-4">
        <h4 class="font-weight-bold mb-0">{{ @Session('usersInfo')['firstName'] }}
            {{ @Session('usersInfo')['lastName'] }} <span
                class="text-muted font-weight-normal">{{ @Session('usersInfo')['userName'] }}</span>
        </h4>
        <div class="text-muted mb-2">ID: {{ @Session('usersInfo')['id'] }}</div>
        <a href="{{ url('profile/edit') }}" class="btn btn-primary btn-sm">Edit Profile</a>&nbsp;
        <a href="{{ url('/') }}" class="btn btn-default btn-sm icon-btn"><i class="fa fa-mail"></i>Home</a>
    </div>
</div>
