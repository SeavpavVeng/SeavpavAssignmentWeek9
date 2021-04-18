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

Route::get('/estate', [App\Http\Controllers\PageController::class, 'estatePage'])->name('pages.estate');

Route::get('/about', [App\Http\Controllers\PageController::class, 'aboutPage'])->name('pages.about');

Route::get('/property', [App\Http\Controllers\PageController::class, 'propertyPage'])->name('pages.property');

Route::get('/blog', [App\Http\Controllers\PageController::class, 'blogPage'])->name('pages.blog');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'contactPage'])->name('pages.contact');

Route::get('/propertysingle/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('pages.propertysingle');

Route::get('/blogsingle/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('pages.blogsingle');

Route::get('/agentsgrid/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('pages.agentsgrid');

Route::get('/agentsingle/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('pages.agentsingle');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
