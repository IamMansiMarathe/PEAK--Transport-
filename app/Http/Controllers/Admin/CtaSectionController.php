<?php

namespace App\Http\Controllers\Admin;

use App\Models\CtaSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CtaSectionController extends Controller
{
    public function index()
{
    $ctaSection = CtaSection::first();
    return view('admin.cta-sections.index', compact('ctaSection'));
}

public function edit()
{
    $ctaSection = CtaSection::first();

    if (!$ctaSection) {
        $ctaSection = CtaSection::create([
            'title' => '',
            'description' => '',
            'background_image' => ''
        ]);
    }

    return view('admin.cta-sections.edit', compact('ctaSection'));
}

public function update(Request $request)
{
    $ctaSection = CtaSection::first();

    $ctaSection->title = $request->title;
    $ctaSection->description = $request->description;

    if ($request->hasFile('background_image')) {
        $image = $request->file('background_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $ctaSection->background_image = 'uploads/'.$imageName;
    }

    $ctaSection->save();

    return redirect()->route('admin.ctaSection.index')
                     ->with('success', 'CTA Updated Successfully');
}

public function destroy()
{
    $ctaSection = CtaSection::first();

    if ($ctaSection) {
        $ctaSection->delete();
    }

    return redirect()->route('admin.ctaSection.index')
                     ->with('success', 'CTA Deleted Successfully');
}
}
