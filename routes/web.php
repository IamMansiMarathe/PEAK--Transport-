<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CtaSectionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\HighlightSectionController;
use App\Http\Controllers\Admin\ServicesSectionController;
use App\Http\Controllers\Admin\StatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('user.home');
// });

// Route::view('/admin/dashboard', 'admin.dashboard')
//     ->name('admin.dashboard');
 

Route::get('/', [UserController::class, 'home'])->name('home');

Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware('admin.auth')
        ->name('admin.dashboard');
});

Route::middleware('admin.auth')->prefix('admin')->group(function () {
    Route::get('/hero', [HeroSectionController::class, 'index'])->name('admin.heroSection.index');
    Route::get('/hero/edit', [HeroSectionController::class, 'edit'])->name('admin.heroSection.edit');
    Route::put('/hero', [HeroSectionController::class, 'update'])->name('admin.heroSection.update');
    Route::get('/hero/view', [HeroSectionController::class, 'show'])->name('admin.heroSection.show');
    Route::delete('/hero/delete', [HeroSectionController::class, 'destroy'])->name('admin.heroSection.destroy');

    Route::get('/cta', [CtaSectionController::class, 'index'])->name('admin.ctaSection.index');
    Route::get('/cta/edit', [CtaSectionController::class, 'edit'])->name('admin.ctaSection.edit');
    Route::put('/cta/update', [CtaSectionController::class, 'update'])->name('admin.ctaSection.update');
    Route::delete('/cta/delete', [CtaSectionController::class, 'destroy'])->name('admin.ctaSection.destroy');

    Route::get('highlight', [HighlightSectionController::class, 'index'])->name('admin.highlight.index');
    Route::get('highlight/edit', [HighlightSectionController::class, 'edit'])->name('admin.highlight.edit');
    Route::put('highlight/update', [HighlightSectionController::class, 'update'])->name('admin.highlight.update');
    Route::delete('highlight/destroy', [HighlightSectionController::class, 'destroy'])->name('admin.highlight.destroy');

    Route::get('/stats', [StatController::class, 'index'])->name('admin.stats.index');
    Route::get('/stats/create', [StatController::class, 'create'])->name('admin.stats.create');
    Route::post('/stats/store', [StatController::class, 'store'])->name('admin.stats.store');
    Route::get('/stats/{id}/edit', [StatController::class, 'edit'])->name('admin.stats.edit');
    Route::put('/stats/{id}', [StatController::class, 'update'])->name('admin.stats.update');
    Route::delete('/stats/{id}', [StatController::class, 'destroy'])->name('admin.stats.destroy');

     Route::get('service-section/edit',[App\Http\Controllers\Admin\ServiceSectionController::class, 'edit'])->name('admin.service-section.edit');
     Route::put('service-section/update',[App\Http\Controllers\Admin\ServiceSectionController::class, 'update'])->name('admin.service-section.update');
     Route::post('services/store',[App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.services.store');
     Route::get('services/{service}/edit',[App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.services.edit');
     Route::put('services/{service}',[App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.services.update');
     Route::delete('services/{service}',[App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('admin.services.destroy');

});
    