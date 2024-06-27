<?php

use App\Http\Controllers\about;
use App\Http\Controllers\AdminAboutPageController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDistributionController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AdminLogin2Controller;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminMissionPageController;
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
use App\Http\Controllers\AdminBoardOfDirectorPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

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

// Admin Login route using controller
Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('admin-login');

// Admin Login route using controller
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

//Route::get('/dashboard', [AdminController::class, 'dashboard']);
//Route::get('/dashboard', [AdminDashboardController::class, 'index']);
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

// Admin Home page route using controller
Route::get('/admin_home_page', [AdminHomePageController::class, 'index'])->name('admin_home_page');

// Admin About page route using controller
Route::get('/admin_about_page', [AdminAboutPageController::class, 'index'])->name('admin_about_page');

// Admin Mission & Vision page route using controller
Route::get('/admin_mission_page', [AdminMissionPageController::class, 'index'])->name('admin_mission_page');

// Admin Mission & Vision page route using controller
Route::get('/admin_board_of_director', [AdminBoardOfDirectorPageController::class, 'index'])->name('admin_board_of_director');

// Admin Distribution page route using controller
Route::get('/admin_distribution', [AdminDistributionController::class, 'index'])->name('admin_distribution');

// Admin Distribution page route using controller
Route::get('/admin_contact', [AdminContactController::class, 'index'])->name('admin_contact');





