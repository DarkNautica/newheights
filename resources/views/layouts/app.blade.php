<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.min.js') }}"></script>

    <style>
        /* Body Background */
        body {
            background-color: white; /* Default background color for the body */
        }

        /* Global Grid Background */
body {
    background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'><g fill='none' stroke='%23cccccc' stroke-width='1.5' opacity='0.6'><path d='M0 0l40 40M40 0L0 40'/></g></svg>");
    background-size: 30px 30px;
    background-repeat: repeat;
    background-color: white;
}

/* Exclude Hero Section */
.hero {
    background: none !important;
}


        /* Transparent header */
        header {
            background-color: transparent !important;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        /* Page Content with Grid Background */
        .page-content {
            padding-top: 8rem;
        }

        .content-wrapper {
            padding-top: 0;
        }
    </style>
</head>
<body>
    <x-header /> <!-- Transparent header -->



    <!-- Content Wrapper -->
    <div class="content-wrapper grid-background">
        @yield('content')
    </div>

    <x-footer />
</body>
</html>
