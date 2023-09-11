<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
</head>
<body>

    @include('components/menubar')

    <div class="styles">
        @yield('content')
    </div>
    
</body>
</html>