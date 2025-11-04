<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionControllers\DynamicSectionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Landing page controllers
Route::get('/', [LandingPageController::class, 'index'])->name('index.main');
Route::get('/Staf-augmentation', [LandingPageController::class, 'staffAugmentation'])->name('staff.augmentation');
Route::get('/about', [LandingPageController::class, 'aboutUs'])->name('about.us');
Route::get('/blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');



// Admin Controllers
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [AdminController::class, 'login'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [AdminController::class, 'indexPage'])->name('dashboard.index');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Section 1
    Route::prefix('admin/{section}')->controller(DynamicSectionController::class)->group(function () {
        Route::get('/', 'index')->name('section.index');
        Route::get('/create', 'create')->name('section.create.view');
        Route::post('/store', 'store')->name('section.store');
        Route::get('/edit/{id}', 'edit')->name('section.edit.view');
        Route::post('/update', 'update')->name('section.update');
        Route::get('/delete/{id}', 'destroy')->name('section.delete');
    });

});

Route::get("/auth/google", [GoogleController::class, "redirectToGoogle"])->name('google.login');
Route::get("/auth/callback", [GoogleController::class, "handleGoogleCallback"])->name('google.callback');

require __DIR__ . '/auth.php';
