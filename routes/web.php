<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
        All Normal Users Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:USER'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
        All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:ADMIN'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
        All Admin Routes List
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:SUPERADMIN'])->group(function () {

//     Route::get('/superadmin/home', [HomeController::class, 'superadminHome'])->name('superadmin.home');
// });
