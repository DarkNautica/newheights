<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Mont:wght@400;700&display=swap" rel="stylesheet">
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.min.js') }}"></script>


</head>
<body>
    <x-header /> <!-- Blade component for header -->
    @yield('content')
    <x-footer /> <!-- Blade component for footer -->
</body>
</html>
