<!doctype html>
<html lang="en" class="@yield('body_classes')">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fipra Network Meeting RSVP System</title>
    <link rel="stylesheet" href="css/app.css"/>
</head>
<body class="@yield('body_classes')">
    <div class="container">
        <header>
            <div class="logo">
                @yield('logo_image')
            </div>
        </header>
        @yield('content')

    </div>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>