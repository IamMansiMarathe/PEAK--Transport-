<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
</head>
<body>

    {{-- Sidebar --}}
    @include('admin.partials.sidebar')

    {{-- Top Navigation --}}
    @include('admin.partials.topnav')

    {{-- Main Content --}}
    <main class="main-content">
        @yield('content')
    </main>

    <script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('collapsed');
    }

    function toggleMobileSidebar() {
        document.getElementById('sidebar').classList.toggle('mobile-open');
    }

    document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', () => {
            document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
            item.classList.add('active');
        });
    });
</script>
  @stack('scripts')
  <script>
    function toggleMobileSidebar() {
        document.getElementById('sidebar').classList.toggle('mobile-open');
    }
</script>

</body>
</html>
