@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
            <h5 class="mb-0 fw-semibold">View Hero Section</h5>
        </div>

        <div class="card-body">

            @if($heroSection)

                <div class="mb-4">
                    <strong>Title</strong>
                    <p>{{ $heroSection->title }}</p>
                </div>

                <div class="mb-4">
                    <strong>Subtitle</strong>
                    <p>{{ $heroSection->subtitle }}</p>
                </div>

                <div class="mb-4">
                    <strong>Primary Button</strong>
                    <p>
                        {{ $heroSection->primary_button_text }}
                        ({{ $heroSection->primary_button_link }})
                    </p>
                </div>

                <div class="mb-4">
                    <strong>Secondary Button</strong>
                    <p>
                        {{ $heroSection->secondary_button_text }}
                        ({{ $heroSection->secondary_button_link }})
                    </p>
                </div>

                <div class="mb-4">
                    <strong>Hero Image</strong><br>
                    <img src="{{ asset($heroSection->background_image) }}"
                         style="max-width: 400px; border-radius: 10px;">
                </div>

                <a href="{{ route('admin.heroSection.index') }}"
                   class="btn btn-primary">
                    Back
                </a>

            @else
                <p>No Hero Section Found.</p>
            @endif

        </div>
    </div>

</div>
@endsection
