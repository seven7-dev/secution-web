<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/data-privacy', [MetaController::class, 'dataPrivacyIndex'])->name('data-privacy');
Route::get('/imprint', [MetaController::class, 'imprintIndex'])->name('imprint');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
