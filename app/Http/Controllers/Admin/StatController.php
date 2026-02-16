<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatController extends Controller
{
    public function index()
{
    $stats = Stat::all();
    return view('admin.stats.index', compact('stats'));
}

public function create()
{
    return view('admin.stats.create');
}

public function store(Request $request)
{
    $request->validate([
        'value' => 'required|string|max:255',
        'label' => 'required|string|max:255',
    ]);

    Stat::create($request->all());

    return redirect()->route('admin.stats.index')
                     ->with('success', 'Stat added successfully');
}

public function edit($id)
{
    $stat = Stat::findOrFail($id);
    return view('admin.stats.edit', compact('stat'));
}

public function update(Request $request, $id)
{
    $stat = Stat::findOrFail($id);

    $request->validate([
        'value' => 'required|string|max:255',
        'label' => 'required|string|max:255',
    ]);

    $stat->update($request->all());

    return redirect()->route('admin.stats.index')
                     ->with('success', 'Stat updated successfully');
}

public function destroy($id)
{
    $stat = Stat::findOrFail($id);
    $stat->delete();

    return redirect()->route('admin.stats.index')
                     ->with('success', 'Stat deleted successfully');
}

}
