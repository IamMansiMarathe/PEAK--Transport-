@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 fw-semibold">Edit CTA Section</h5>
                </div>

                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.ctaSection.update') }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Title</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   value="{{ $ctaSection->title }}"
                                   placeholder="Enter CTA title">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label fw-medium">Description</label>
                            <textarea name="description"
                                      rows="4"
                                      class="form-control"
                                      placeholder="Enter CTA description">{{ $ctaSection->description }}</textarea>
                        </div>

                        <!-- Background Image -->
                        {{-- <div class="mb-4">
                            <label class="form-label fw-medium">Background Image</label>

                            <div class="image-preview-box mb-2">
                                <img src="{{ asset($ctaSection->background_image) }}"
                                     alt="CTA background">
                            </div> --}}

                            {{-- <input type="file"
                                   name="background_image"
                                   class="form-control"
                                   accept="image/*">
                        </div> --}}
{{-- 
                        <div class="mb-4">
    <label class="form-label fw-medium">CTA Image</label>

    <div class="image-preview-box mb-2">
        @if($ctaSection->background_image)
            <img src="{{ asset($ctaSection->background_image) }}" 
                 class="img-fluid rounded"
                 style="max-height:150px;">
        @endif
    </div>

    <input type="file" name="background_image"
           class="form-control form-control-sm"
           accept="image/*">
</div> --}}

<div class="mb-4">
    <label class="form-label fw-medium">CTA Image</label>

    <div class="image-preview-box mb-2">
        <img id="ctaPreview" 
             @if($ctaSection->background_image)
             src="{{ asset($ctaSection->background_image) }}" 
             @endif
             class="img-fluid rounded"
             style="max-height:150px;">
    </div>

    <input type="file" name="background_image"
           class="form-control form-control-sm"
           accept="image/*"
           onchange="previewCTAImage(event)">
</div>



                        {{-- {{-- <!-- Buttons -->
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <a href="{{ route('admin.ctaSection.index') }}"
                               class="btn btn-secondary">
                                Cancel
                            </a>

                            <button type="submit"
                                    class="btn btn-primary">
                                Update
                            </button>
                        </div> --}}
                        {{-- <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('admin.ctaSection.index') }}" 
                        class="btn btn-outline-secondary me-3 px-4">
                         Cancel
                          </a>

                        <button type="submit" 
            class="btn btn-primary px-4">
        Update
    </button>
</div> --}}

<div class="form-buttons">
    <a href="{{ route('admin.ctaSection.index') }}" class="btn-cancel">
        Cancel
    </a>

    <button type="submit" class="btn-update">
        Update
    </button>
</div>
@push('scripts')
<script>
function previewCTAImage(event) {
    const input = event.target;
    if (!input.files || !input.files[0]) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('ctaPreview').src = e.target.result;
    };
    reader.readAsDataURL(input.files[0]);
}
</script>
@endpush


                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
