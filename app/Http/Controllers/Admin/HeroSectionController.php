<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroSectionController extends Controller
{
    public function index()
{
    $heroSection = HeroSection::first();
    return view('admin.hero-sections.index', compact('heroSection'));
}

    public function edit()
{
    $heroSection = HeroSection::first();

    if (!$heroSection) {
        $heroSection = HeroSection::create([
            'title' => '',
            'subtitle' => '',
            'primary_button_text' => '',
            'primary_button_link' => '',
            'secondary_button_text' => '',
            'secondary_button_link' => '',
            'background_image' => ''
        ]);
    }

    return view('admin.hero-sections.edit', compact('heroSection'));
}

    public function update(Request $request)
{
    $heroSection = HeroSection::first();

    $data = $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string',
        'primary_button_text' => 'nullable|string|max:255',
        'primary_button_link' => 'nullable|string|max:255',
        'secondary_button_text' => 'nullable|string|max:255',
        'secondary_button_link' => 'nullable|string|max:255',
        'background_image' => 'nullable|image',
    ]);

    if ($request->hasFile('background_image')) {

        // delete old image
        if ($heroSection->background_image && file_exists(public_path($heroSection->background_image))) {
            unlink(public_path($heroSection->background_image));
        }

        $path = $request->file('background_image')
                       ->store('heroSection', 'public');

        $data['background_image'] = 'storage/' . $path;
    }

    $heroSection->update($data);

    return redirect()->back()->with('success', 'Hero section updated successfully');
}

public function show()
{
    $heroSection = HeroSection::first();

    return view('admin.hero-sections.show', compact('heroSection'));
}

public function destroy()
{
    $heroSection = HeroSection::first();

    if ($heroSection) {

        // Optional: delete image file
        if ($heroSection->background_image && file_exists(public_path($heroSection->background_image))) {
            unlink(public_path($heroSection->background_image));
        }

        $heroSection->delete();
    }

    return redirect()->route('admin.heroSection.edit')
                     ->with('success', 'Hero Section deleted successfully.');
}

}
