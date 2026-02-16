{{-- @extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-xl-11"> <!-- Wider table wrapper -->
            <div class="card hero-table-card">
                <div class="card-header">
                    <h5>Highlight Section Details</h5>
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
                                @if($highlight)
                                    <tr>
                                        <td>{{ $highlight->title }}</td>
                                        <td>{{ Str::limit($highlight->description, 100) }}</td>
                                        <td>
                                            <img src="{{ asset($highlight->background_image) }}"
                                                 class="hero-table-img">
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 8px; align-items: center;">
                                                <a href="{{ route('admin.highlight.edit') }}"
                                                   class="action-btn edit-btn">
                                                   Edit
                                                </a>

                                                <form action="{{ route('admin.highlight.destroy') }}"
                                                      method="POST"
                                                      style="display: inline-block; margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="action-btn delete-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            No Highlight Section Found
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <a href="{{ route('admin.highlight.edit') }}"
                                               class="btn btn-primary">
                                                Add / Edit Highlight Section
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection --}}

{{-- @extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-xl-11">
            <div class="card hero-table-card">
                <div class="card-header">
                    <h5>Highlight Section Details</h5>
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
                                @if($highlight)
                                    <!-- Existing record -->
                                    <tr>
                                        <td>{{ $highlight->title }}</td>
                                        <td>{{ Str::limit($highlight->description, 100) }}</td>
                                        <td>
                                            <img src="{{ asset($highlight->background_image) }}"
                                                 class="hero-table-img">
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 8px; align-items: center;">
                                                <a href="{{ route('admin.highlight.edit') }}"
                                                   class="action-btn edit-btn">
                                                   Edit
                                                </a>

                                                <form action="{{ route('admin.highlight.destroy') }}"
                                                      method="POST"
                                                      style="display: inline-block; margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="action-btn delete-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <!-- No record: dummy row with buttons in Actions column -->
                                    <tr>
                                        <td class="text-center">—</td>
                                        <td class="text-center">—</td>
                                        <td class="text-center">—</td>
                                        <td>
                                            <div style="display: flex; gap: 8px; justify-content: center;">
                                                <a href="{{ route('admin.highlight.edit') }}"
                                                   class="action-btn edit-btn">
                                                   Edit
                                                </a>

                                                <form action="{{ route('admin.highlight.destroy') }}"
                                                      method="POST"
                                                      style="display: inline-block; margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="action-btn delete-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection --}}

@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-xl-11">
            <div class="card hero-table-card">
                <div class="card-header">
                    <h5>Highlight Section Details</h5>
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
                                @if($highlight)
                                    <!-- Existing record -->
                                    <tr>
                                        <td>{{ $highlight->title }}</td>
                                        <td>{{ Str::limit($highlight->description, 100) }}</td>
                                        <td>
                                            @if($highlight->image && file_exists(public_path($highlight->image)))
                                                <img src="{{ asset($highlight->image) }}"
                                                     class="hero-table-img"
                                                     alt="Highlight Image">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 8px; align-items: center;">
                                                <a href="{{ route('admin.highlight.edit') }}"
                                                   class="action-btn edit-btn">
                                                   Edit
                                                </a>

                                                <form action="{{ route('admin.highlight.destroy') }}"
                                                      method="POST"
                                                      style="display: inline-block; margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="action-btn delete-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <!-- No record: dummy row with buttons in Actions column -->
                                    <tr>
                                        <td class="text-center">—</td>
                                        <td class="text-center">—</td>
                                        <td class="text-center">—</td>
                                        <td>
                                            <div style="display: flex; gap: 8px; justify-content: center;">
                                                <a href="{{ route('admin.highlight.edit') }}"
                                                   class="action-btn edit-btn">
                                                   Edit
                                                </a>

                                                <form action="{{ route('admin.highlight.destroy') }}"
                                                      method="POST"
                                                      style="display: inline-block; margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="action-btn delete-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
