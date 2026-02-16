<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Peak Logistics')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lato:wght@800&family=Manrope:wght@800&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">

    @stack('styles')
</head>
<body>

    <!-- Header -->
    @include('user.partials.header')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('user.partials.footer')

    @stack('scripts')

    <script>
    const toggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    toggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
</script>

</body>
</html>
