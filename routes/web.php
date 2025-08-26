<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\PortfolioController;
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
    Route::get('/section/1', [SectionsController::class, 'index'])->name('section.index');
    Route::get('/section/1/Store', [SectionsController::class, 'sectionOneCreate'])->name('section.1.view');
    Route::get('/section/1/edit/{id}', [SectionsController::class, 'editView'])->name('section.one.edit.view');
    Route::post('/section/1/update/{id}', [SectionsController::class, 'update'])->name('section.one.update');
    Route::get('/section/1/delete/{id}', [SectionsController::class, 'deleteOne'])->name('section.one.delete');
    Route::post('/section/1/store', [SectionsController::class, 'store'])->name('section.store');

    // Section 2
    Route::get('/section/2', [SectionsController::class, 'sectiontwo'])->name('section.two');
    Route::get('/section/2/store', [SectionsController::class, 'sectiontwoCreate'])->name('section.two.view');
    Route::get('/section/2/edit/{id}', [SectionsController::class, 'sectionTwoEditView'])->name('section.two.edit.view');
    Route::get('/section/2/delete/{id}', [SectionsController::class, 'deleteTwo'])->name('section.two.delete');
    Route::post('/section/2/store', [SectionsController::class, 'sectiontwostore'])->name('section.two.store');
    Route::post('/section/2/update/{id}', [SectionsController::class, 'updateTwo'])->name('section.two.update');

    // Section 3
    Route::get('/section/3', [SectionsController::class, 'sectionThree'])->name('section.three');
    Route::get('/section/3/store', [SectionsController::class, 'sectionThreeCreate'])->name('section.three.view');
    Route::get('/section/3/edit/{id}', [SectionsController::class, 'sectionThreeEditView'])->name('section.three.edit.view');
    Route::get('/section/3/delete/{id}', [SectionsController::class, 'deleteThree'])->name('section.three.delete');
    Route::post('/section/3/store', [SectionsController::class, 'sectionThreeStore'])->name('section.three.store');
    Route::post('/section/3/update/{id}', [SectionsController::class, 'updateThree'])->name('section.three.update');

    // Section 4
    Route::get('/section/4', [SectionsController::class, 'sectionFour'])->name('section.four');
    Route::get('/section/4/store', [SectionsController::class, 'sectionFourCreate'])->name('section.four.view');
    Route::post('/section/4/store', [SectionsController::class, 'sectionFourStore'])->name('section.four.store');
    Route::get('/section/4/delete/{id}', [SectionsController::class, 'deleteFour'])->name('section.four.delete');
    Route::get('/section/4/edit/{id}', [SectionsController::class, 'sectionFourEditView'])->name('section.four.edit.view');
    Route::post('/section/4/update/{id}', [SectionsController::class, 'updateFour'])->name('section.four.update');

    // Section 5
    Route::get('/section/5', [SectionsController::class, 'sectionFive'])->name('section.five');
    Route::get('/section/5/store', [SectionsController::class, 'sectionFiveCreate'])->name('section.five.view');
    Route::post('/section/5/store', [SectionsController::class, 'sectionFiveStore'])->name('section.five.store');
    Route::get('/section/5/delete/{id}', [SectionsController::class, 'deleteFive'])->name('section.five.delete');
    Route::get('/section/5/edit/{id}', [SectionsController::class, 'sectionFiveEditView'])->name('section.five.edit.view');
    Route::post('/section/5/update/{id}', [SectionsController::class, 'updateFive'])->name('section.five.update');

    // Section 6
    Route::get('/section/6', [SectionsController::class, 'sectionSix'])->name('section.six');
    Route::get('/section/6/store', [SectionsController::class, 'sectionSixCreate'])->name('section.six.view');
    Route::post('/section/6/store', [SectionsController::class, 'sectionSixStore'])->name('section.six.store');
    Route::get('/section/6/delete/{id}', [SectionsController::class, 'deleteSix'])->name('delete.six');
    Route::get('/section/6/edit/{id}', [SectionsController::class, 'sectionSixEditView'])->name('section.six.edit.view');
    Route::post('/section/6/update/{id}', [SectionsController::class, 'updateSix'])->name('section.six.update');

    // Section 7
    Route::get('/section/7', [SectionsController::class, 'sectionSeven'])->name('section.seven');
    Route::get('/section/7/store', [SectionsController::class, 'sectionSevenCreate'])->name('section.seven.view');
    Route::post('/section/7/store', [SectionsController::class, 'sectionSevenStore'])->name('section.seven.store');
    Route::get('/section/7/edit/{id}', [SectionsController::class, 'sectionSevenEditView'])->name('section.seven.edit.view');
    Route::get('/section/7/delete/{id}', [SectionsController::class, 'deleteSeven'])->name('section.seven.delete');
    Route::post('/section/7/update/{id}', [SectionsController::class, 'updateSeven'])->name('section.seven.update');

    // Section 8
    Route::get('/section/8', [SectionsController::class, 'sectionEight'])->name('section.eight');
    Route::get('/section/8/store', [SectionsController::class, 'sectionEightCreate'])->name('section.eight.view');
    Route::post('/section/8/store', [SectionsController::class, 'sectionEightStore'])->name('section.eight.store');
    Route::get('/section/8/delete/{id}', [SectionsController::class, 'deleteEight'])->name('section.eight.delete');
    Route::get('/section/8/edit/{id}', [SectionsController::class, 'sectionEightEditView'])->name('section.eight.edit.view');
    Route::post('/section/8/update/{id}', [SectionsController::class, 'updateEight'])->name('section.eight.update');
    
    // Section 9
    Route::get('/section/9/{id}', [SectionsController::class, 'sectionNine'])->name('section.nine');

    // Developer Education 
    Route::get('/developer/education/{id}', [SectionsController::class, 'viewDeveloperEducationForm'])->name('developer.education.form.view');
    Route::post('/developer/education/store', [SectionsController::class, 'DeveloperEducationStore'])->name('developer.education.store');

    // Developer Contact
    Route::get('/developer/contact', [SectionsController::class, 'viewDeveloperContactForm'])->name('developer.contact.form.view');

    // Developer Experiance
    Route::get('/developer/experiance', [SectionsController::class, 'viewDeveloperExperianceForm'])->name('developer.experiance.form.view');

    // Developer Projects
    Route::get('/developer/project', [SectionsController::class, 'viewDeveloperProjectsForm'])->name('developer.projects.form.view');
});

require __DIR__ . '/auth.php';
