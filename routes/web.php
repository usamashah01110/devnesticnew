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

Route::get('/', [MainController::class, 'index'])->name('index');
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

    // Section 1
    Route::get('/section/1',[SectionsController::class,'index'])->name('section.index');
    Route::get('/section/1/Store',[SectionsController::class,'sectionOneCreate'])->name('section.1.view');
    Route::post('/section/1/store',[SectionsController::class,'store'])->name('section.store');

    // Section 2
    Route::get('/section/2',[SectionsController::class,'sectiontwo'])->name('section.two');
    Route::get('/section/2/store',[SectionsController::class,'sectiontwoCreate'])->name('section.two.view');
    Route::post('/section/2/store',[SectionsController::class,'sectiontwostore'])->name('section.two.store');

    // Section 3
    Route::get('/section/3',[SectionsController::class,'sectionThree'])->name('section.three');
    Route::get('/section/3/store',[SectionsController::class,'sectionThreeCreate'])->name('section.three.view');
    Route::post('/section/3/store',[SectionsController::class,'sectionThreeStore'])->name('section.three.store');

    // Section 4
    Route::get('/section/4',[SectionsController::class,'sectionFour'])->name('section.four');
    Route::get('/section/4/store',[SectionsController::class,'sectionFourCreate'])->name('section.four.view');
    Route::post('/section/4/store',[SectionsController::class,'sectionFourStore'])->name('section.four.store');

    // Section 5
    Route::get('/section/5',[SectionsController::class,'sectionFive'])->name('section.five');
    Route::get('/section/5/store',[SectionsController::class,'sectionFiveCreate'])->name('section.five.view');
    Route::post('/section/5/store',[SectionsController::class,'sectionFiveStore'])->name('section.five.store');

    // Section 6
    Route::get('/section/6',[SectionsController::class,'sectionSix'])->name('section.six');
    Route::get('/section/6/store',[SectionsController::class,'sectionSixCreate'])->name('section.six.view');
    Route::post('/section/6/store',[SectionsController::class,'sectionSixStore'])->name('section.six.store');

    // Section 7
    Route::get('/section/7',[SectionsController::class,'sectionSeven'])->name('section.seven');
    Route::get('/section/7/store',[SectionsController::class,'sectionSevenCreate'])->name('section.seven.view');
    Route::post('/section/7/store',[SectionsController::class,'sectionSevenStore'])->name('section.seven.store');
    Route::get('/section/7/update/{id}',[SectionsController::class,'sectionSevenEditForm'])->name('section.seven.edit.form');
    Route::post('/section/7/update/{id}',[SectionsController::class,'sectionSevenEdit'])->name('section.seven.edit');
});

require __DIR__.'/auth.php';
