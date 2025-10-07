<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SectionOneController;
use App\Http\Controllers\SectionTwoController;
use App\Http\Controllers\SectionThreeController;
use App\Http\Controllers\SectionFourController;
use App\Http\Controllers\SectionFiveController;
use App\Http\Controllers\SectionSixController;
use App\Http\Controllers\SectionSevenController;
use App\Http\Controllers\SectionEightController;


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
Route::get('/dashboard/charts', [AdminController::class, 'charts'])->name('dashboard.charts');
Route::get('/dashboard/forms', [AdminController::class, 'forms'])->name('dashboard.forms');
Route::get('/dashboard/fonts', [AdminController::class, 'font'])->name('dashboard.font');
Route::get('/dashboard/buttons', [AdminController::class, 'button'])->name('dashboard.button');
Route::get('/dashboard/dropdowns', [AdminController::class, 'dropdown'])->name('dashboard.dropdown');
Route::get('/dashboard/typography', [AdminController::class, 'typography'])->name('dashboard.typography');
Route::get('/dashboard/table', [AdminController::class, 'table'])->name('dashboard.table');
Route::get('/dashboard/blank', [AdminController::class, 'blank'])->name('dashboard.blank');
Route::get('/dashboard/error-404', [AdminController::class, 'error_404'])->name('dashboard.error-404');
Route::get('/dashboard/error-500', [AdminController::class, 'error_500'])->name('dashboard.error-500');
Route::get('/dashboard/login', [AdminController::class, 'loginPage'])->name('dashboard.login');
Route::get('/dashboard/register', [AdminController::class, 'registerPage'])->name('dashboard.register');
Route::get('/dashboard/documentation', [AdminController::class, 'documentation'])->name('dashboard.documentation');

// Develoer Portfolio
Route::get('/Portfolio', [PortfolioController::class, 'viewDeveloperPorfolio'])->name('developer.portfolio.view');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Section 1
    Route::get('/section/1', [SectionOneController::class, 'index'])->name('section.index');
    Route::get('/section/1/Store', [SectionOneController::class, 'create'])->name('section.1.view');
    Route::get('/section/1/edit/{id}', [SectionOneController::class, 'edit'])->name('section.one.edit.view');
    Route::post('/section/1/update/{id}', [SectionOneController::class, 'update'])->name('section.one.update');
    Route::get('/section/1/delete/{id}', [SectionOneController::class, 'destroy'])->name('section.one.delete');
    Route::post('/section/1/store', [SectionOneController::class, 'store'])->name('section.store');

    // Section 2
    Route::get('/section/2', [SectionTwoController::class, 'index'])->name('section.two');
    Route::get('/section/2/store', [SectionTwoController::class, 'create'])->name('section.two.view');
    Route::get('/section/2/edit/{id}', [SectionTwoController::class, 'edit'])->name('section.two.edit.view');
    Route::get('/section/2/delete/{id}', [SectionTwoController::class, 'destroy'])->name('section.two.delete');
    Route::post('/section/2/store', [SectionTwoController::class, 'store'])->name('section.two.store');
    Route::post('/section/2/update/{id}', [SectionTwoController::class, 'update'])->name('section.two.update');

    // Section 3
    Route::get('/section/3', [SectionThreeController::class, 'index'])->name('section.three');
    Route::get('/section/3/store', [SectionThreeController::class, 'create'])->name('section.three.view');
    Route::get('/section/3/edit/{id}', [SectionThreeController::class, 'edit'])->name('section.three.edit.view');
    Route::get('/section/3/delete/{id}', [SectionThreeController::class, 'destroy'])->name('section.three.delete');
    Route::post('/section/3/store', [SectionThreeController::class, 'store'])->name('section.three.store');
    Route::post('/section/3/update/{id}', [SectionThreeController::class, 'update'])->name('section.three.update');

    // Section 4
    Route::get('/section/4', [SectionFourController::class, 'index'])->name('section.four');
    Route::get('/section/4/store', [SectionFourController::class, 'create'])->name('section.four.view');
    Route::post('/section/4/store', [SectionFourController::class, 'store'])->name('section.four.store');
    Route::get('/section/4/delete/{id}', [SectionFourController::class, 'destroy'])->name('section.four.delete');
    Route::get('/section/4/edit/{id}', [SectionFourController::class, 'edit'])->name('section.four.edit.view');
    Route::post('/section/4/update/{id}', [SectionFourController::class, 'update'])->name('section.four.update');

    // Section 5
    Route::get('/section/5', [SectionFiveController::class, 'index'])->name('section.five');
    Route::get('/section/5/store', [SectionFiveController::class, 'create'])->name('section.five.view');
    Route::post('/section/5/store', [SectionFiveController::class, 'store'])->name('section.five.store');
    Route::get('/section/5/delete/{id}', [SectionFiveController::class, 'destroy'])->name('section.five.delete');
    Route::get('/section/5/edit/{id}', [SectionFiveController::class, 'edit'])->name('section.five.edit.view');
    Route::post('/section/5/update/{id}', [SectionFiveController::class, 'update'])->name('section.five.update');

    // Section 6
    Route::get('/section/6', [SectionSixController::class, 'index'])->name('section.six');
    Route::get('/section/6/store', [SectionSixController::class, 'create'])->name('section.six.view');
    Route::post('/section/6/store', [SectionSixController::class, 'store'])->name('section.six.store');
    Route::get('/section/6/delete/{id}', [SectionSixController::class, 'destroy'])->name('delete.six');
    Route::get('/section/6/edit/{id}', [SectionSixController::class, 'edit'])->name('section.six.edit.view');
    Route::post('/section/6/update/{id}', [SectionSixController::class, 'update'])->name('section.six.update');

    // Section 7
    Route::get('/section/7', [SectionSevenController::class, 'index'])->name('section.seven');
    Route::get('/section/7/store', [SectionSevenController::class, 'create'])->name('section.seven.view');
    Route::post('/section/7/store', [SectionSevenController::class, 'store'])->name('section.seven.store');
    Route::get('/section/7/edit/{id}', [SectionSevenController::class, 'edit'])->name('section.seven.edit.view');
    Route::get('/section/7/delete/{id}', [SectionSevenController::class, 'destroy'])->name('section.seven.delete');
    Route::post('/section/7/update/{id}', [SectionSevenController::class, 'update'])->name('section.seven.update');

    // Section 8
    Route::get('/section/8', [SectionEightController::class, 'index'])->name('section.eight');
    Route::get('/section/8/store', [SectionEightController::class, 'create'])->name('section.eight.view');
    Route::post('/section/8/store', [SectionEightController::class, 'store'])->name('section.eight.store');
    Route::get('/section/8/delete/{id}', [SectionEightController::class, 'destroy'])->name('section.eight.delete');
    Route::get('/section/8/edit/{id}', [SectionEightController::class, 'edit'])->name('section.eight.edit.view');
    Route::post('/section/8/update/{id}', [SectionEightController::class, 'update'])->name('section.eight.update');

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
