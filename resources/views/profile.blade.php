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
                            <td>01/23/2017</td>
                        </tr>
                        <tr>
                            <td>Role:</td>
                            <td>Customer</td>
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
                            <td>Username:</td>
                            <td>nmaxwell</td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>Nelle Maxwell</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td>nmaxwell@mail.com</td>
                        </tr>
                        <tr>
                            <td>Company:</td>
                            <td>Company Ltd.</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table user-view-table m-0">
                    <tbody>
                        <tr>
                            <td>Birthday:</td>
                            <td>May 3, 1995</td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td>Canada</td>
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
                            <td>+0 (123) 456 7891</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
