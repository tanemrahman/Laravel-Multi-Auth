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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::middleware(['auth','verified','role:user'])->group(function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

Route::get('/', function () {
    return view('welcome');
})->name('site.url');

Auth::routes();

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class,'redirectUser'])->name('home');
});

Route::middleware(['auth','verified','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
});

Route::middleware(['auth','verified','role:seller'])->group(function () {

    Route::get('/seller/dashboard', function () { 
        return view('dashboard');
    })->name('seller.dashboard');

});
