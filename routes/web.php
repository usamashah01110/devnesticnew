<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [AdminController::class, 'login'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [AdminController::class, 'indexPage'])->name('dashboard.index');


Route::get('/Portfolio', [PortfolioController::class, 'viewDeveloperPorfolio'])->name('developer.portfolio.view');
Route::get('/blog', function () {
    return view('pages.blog');
})->name("blog");

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


    // Section 9
    Route::get('/section/9/{id}', [SectionsController::class, 'sectionNine'])->name('section.nine');

    // Developer Education
    Route::get('/developer/education/{id}', [SectionsController::class, 'viewDeveloperEducationForm'])->name('developer.education.form.view');
    Route::post('/developer/education/store', [SectionsController::class, 'DeveloperEducationStore'])->name('developer.education.store');
    Route::get('/developer/education/delete/{id}', [SectionsController::class, 'DeveloperEducationDelete'])->name('developer.education.delete');
    Route::get('/developer/education/edit/{id}', [SectionsController::class, 'DeveloperEducationEditView'])->name('developer.education.edit.view');
    Route::post('/developer/education/update/{id}', [SectionsController::class, 'DeveloperEducationUpdate'])->name('developer.education.update');

    // Developer Contact
    Route::get('/developer/contact/{id}', [SectionsController::class, 'viewDeveloperContactForm'])->name('developer.contact.form.view');
    Route::post('/developer/contact/store', [SectionsController::class, 'viewDeveloperContactStore'])->name('developer.contact.store');
    Route::get('/developer/contact/delete/{id}', [SectionsController::class, 'developerContactDelete'])->name('developer.contact.delete');
    Route::get('/developer/contact/edit/{id}', [SectionsController::class, 'developerContactEditView'])->name('developer.contact.edit.view');
    Route::post('/developer/contact/update/{id}', [SectionsController::class, 'developerContactUpdate'])->name('developer.contact.update');

    // Developer Experiance
    Route::get('/developer/experiance/{id}', [SectionsController::class, 'viewDeveloperExperianceForm'])->name('developer.experiance.form.view');
    Route::post('/developer/experiance/store', [SectionsController::class, 'DeveloperExperianceStore'])->name('developer.experiance.store');
    Route::get('/developer/experiance/delete/{id}', [SectionsController::class, 'DeveloperExperianceDelete'])->name('developer.experiance.delete');
    Route::get('/developer/experiance/edit/{id}', [SectionsController::class, 'DeveloperExperianceEditView'])->name('developer.experiance.edit.view');
    Route::post('/developer/experiance/update/{id}', [SectionsController::class, 'DeveloperExperianceUpdate'])->name('developer.experiance.update');

    // Developer Projects
    Route::get('/developer/project/{id}', [SectionsController::class, 'viewDeveloperProjectsForm'])->name('developer.projects.form.view');
    Route::post('/developer/project/store', [SectionsController::class, 'developerProjectStore'])->name('developer.project.store');
    Route::get('/developer/project/delete/{id}', [SectionsController::class, 'developerProjectDelete'])->name('developer.project.delete');
    Route::get('/developer/project/edit/{id}', [SectionsController::class, 'developerProjectEditFormView'])->name('developer.project.edit.view');
    Route::post('/developer/project/update/{id}', [SectionsController::class, 'developerProjectUpdate'])->name('developer.project.update');
});

Route::get("/auth/google", [GoogleController::class, "redirectToGoogle"])->name('google.login');
Route::get("/auth/callback", [GoogleController::class, "handleGoogleCallback"])->name('google.callback');

require __DIR__ . '/auth.php';
