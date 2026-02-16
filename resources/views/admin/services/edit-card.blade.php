@extends('admin.layouts.app') {{-- your admin layout --}}

@section('content')

<div class="container">

    <h2 style="margin-bottom:20px;">Edit Service</h2>

    @if(session('success'))
        <div style="color:green;margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-box">

        <form action="{{ route('admin.services.update', $service->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Current Image</label><br>
                <img src="{{ asset('storage/'.$service->image) }}"
                     width="100"
                     style="margin-bottom:10px;">
            </div>

            <div class="form-group">
                <label>Change Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label>Service Title</label>
                <input type="text"
                       name="title"
                       value="{{ $service->title }}"
                       class="form-control">
            </div>

            <div class="form-group">
                <label>Service Description</label>
                <textarea name="description"
                          rows="4"
                          class="form-control">{{ $service->description }}</textarea>
            </div>

            <button type="submit" class="btn-primary">
                Update Service
            </button>

            <a href="{{ route('admin.service-section.edit') }}"
               class="btn-cancel">
                Cancel
            </a>

        </form>

    </div>

</div>

@endsection
