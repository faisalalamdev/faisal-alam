<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Faisal Alam — Full Stack Web Developer | Laravel & WordPress</title>

    <meta name="description" content="Faisal Alam is a Full Stack Web Developer in Dhaka, Bangladesh with 4+ years of experience building Laravel and WordPress websites, API and payment gateway integrations. 38+ live websites delivered.">
    <meta name="author" content="Faisal Alam">
    <meta property="og:title" content="Faisal Alam — Full Stack Web Developer | Laravel & WordPress">
    <meta property="og:description" content="Faisal Alam is a Full Stack Web Developer in Dhaka, Bangladesh with 4+ years of experience building Laravel and WordPress websites, API and payment gateway integrations. 38+ live websites delivered.">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#161626">

    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/frontend/images/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16.png">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script src="{{ asset('assets/frontend/js/tailwind.config.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <script src="{{ asset('assets/frontend/js/layout.js') }}"></script>
</head>

<body class="font-sans">

    @include('frontend.layouts.header')

    <main>

        @yield('frontend_contents')

    </main>

    @include('frontend.layouts.footer')

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/projects.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/blog.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/pages.js') }}"></script>

</body>

</html>
