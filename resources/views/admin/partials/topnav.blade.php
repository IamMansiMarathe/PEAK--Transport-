{{-- <header class="top-nav glass-layer">
    <div class="breadcrumb">
        System / <span>Overview</span>
    </div>

    <div class="user-profile">
        <div class="user-avatar">ADMIN</div>
        <div class="user-info">
            <p>John Doe</p>
            <small>Administrator</small>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </div>
</header> --}}


{{-- <header class="top-nav glass-layer">
    <div class="breadcrumb">
        System / <span>Overview</span>
    </div>

    <div class="user-profile">
        <div class="user-avatar">
            {{ strtoupper(substr(session('admin_name'), 0, 1)) }}
        </div>

        <div class="user-info">
            <p>{{ session('admin_name') }}</p>
            <small>Administrator</small>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </div>
</header> --}}


<header class="top-nav glass-layer">

    <!-- Mobile Menu Button -->
    <div class="mobile-menu-btn" onclick="toggleMobileSidebar()">
        ☰
    </div>

    <div class="breadcrumb">
        System / <span>Overview</span>
    </div>

    <div class="user-profile">
        <div class="user-avatar">
            {{ strtoupper(substr(session('admin_name'), 0, 1)) }}
        </div>

        <div class="user-info">
            <p>{{ session('admin_name') }}</p>
            <small>Administrator</small>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </div>
</header>
