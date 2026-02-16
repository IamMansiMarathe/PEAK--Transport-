<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CtaSection;
use App\Models\HeroSection;
use App\Models\HighlightSection;
use App\Models\Service;
use App\Models\ServiceSection;
use App\Models\Stat;


class DashboardController extends Controller
{
    public function index()
    {
        $heroCount = HeroSection::count();

        $serviceSection = ServiceSection::first();
        $serviceCount = Service::count();

        $highlightSection = HighlightSection::first();
        $highlightCount = HighlightSection::count();
        $highlightTitle = $highlightSection ? $highlightSection->title ?? 'No Highlight Section' : 'No Highlight Section';


        $ctaSection = CtaSection::first();
        $ctaCount = CtaSection::count();
        $ctaTitle = CtaSection::first() ? CtaSection::first()->title : 'No CTA Section';   

        $staticBlockCount = Stat::count();

        return view('admin.dashboard', compact(
            'heroCount',
            'serviceSection',
            'serviceCount',
            'highlightSection',
            'highlightCount',
            'highlightTitle',
            'ctaSection',
            'ctaCount',
            'staticBlockCount'
        ));
    }
}
