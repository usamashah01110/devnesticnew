<?php

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

Route::get('/', function () {
    return view('layouts.main');
});
// Route::get('/about', function () {
//     return view('pages.about');
// })->name('about');
// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');
// Route::get('/service', function () {
//     return view('pages.services');
// })->name('service');
// Route::get('/portfolio', function () {
//     return view('pages.portfolio');
// })->name('portfolio');
// Route::get('/team', function () {
//     return view('pages.team');
// })->name('team');
// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');
