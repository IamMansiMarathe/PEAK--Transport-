@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xl-11">
<div class="card hero-table-card">

<div class="card-header d-flex justify-content-between align-items-center">
    <h5>Stats Section</h5>

    <a href="{{ route('admin.stats.create') }}"
       class="action-btn edit-btn">
       + Add New Stat
    </a>
</div>

<div class="card-body">

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
<table class="table hero-table align-middle">

<thead>
<tr>
    <th style="min-width:150px;">Value</th>
    <th style="min-width:300px;">Label</th>
    <th style="min-width:180px;">Actions</th>
</tr>
</thead>

<tbody>

@forelse($stats as $stat)
<tr>
    <td>{{ $stat->value }}</td>
    <td>{{ $stat->label }}</td>
    <td class="text-center">
        <div style="display:flex; gap:8px; justify-content:center;">

            <a href="{{ route('admin.stats.edit', $stat->id) }}"
               class="action-btn edit-btn">
               Edit
            </a>

            <form action="{{ route('admin.stats.destroy', $stat->id) }}"
                  method="POST" style="margin:0;">
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
@empty
<tr>
<td colspan="3" class="text-center">
    No Stats Found
</td>
</tr>
@endforelse

</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
</div>
@endsection
















{{-- @extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-xl-11">
<div class="card hero-table-card">

<div class="card-header">
    <h5>Stats Section</h5>
</div>

<div class="card-body">

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
<table class="table hero-table align-middle">

<thead>
<tr>
    <th style="min-width:150px;">Value</th>
    <th style="min-width:300px;">Label</th>
    <th style="min-width:180px;">Actions</th>
</tr>
</thead>

<tbody>

@forelse($stats as $stat)
<tr>
    <td>{{ $stat->value }}</td>
    <td>{{ $stat->label }}</td>
    <td>
        <div style="display:flex; gap:8px;">
            <a href="{{ route('admin.stats.edit', $stat->id) }}"
               class="action-btn edit-btn">Edit</a>

            <form action="{{ route('admin.stats.destroy', $stat->id) }}"
                  method="POST" style="margin:0;">
                @csrf
                @method('DELETE')
                <button class="action-btn delete-btn">
                    Delete
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
<td colspan="3" class="text-center">
    No Stats Found
</td>
</tr>
@endforelse

</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
</div>
@endsection --}}
