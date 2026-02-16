<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceSection;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required',
            'description' => 'required'
        ]);

        $section = ServiceSection::first();

        if (!$section) {
            return redirect()->back()->with('error', 'Create Service Section First');
        }

        $imagePath = $request->file('image')->store('services', 'public');

        Service::create([
            'service_section_id' => $section->id,
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'Service Added Successfully');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit-card', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }

        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.service-section.edit')
            ->with('success', 'Service Updated Successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->back()->with('success', 'Service Deleted Successfully');
    }
}
