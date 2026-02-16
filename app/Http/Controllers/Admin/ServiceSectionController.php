<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection;
use Illuminate\Http\Request;

class ServiceSectionController extends Controller
{
    public function edit()
    {
        $section = ServiceSection::with('services')->first();

        return view('admin.services.edit', compact('section'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $section = ServiceSection::first();

        if (!$section) {
            $section = ServiceSection::create($request->only('title', 'description'));
        } else {
            $section->update($request->only('title', 'description'));
        }

        return redirect()->back()->with('success', 'Service Section Updated Successfully');
    }
}
