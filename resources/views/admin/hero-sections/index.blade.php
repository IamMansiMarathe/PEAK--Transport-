@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card hero-table-card">
        <div class="card-header">
            <h5>Hero Section Details</h5>
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
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Primary Btn</th>
                            <th>Primary Link</th>
                            <th>Secondary Btn</th>
                            <th>Secondary Link</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($heroSection)
                        <tr>
                            <td>{{ $heroSection->title }}</td>

                            <td style="max-width:200px;">
                                {{ Str::limit($heroSection->subtitle, 50) }}
                            </td>

                            <td>{{ $heroSection->primary_button_text }}</td>

                            <td style="max-width:150px;">
                                {{ Str::limit($heroSection->primary_button_link, 25) }}
                            </td>

                            <td>{{ $heroSection->secondary_button_text }}</td>

                            <td style="max-width:150px;">
                                {{ Str::limit($heroSection->secondary_button_link, 25) }}
                            </td>

                            <td>
                                <img src="{{ asset($heroSection->background_image) }}"
                                     class="hero-table-img">
                            </td>

                           <td class="action-buttons">

                                <!-- View Button -->
                                <a href="{{ route('admin.heroSection.show') }}"
                                   class="action-btn view-btn">
                                    View
                                </a>

                                <!-- Edit Button -->
                                <a href="{{ route('admin.heroSection.edit') }}"
                                   class="action-btn edit-btn">
                                    Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.heroSection.destroy') }}"
                                      method="POST"
                                      class="delete-form"
                                      onsubmit="return confirm('Are you sure you want to delete this Hero Section?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="action-btn delete-btn">
                                        Delete
                                    </button>
                                </form>

                            </td>

                        </tr>
                        @else
                        <tr>
                            <td colspan="8" class="text-center">
                                No Hero Section Found
                            </td>
                        </tr>
                        @endif
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
@endsection
