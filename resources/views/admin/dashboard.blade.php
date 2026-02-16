@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-grid">

    {{-- HERO --}}
    <a href="{{ route('admin.heroSection.index') }}" class="card glass-layer dashboard-card">
        <span class="card-label">01 // Hero</span>
        <h3>Hero Management</h3>
        <p>Total Sections: {{ $heroCount }}</p>
        <div class="card-bg-accent">01</div>
    </a>

    {{-- SERVICES --}}
    <a href="{{ route('admin.service-section.edit') }}" class="card glass-layer dashboard-card">
        <span class="card-label">02 // Services</span>
        <h3>Services Layer</h3>
        @if($serviceSection)
            <p>{{ $serviceSection->title }} <br> Total Services: {{ $serviceCount }}</p>
        @else
            <p>No Service Section Created</p>
        @endif
        <div class="card-bg-accent">02</div>
    </a>

    {{-- HIGHLIGHT --}}
    {{-- <a href="{{ route('admin.highlight.index') }}" class="card glass-layer dashboard-card">
        <span class="card-label">03 // Highlight</span>
        <h3>Highlight Section</h3>
        @if($highlightSection)
            <p>{{ $highlightSection->title ?? 'No Title' }} <br> Total Highlights: {{ $highlightCount }}</p>
        @else
            <p>No Highlight Section</p>
        @endif
        <div class="card-bg-accent">03</div>
    </a> --}}

    <a href="{{ route('admin.highlight.index') }}" class="card glass-layer dashboard-card">
    <span class="card-label">03 // Highlight</span>
    <h3>Highlight Section</h3>
    <p>
        {{ $highlightTitle }} <br>
        Total Highlights: {{ $highlightCount }}
    </p>
    <div class="card-bg-accent">03</div>
</a>

    {{-- CTA --}}
    <a href="{{ route('admin.ctaSection.index') }}" class="card glass-layer dashboard-card">
        <span class="card-label">04 // CTA</span>
        <h3>CTA Section</h3>
        @if($ctaSection)
            <p>{{ $ctaSection->title ?? 'No Title' }} <br> Total CTAs: {{ $ctaCount }}</p>
        @else
            <p>No CTA Section</p>
        @endif
        <div class="card-bg-accent">04</div>
    </a>

    {{-- STATIC BLOCKS --}}
    <a href="{{ route('admin.stats.index') }}" class="card glass-layer dashboard-card">
        <span class="card-label">05 // Static</span>
        <h3>Static Blocks</h3>
        <p>Total Blocks: {{ $staticBlockCount }}</p>
        <div class="card-bg-accent">05</div>
    </a>

</div>
@endsection
