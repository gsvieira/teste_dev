<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>

    <nav>
        <a href="/">Home</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
