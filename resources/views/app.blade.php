<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GrocerEase</title>
    <link rel="icon" href="{{ asset('Icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <div class="container">
        <header class="nav-bar">
            @include('nav-bar')
        </header>
        <main>
            @include('hero-img')
            @include('browse-by-category')
            @include('best')
            @include('fruits-vegetable')

            <div class="dark" style="margin-bottom: 30px">
                @include('snack')
                @include('beverage')
            </div>

            @include('beauty')
            @include('kitchen')
            @include('cleaning')
        </main>

        <footer>
            {{-- @include("footer-1")
            @include("footer-2") --}}
        </footer>

    </div>

</body>

</html>
