{{-- <header class="site-header">
    <div class="nav-wrap">
        <a class="brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/Peak Transport Solutions logo design 1 (2) - Copy.png') }}" alt="Peak Logistics logo">
        </a>
        <div class="nav-center">
            <nav class="nav-links">
                <a class="active" href="{{ url('/') }}">Home</a>
                <a href="#">Services</a>
                <a href="#">Pricing</a>
                <a href="#">About Us</a>
            </nav>
            <div class="nav-actions">
                <a class="btn btn-primary" href="#">Log In</a>
                <a class="btn btn-outline" href="#">Sign Up</a>
            </div>
        </div>
    </div>
</header> --}}


<header class="site-header">
    <div class="nav-wrap">
        
        <!-- Logo -->
        <a class="brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/Peak Transport Solutions logo design 1 (2) - Copy.png') }}" alt="Peak Logistics logo">
        </a>

        <!-- Hamburger Button -->
        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>

        <!-- Navigation -->
        <div class="nav-center" id="navMenu">
            <nav class="nav-links">
                <a class="active" href="{{ url('/') }}">Home</a>
                <a href="#">Services</a>
                <a href="#">Pricing</a>
                <a href="#">About Us</a>
            </nav>

            <div class="nav-actions">
                <a class="btn btn-primary" href="#">Log In</a>
                <a class="btn btn-outline" href="#">Sign Up</a>
            </div>
        </div>

    </div>
</header>
