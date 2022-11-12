<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin Controller
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\AdminPendonorDataController;
use App\Http\Controllers\Admin\AdminCategoryController;

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

    // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'indexDashboardAdmin'])->name('admin.dashboard');
    Route::get('/admin/pendonor_data', [AdminPendonorDataController::class, 'indexAddPedonorData'])->name('admin.pendonorData');
    Route::get('/admin/pendonor_category', [AdminCategoryController::class, 'indexAddPendonorCategory'])->name('admin.pendonorCategory');
});

/*------------------------------------------
        All Admin Routes List
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:SUPERADMIN'])->group(function () {

//     Route::get('/superadmin/home', [HomeController::class, 'superadminHome'])->name('superadmin.home');
// });
