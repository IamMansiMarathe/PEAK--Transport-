@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-xl-11"> <!-- Wider table wrapper -->
            <div class="card hero-table-card">
                <div class="card-header">
                    <h5>CTA Section Details</h5>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table hero-table align-middle">
                            <thead>
                                <tr>
                                    <th style="min-width:150px;">Title</th>
                                    <th style="min-width:300px;">Description</th>
                                    <th style="min-width:150px;">Image</th>
                                    <th style="min-width:180px;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $emptyCTA = $ctaSection ?? null;
                                @endphp

                                <tr>
                                    <td>{{ $emptyCTA->title ?? '' }}</td>
                                    <td>
                                        {{ $emptyCTA && $emptyCTA->description ? Str::limit($emptyCTA->description, 100) : '' }}
                                    </td>
                                    <td>
                                        @if($emptyCTA && $emptyCTA->background_image)
                                        <img src="{{ asset($emptyCTA->background_image) }}" class="hero-table-img">
                                        @endif
                                    </td>
                                    <td>
                                        <div style="display: flex; gap: 8px; align-items: center;">
                                            <!-- Always show Edit/Add button -->
                                            <a href="{{ route('admin.ctaSection.edit') }}"
                                               class="action-btn edit-btn">
                                                {{ $emptyCTA ? 'Edit' : 'Edit' }}
                                            </a>

                                            <!-- Show Delete button only if CTA exists -->
                                            @if($emptyCTA)
                                            <form action="{{ route('admin.ctaSection.destroy') }}" method="POST"
                                                  style="display: inline-block; margin: 0;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-btn delete-btn">
                                                    Delete
                                                </button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
