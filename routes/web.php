<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\PartnerContentController;
use App\Http\Controllers\Admin\WeddingContentController;
use App\Http\Controllers\Admin\GraphicContentController;
use App\Http\Controllers\Admin\dModelContentController;
use App\Http\Controllers\ProjectDetailController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/services', [ServiceController::class, 'index'])->name('service');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/projects/all', [ProjectDetailController::class, 'index'])->name('projects.all');
Route::get('/projects/{id}', [ProjectDetailController::class, 'show'])->name('projects.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('home', [HomeContentController::class, 'index'])->name('home.index');
    Route::get('home/create', [HomeContentController::class, 'create'])->name('home.create');
    Route::post('home', [HomeContentController::class, 'store'])->name('home.store');
    Route::get('home/{homeContent}/edit', [HomeContentController::class, 'edit'])->name('home.edit');
    Route::put('home/{homeContent}', [HomeContentController::class, 'update'])->name('home.update');
    Route::delete('home/{homeContent}', [HomeContentController::class, 'destroy'])->name('home.destroy');
    
    Route::get('partner', [PartnerContentController::class, 'index'])->name('partner.index');
    Route::get('partner/create', [PartnerContentController::class, 'create'])->name('partner.create');
    Route::post('partner', [PartnerContentController::class, 'store'])->name('partner.store');
    Route::get('partner/{partnerContent}/edit', [PartnerContentController::class, 'edit'])->name('partner.edit');
    Route::put('partner/{partnerContent}', [PartnerContentController::class, 'update'])->name('partner.update');
    Route::delete('partner/{partnerContent}', [PartnerContentController::class, 'destroy'])->name('partner.destroy');

    Route::get('wedding', [WeddingContentController::class, 'index'])->name('wedding.index');
    Route::get('wedding/create', [WeddingContentController::class, 'create'])->name('wedding.create');
    Route::post('wedding', [WeddingContentController::class, 'store'])->name('wedding.store');
    Route::get('wedding/{weddingContent}/edit', [WeddingContentController::class, 'edit'])->name('wedding.edit');
    Route::put('wedding/{weddingContent}', [WeddingContentController::class, 'update'])->name('wedding.update');
    Route::delete('wedding/{weddingContent}', [WeddingContentController::class, 'destroy'])->name('wedding.destroy');

    Route::get('graphic', [GraphicContentController::class, 'index'])->name('graphic.index');
    Route::get('graphic/create', [GraphicContentController::class, 'create'])->name('graphic.create');
    Route::post('graphic', [GraphicContentController::class, 'store'])->name('graphic.store');
    Route::get('graphic/{graphicContent}/edit', [GraphicContentController::class, 'edit'])->name('graphic.edit');
    Route::put('graphic/{graphicContent}', [GraphicContentController::class, 'update'])->name('graphic.update');
    Route::delete('graphic/{graphicContent}', [GraphicContentController::class, 'destroy'])->name('graphic.destroy');

    Route::get('dmodel', [dModelContentController::class, 'index'])->name('dmodel.index');
    Route::get('dmodel/create', [dModelContentController::class, 'create'])->name('dmodel.create');
    Route::post('dmodel', [dModelContentController::class, 'store'])->name('dmodel.store');
    Route::get('dmodel/{dmodelContent}/edit', [dModelContentController::class, 'edit'])->name('dmodel.edit');
    Route::put('dmodel/{dmodelContent}', [dModelContentController::class, 'update'])->name('dmodel.update');
    Route::delete('dmodel/{dmodelContent}', [dModelContentController::class, 'destroy'])->name('dmodel.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
