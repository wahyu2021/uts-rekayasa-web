<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UMKM Store - Produk Lokal Berkualitas')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @yield('styles')
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')

    @yield('content')

    <!-- Footer -->
    @include('partials.footer')
    @yield('scripts')
</body>

</html>
