<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                Food Menu App
            </a>

            <div class="navbar-nav ms-auto">

                <a href="{{ route('categories.index') }}" class="nav-link text-white">
                    Category
                </a>

                <a href="{{ route('menus.index') }}" class="nav-link text-white">
                    Menu
                </a>

            </div>

        </div>
    </nav>
    @yield('content')

</body>

</html>
