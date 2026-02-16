<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HighlightSection;
use App\Http\Controllers\Controller;

class HighlightSectionController extends Controller
{
    public function index()
    {
        $highlight = HighlightSection::first();
        return view('admin.highlight.index', compact('highlight'));
    }

    public function edit()
    {
        $highlight = HighlightSection::first();

        if (!$highlight) {
            $highlight = HighlightSection::create([
                'title' => '',
                'description' => '',
                'image' => ''
            ]);
        }

        return view('admin.highlight.edit', compact('highlight'));
    }

    public function update(Request $request)
    {
        $highlight = HighlightSection::first();

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            if ($highlight->image && file_exists(public_path($highlight->image))) {
                unlink(public_path($highlight->image));
            }

            $path = $request->file('image')->store('highlight', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $highlight->update($data);

        return redirect()->back()->with('success', 'Highlight section updated successfully');
    }

    public function destroy()
    {
        $highlight = HighlightSection::first();

        if ($highlight) {
            if ($highlight->image && file_exists(public_path($highlight->image))) {
                unlink(public_path($highlight->image));
            }
            $highlight->delete();
        }

        return redirect()->route('admin.highlight.edit')->with('success', 'Highlight section deleted successfully.');
    }
}
