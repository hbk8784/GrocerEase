<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            @if (isset($failed))
                @include('component.signup-c', ['failed' => $failed])
            @else
                @include('component.signup-c')
            @endif

        </main>

        <footer>
            @include('component.footer-1')
            @include('component.footer-2')
        </footer>

    </div>
</body>

</html>
