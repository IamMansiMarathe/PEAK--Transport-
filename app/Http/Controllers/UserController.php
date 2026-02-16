<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CtaSection;
use App\Models\HeroSection;
use App\Models\HighlightSection;
use App\Models\Service;
use App\Models\ServiceSection;
use App\Models\Stat;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
{
    // // $heroSection = HeroSection::findOrFail(1);
    // // return view('user.home', compact('heroSection'));
    // $heroSection = HeroSection::first();
    // return view('user.home', [
    // 'heroSection' => $heroSection]);

    $heroSection = HeroSection::first();
    $ctaSection = CtaSection::first();
    $highlight = HighlightSection::first();
    $stats = Stat::all();
    $serviceSection = ServiceSection::with('services')->first();
    
    

    return view('user.home', [
        'heroSection' => $heroSection,
        'ctaSection' => $ctaSection,
        'highlight' => $highlight,
        'stats' => $stats,
        'serviceSection' => $serviceSection
        
    ]);
}


}

