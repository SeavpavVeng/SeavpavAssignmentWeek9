<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [App\Http\Controllers\PageController::class, 'aboutPage'])->name('pages.about');

Route::get('/property', [App\Http\Controllers\PageController::class, 'propertyPage'])->name('pages.property');

Route::get('/blog', [App\Http\Controllers\PageController::class, 'blogPage'])->name('pages.blog');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'contactPage'])->name('pages.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
