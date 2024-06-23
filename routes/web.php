<?php

use App\Http\Controllers\about;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AutogasController;
use App\Http\Controllers\BoardOfDirectorsController;
use App\Http\Controllers\BulkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CylinderController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\MissionVisionController;
use App\Http\Controllers\ReticulationController;
use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\AboutController;

// Home route
Route::get('/', function () {
    return view('frontend.welcome'); // Adjust to your actual home view
})->name('home');

// About route using controller
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Mission & Vision route using controller
Route::get('/mission-vision', [MissionVisionController::class, 'index'])->name('mission-vision');

// Board of Director route using controller
Route::get('/board-of-directors', [BoardOfDirectorsController::class, 'index'])->name('board-of-directors');

// Cylinder route using controller
Route::get('/cylinder', [CylinderController::class, 'index'])->name('cylinder');

// Bulk route using controller
Route::get('/bulk', [BulkController::class, 'index'])->name('bulk');

// Reticulation route using controller
Route::get('/reticulation', [ReticulationController::class, 'index'])->name('reticulation');

// Autogas route using controller
Route::get('/autogas', [AutogasController::class, 'index'])->name('autogas');

// Distribution route using controller
Route::get('/distribution', [DistributionController::class, 'index'])->name('distribution');

// Distribution route using controller
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Contact route using controller
Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('admin-login');

