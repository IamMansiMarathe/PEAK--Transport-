<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-toggle" onclick="toggleSidebar()">☰</div>
        <h2 class="nav-text">PEAK LOGISTIC<span></span></h2>
    </div>

    <nav class="nav-list">
        <a href="{{ route('admin.dashboard') }}" class="nav-item active">
            <span class="nav-icon">▤</span>
            <span class="nav-text">Dashboard</span>
        </a>
        <a href="{{ route('admin.heroSection.index') }}" class="nav-item"><span class="nav-icon">◈</span><span class="nav-text">Hero</span></a>
        <a href="{{ route('admin.service-section.edit') }}" class="nav-item"><span class="nav-icon">⌘</span><span class="nav-text">Services</span></a>
        <a href="{{ route('admin.highlight.index') }}" class="nav-item"><span class="nav-icon">✦</span><span class="nav-text">Highlight</span></a>
        <a href="{{ route('admin.ctaSection.index') }}" class="nav-item"><span class="nav-icon">⚡︎</span><span class="nav-text">CTA</span></a>
        <a href="{{ route('admin.stats.index') }}" class="nav-item"><span class="nav-icon">⚓︎</span><span class="nav-text">Static Blocks</span></a>
        <a href="#" class="nav-item"><span class="nav-icon">◒</span><span class="nav-text">Footer Area</span></a>
    </nav>
</aside>
