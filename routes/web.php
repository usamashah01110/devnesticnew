<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionsController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class,'login'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard',[AdminController::class,'indexPage'])->name('dashboard.index');
Route::get('/dashboard/charts',[AdminController::class,'charts'])->name('dashboard.charts');
Route::get('/dashboard/forms',[AdminController::class,'forms'])->name('dashboard.forms');
Route::get('/dashboard/fonts',[AdminController::class,'font'])->name('dashboard.font');
Route::get('/dashboard/buttons',[AdminController::class,'button'])->name('dashboard.button');
Route::get('/dashboard/dropdowns',[AdminController::class,'dropdown'])->name('dashboard.dropdown');
Route::get('/dashboard/typography',[AdminController::class,'typography'])->name('dashboard.typography');
Route::get('/dashboard/table',[AdminController::class,'table'])->name('dashboard.table');
Route::get('/dashboard/blank',[AdminController::class,'blank'])->name('dashboard.blank');
Route::get('/dashboard/error-404',[AdminController::class,'error_404'])->name('dashboard.error-404');
Route::get('/dashboard/error-500',[AdminController::class,'error_500'])->name('dashboard.error-500');
Route::get('/dashboard/login',[AdminController::class,'loginPage'])->name('dashboard.login');
Route::get('/dashboard/register',[AdminController::class,'registerPage'])->name('dashboard.register');
Route::get('/dashboard/documentation',[AdminController::class,'documentation'])->name('dashboard.documentation');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/section/1',[SectionsController::class,'index'])->name('section.index');
    Route::post('/section/1/store',[SectionsController::class,'store'])->name('section.store');

    // Section 2
    Route::get('/section/2',[SectionsController::class,'sectiontwo'])->name('section.two');
    Route::post('/section/2/store',[SectionsController::class,'sectiontwostore'])->name('section.two.store');

    // Section 3
    Route::get('/section/3',[SectionsController::class,'sectionThree'])->name('section.three');

    // Section 4
    Route::get('/section/4',[SectionsController::class,'sectionFour'])->name('section.four');

    // Section 5
    Route::get('/section/5',[SectionsController::class,'sectionFive'])->name('section.five');

    // Section 6
    Route::get('/section/6',[SectionsController::class,'sectionSix'])->name('section.six');

    // Section 7
    Route::get('/section/7',[SectionsController::class,'sectionSeven'])->name('section.seven');
});

require __DIR__.'/auth.php';
