<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Profile</title>
</head>

<body>

    <div class="container bootdey flex-grow-1 container-p-y">

        @include('component.profile-header')

        <div class="card mb-4">
            <div class="card-body">
                <table class="table user-view-table m-0">
                    <tbody>
                        <tr>
                            <td>Registered:</td>
                            <td>{{ @Session('usersInfo')['created_at'] }}</td>
                        </tr>
                        <tr>
                            <td>Role:</td>
                            @if (@Session('usersInfo')['role'] == 1)
                                <td>Admin</td>
                            @elseif (@Session('usersInfo')['role'] == 2)
                                <td>Seller</td>
                            @else
                                <td>Customer</td>
                            @endif

                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td><span class="badge badge-outline-success">Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="border-light m-0">
        </div>

        <div class="card">
            <hr class="border-light m-0">
            <div class="card-body">

                <table class="table user-view-table m-0">
                    <tbody>
                        <tr>
                            <td>ID:</td>
                            <td>{{ @Session('usersInfo')['id'] }}</td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td>{{ @Session('usersInfo')['userName'] }}</td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>{{ @Session('usersInfo')['firstName'] }} {{ @Session('usersInfo')['lastName'] }}</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td>{{ @Session('usersInfo')['email'] }}</td>
                        </tr>

                        <tr>
                            <td>Address:</td>
                            <td>{{ @Session('usersInfo')['address'] }}</td>
                        </tr>

                        <tr>
                            <td>Gender:</td>
                            <td>{{ @Session('usersInfo')['gender'] }}</td>
                        </tr>

                    </tbody>
                </table>

                <table class="table user-view-table m-0">
                    <tbody>
                        <tr>
                            <td>Birthday:</td>
                            <td>{{ @Session('usersInfo')['dob'] }}</td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>India</td>
                        </tr>
                        <tr>
                            <td>Languages:</td>
                            <td>English</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table user-view-table m-0">
                    <tbody>
                        <tr>
                            <td>Phone:</td>
                            <td>{{ @Session('usersInfo')['phone'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
