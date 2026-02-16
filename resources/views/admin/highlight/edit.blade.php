@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-semibold">Edit Highlight Section</h5>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.highlight.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $highlight->title }}" placeholder="Enter highlight title">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Description</label>
                            <textarea name="description" rows="4" class="form-control" placeholder="Enter highlight description">{{ $highlight->description }}</textarea>
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label class="form-label fw-medium">Image</label>

                            <div class="image-preview-box mb-2">
                                <img id="highlightPreview" src="{{ $highlight->image ? asset($highlight->image) : '' }}" alt="Highlight image" class="img-fluid rounded" style="max-height:150px;">
                            </div>

                            <input type="file" name="image" class="form-control" accept="image/*" onchange="previewHighlightImage(event)">
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <a href="{{ route('admin.highlight.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
<script>
function previewHighlightImage(event) {
    const input = event.target;
    if (!input.files || !input.files[0]) return;
    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('highlightPreview').src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
@endpush
@endsection
