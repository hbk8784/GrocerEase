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
            @include('component.nav-bar')
        </header>
        <main>
            @include('component.hero-img')
            @include('component.browse-by-category')
            @include('component.best')
            @include('component.fruits-vegetable')

            <div class="dark" style="margin-bottom: 30px">
                @include('component.snack')
                @include('component.beverage')
            </div>

            @include('component.beauty')
            @include('component.kitchen')
            @include('component.cleaning')
        </main>

        <footer>
            @include('component.footer-1')
            @include('component.footer-2')
        </footer>
    </div>
</body>

</html>
