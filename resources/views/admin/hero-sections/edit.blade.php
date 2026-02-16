@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-semibold">Edit Hero Section</h5>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.heroSection.update') }}" 
                          method="POST" 
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Title</label>
                            <input type="text" name="title"
                                   class="form-control"
                                   value="{{ $heroSection->title }}"
                                   placeholder="Enter hero title">
                        </div> 

                        <!-- Subtitle -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Subtitle</label>
                            <textarea name="subtitle" rows="3"
                                      class="form-control"
                                      placeholder="Enter hero subtitle">{{ $heroSection->subtitle }}</textarea>
                        </div>

                        <!-- Primary Button -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Primary Button Text</label>
                            <input type="text" name="primary_button_text"
                                   class="form-control"
                                   value="{{ $heroSection->primary_button_text }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-medium">Primary Button Link</label>
                            <input type="text" name="primary_button_link"
                                   class="form-control"
                                   value="{{ $heroSection->primary_button_link }}">
                        </div>

                        <!-- Secondary Button -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Secondary Button Text</label>
                            <input type="text" name="secondary_button_text"
                                   class="form-control"
                                   value="{{ $heroSection->secondary_button_text }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-medium">Secondary Button Link</label>
                            <input type="text" name="secondary_button_link"
                                   class="form-control"
                                   value="{{ $heroSection->secondary_button_link }}">
                        </div>

                        <!-- Hero Image -->
                        <div class="mb-4">
                            <label class="form-label fw-medium">Hero Image</label>

                            <div class="image-preview-box mb-2">
                                <img id="previewImage" 
                                     src="{{ $heroSection->background_image ? asset($heroSection->background_image) . '?v=' . $heroSection->updated_at->timestamp : '' }}" 
                                     alt="Hero background" 
                                     class="img-fluid rounded" 
                                     style="max-height:150px;">
                            </div>

                            <input type="file" name="background_image"
                                   class="form-control"
                                   accept="image/*"
                                   onchange="previewHeroImage(event)">
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <a href="{{ route('admin.heroSection.index') }}" class="btn btn-secondary">Cancel</a>
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
function previewHeroImage(event) {
    const input = event.target;
    if (!input.files || !input.files[0]) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('previewImage').src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
@endpush
@endsection
