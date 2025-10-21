<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - UMKM Store')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: var(--light-color);
        }
        .sidebar {
            min-height: 100vh;
            width: 280px;
            background-color: #fff;
            border-right: 1px solid var(--border-color);
        }
        .content-wrapper {
            flex: 1;
            padding: 2rem;
        }
        .sidebar .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            margin: 0.25rem 0;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            transition: color 0.2s ease, background-color 0.2s ease;
            border-radius: 0.5rem;
        }
        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            color: var(--primary-color);
            background-color: rgba(139, 92, 246, 0.1);
        }
        .sidebar .nav-link i {
            width: 40px;
            text-align: center;
            font-size: 1.1rem;
        }
        .sidebar-header {
            padding: 1.5rem 1rem;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 1rem;
        }
        .sidebar-header .navbar-brand {
            font-size: 1.5rem;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="d-flex">
        @include('partials.admin.sidebar')
        <main class="content-wrapper">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>