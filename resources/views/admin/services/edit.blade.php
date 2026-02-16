@extends('admin.layouts.app') {{-- or your admin layout file --}}

@section('content')

<div class="container">

    <h2 style="margin-bottom:20px;">Manage Services Section</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div style="color:green;margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- ========================= --}}
    {{-- 1️⃣ MAIN SECTION FORM --}}
    {{-- ========================= --}}

    <div class="card-box">
        <h3>Main Section Details</h3>

        <form action="{{ route('admin.service-section.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Section Title</label>
                <input type="text" name="title"
                       value="{{ $section->title ?? '' }}"
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Section Description</label>
                <textarea name="description" class="form-control" rows="4">
{{ $section->description ?? '' }}
                </textarea>
            </div>

            <button type="submit" class="btn-primary">
                Update Section
            </button>
        </form>
    </div>

    {{-- ========================= --}}
    {{-- 2️⃣ ADD SERVICE FORM --}}
    {{-- ========================= --}}

    <div class="card-box">
        <h3>Add New Service</h3>

        <form action="{{ route('admin.services.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Service Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label>Service Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label>Service Description</label>
                <textarea name="description"
                          class="form-control"
                          rows="3"></textarea>
            </div>

            <button type="submit" class="btn-primary">
                Add Service
            </button>
        </form>
    </div>

    {{-- ========================= --}}
    {{-- 3️⃣ SERVICES TABLE --}}
    {{-- ========================= --}}

    <div class="card-box">
        <h3>All Services</h3>

        <table class="custom-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @if($section && $section->services->count())
                    @foreach($section->services as $service)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/'.$service->image) }}"
                                     width="60">
                            </td>

                            <td>{{ $service->title }}</td>

                            <td>{{ $service->description }}</td>

                            <td>
                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                   class="btn-edit">
                                   Edit
                                </a>

                                <form action="{{ route('admin.services.destroy', $service->id) }}"
                                      method="POST">
                                      
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn-delete">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No Services Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</div>

@endsection
