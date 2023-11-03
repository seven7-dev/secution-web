<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MetaController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/data-privacy', [MetaController::class, 'dataPrivacyIndex'])->name('data-privacy');
Route::get('/imprint', [MetaController::class, 'imprintIndex'])->name('imprint');
