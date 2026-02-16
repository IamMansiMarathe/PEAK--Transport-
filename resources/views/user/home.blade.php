@extends('user.layouts.app')

@section('title', 'Home - Peak Logistics')

@section('content')

<section class="hero">
    <div class="hero-bg">
        <img src="{{ asset($heroSection->background_image) }}" alt="Hero background">
    </div>

    <div class="hero-inner">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">{{ $heroSection->title }}</h1>
                <p class="hero-subtitle">{{ $heroSection->subtitle }}</p>
            </div>

            <div class="hero-actions">
                <a class="btn btn-primary" href="{{ $heroSection->primary_button_link }}">
                    {{ $heroSection->primary_button_text }}
                </a>
                <a class="btn btn-outline" href="{{ $heroSection->secondary_button_link }}">
                    {{ $heroSection->secondary_button_text }}
                </a>
            </div>
        </div>
    </div>
</section>





<!-- Services Section -->
<section class="services">
    <div class="container">

        @if($serviceSection)

        <div class="services-header">
            <h2 class="section-title">
                {{ $serviceSection->title }}
            </h2>

            <p class="section-description">
                {{ $serviceSection->description }}
            </p>
        </div>

        <div class="services-grid">

            @foreach($serviceSection->services as $service)

                <article class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('storage/'.$service->image) }}" alt="">
                    </div>

                    <h3 class="service-title">
                        {{ $service->title }}
                    </h3>

                    <p class="service-description">
                        {{ $service->description }}
                    </p>
                </article>

            @endforeach

        </div>

        @endif

    </div>
</section>

<!-- Highlight/Fleet Section -->
   @if($highlight)
<section class="highlight">
    <div class="container">
        <div class="highlight-panel">
            <img class="highlight-icon-bg" src="{{ asset('assets/Highlight Icon - Copy.png') }}" alt="Decorative icon">

            <div class="highlight-content">
                <h3 class="highlight-title">{{ $highlight->title }}</h3>
                <p class="highlight-description">{{ $highlight->description }}</p>
            </div>

            <div class="highlight-media">
                @if($highlight->image)
                    <img src="{{ asset($highlight->image) }}" alt="Highlight image">
                @endif
            </div>

            <a class="btn btn-primary highlight-cta" href="#">Get a Free Quote</a>
        </div>
    </div>
</section>
@endif


    <section class="stats">
    <div class="container">
        <div class="stats-container">

            @foreach($stats as $stat)
                <div class="stat-item">
                    <h4 class="stat-value">{{ $stat->value }}</h4>
                    <p class="stat-label">{{ $stat->label }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta-panel">
            <div class="cta-content">
                <h3 class="cta-title">{{ $ctaSection->title }}</h3>
                <p class="cta-description">{{ $ctaSection->description }}</p>
                <a class="btn btn-primary" href="#">Get a Free Quote</a>
            </div>

            <!-- Media/Image -->
            <div class="cta-media">
                @if($ctaSection->background_image)
                    <img src="{{ asset($ctaSection->background_image) }}" alt="CTA Image">
                @endif
            </div>

        </div>
    </div>
</section>



@endsection





















{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Logistics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lato:wght@800&family=Manrope:wght@800&display=swap"
        rel="stylesheet">
         <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
   
</head>

<body>
    <!-- Header -->
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="#">
                <img src="{{ asset('assets/img/Peak Transport Solutions logo design 1 (2) - Copy.png') }}" alt="Peak Logistics logo">
            </a>
            <div class="nav-center">
                <nav class="nav-links">
                    <a class="active" href="#">Home</a>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg">
            <img src="{{ asset('assets/img/Hero Image.png') }}" alt="Logistics background">
        </div>
        <div class="hero-inner">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Effortless Logistics. Smarter Operations. Total Control.</h1>
                    <p class="hero-subtitle">Manage all your shipments from one powerful platform. Track deliveries in
                        real time, optimize routes automatically, and reduce logistics costs with complete operational
                        visibility</p>
                </div>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#">Get a Free Quote</a>
                    <a class="btn btn-outline" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="services-header">
                <h2 class="section-title">Three Core Logistics Solutions</h2>
                <p class="section-description">Our smart logistics platform centralizes your entire supply chain in one
                    system. From first-mile pickup to last-mile delivery, Peak Logistics enables faster operations,
                    better planning and complete shipment visibility.</p>
            </div>
            <div class="services-grid">
                <article class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/Service Icon Container.png') }}" alt="Tracking icon">
                    </div>
                    <h3 class="service-title">Track Every Shipment in Real Time</h3>
                    <p class="service-description">Track every shipment live with accurate location data, delivery
                        milestones and proactive status alerts to ensure smooth and predictable deliveries</p>
                </article>
                <article class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/Service Icon Container (1).png') }}" alt="Route optimization icon">
                    </div>
                    <h3 class="service-title">Smart Route & Dispatch Optimization</h3>
                    <p class="service-description">Automatically generate the most efficient delivery routes based on
                        traffic, distance and delivery priority to minimize costs and maximize fleet productivity.</p>
                </article>
                <article class="service-card">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/Service Icon Container (2).png') }}" alt="Analytics icon">
                    </div>
                    <h3 class="service-title">Advanced Performance Insights & Reports</h3>
                    <p class="service-description">Analyze fleet and supply chain performance through easy to understand
                        dashboards with key metrics and operational efficiency to boost results.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Highlight/Fleet Section -->
    <section class="highlight">
        <div class="container">
            <div class="highlight-panel">
                <img class="highlight-icon-bg" src="{{ asset('assets/img/Highlight Icon - Copy.png') }}" alt="Decorative icon">
                <div class="highlight-content">
                    <h3 class="highlight-title">Fleet Safety. Operational Excellence. Zero Compromise.</h3>
                    <p class="highlight-description">At Peak Logistics, fleet safety and operational reliability are our
                        top priorities. Our platform continuously monitors vehicle health, schedules preventive
                        maintenance, and tracks compliance in real time—helping you reduce breakdowns, avoid delays, and
                        meet all safety and regulatory standards.</p>
                </div>
                <div class="highlight-media">
                    <img src="{{ asset('assets/img/Van Container.png') }}" alt="Container truck">
                </div>
                <a class="btn btn-primary highlight-cta" href="#">Get a Free Quote</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <h4 class="stat-value">10,000+</h4>
                    <p class="stat-label">Deliveries Managed</p>
                </div>
                <div class="stat-item">
                    <h4 class="stat-value">2,500+</h4>
                    <p class="stat-label">Active Clients</p>
                </div>
                <div class="stat-item">
                    <h4 class="stat-value">98%</h4>
                    <p class="stat-label">On-Time Delivery Rate</p>
                </div>
                <div class="stat-item">
                    <h4 class="stat-value">200+</h4>
                    <p class="stat-label">Industry Awards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-panel">
                <div class="cta-content">
                    <h3 class="cta-title">Start Building Faster, Smarter Logistics Today</h3>
                    <p class="cta-description">Empower your business with a modern logistics platform designed to
                        improve delivery speed, increase operational efficiency, and give you complete control over
                        every shipment.</p>
                    <a class="btn btn-primary" href="#">Get a Free Quote</a>
                </div>
                <div class="cta-media">
                    <img src="{{ asset('assets/img/CTA Image.png') }}" alt="Delivery truck">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <img src="{{ asset('assets/img/Peak Transport Solutions logo design 1 (2) - Copy.png') }}" alt="Peak Logistics">
                    <p class="footer-note">We're here to support you every step of the way</p>
                </div>
                <div class="footer-links">
                    <div class="footer-col">
                        <h4>Support</h4>
                        <a href="#">Getting Started</a>
                        <a href="#">FAQs</a>
                        <a href="#">Help Articles</a>
                    </div>
                    <div class="footer-col">
                        <h4>Legal</h4>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                    <div class="footer-col">
                        <h4>Services</h4>
                        <a href="#">Shipment Tracking</a>
                        <a href="#">Route Optimization</a>
                        <a href="#">Inventory Management</a>
                        <a href="#">Fleet Management</a>
                        <a href="#">Real-Time Analytics</a>
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <div class="footer-social">
                    <a href="#" aria-label="Facebook">
                        <img src="{{ asset('assets/img/Social Link.png') }}" alt="Facebook">
                    </a>
                    <a href="#" aria-label="YouTube">
                        <img src="{{ asset('assets/img/Social Link (1).png') }}" alt="YouTube">
                    </a>
                </div>
                <p class="copyright">Peak Logistics 2026 All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html> --}}


