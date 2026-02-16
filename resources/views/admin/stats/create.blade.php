@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="card hero-table-card">
<div class="card-header">
    <h5>Add New Stat</h5>
</div>

<div class="card-body">

<form action="{{ route('admin.stats.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label class="form-label">Value</label>
    <input type="text" name="value"
           class="form-control"
           placeholder="Example: 10,000+">
</div>

<div class="mb-3">
    <label class="form-label">Label</label>
    <input type="text" name="label"
           class="form-control"
           placeholder="Example: Deliveries Managed">
</div>

<div class="d-flex justify-content-center gap-3 mt-4">
    <a href="{{ route('admin.stats.index') }}"
       class="btn btn-secondary">Cancel</a>

    <button type="submit"
            class="btn btn-primary">
        Save
    </button>
</div>

</form>

</div>
</div>

</div>
</div>
</div>
@endsection
