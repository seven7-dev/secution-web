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
use App\Http\Controllers\SitemapXmlController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ueber-uns', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/referenzen', [TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');
Route::get('/datenschutzerklaerung', [MetaController::class, 'dataPrivacyIndex'])->name('data-privacy');
Route::get('/impressum', [MetaController::class, 'imprintIndex'])->name('imprint');
Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index'])->name('sitemap_xml');

Route::group(['prefix' => '{language?}', 'where' => ['language' => 'en']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/ueber-uns', [AboutUsController::class, 'index'])->name('about-us');
    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/referenzen', [TestimonialsController::class, 'index'])->name('testimonials');
    Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');
    Route::get('/datenschutzerklaerung', [MetaController::class, 'dataPrivacyIndex'])->name('data-privacy');
    Route::get('/impressum', [MetaController::class, 'imprintIndex'])->name('imprint');
    Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap');
    Route::get('/sitemap.xml', [SitemapXmlController::class, 'index'])->name('sitemap_xml');
});
