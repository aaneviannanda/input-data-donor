<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin Controller
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\AdminPendonorDataController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Client\HomeClientController;

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
    return view('client.index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
        All Normal Users Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:USER'])->group(function () {

    Route::get('/home', [HomeClientController::class, 'indexHomeClient'])->name('home');
    // Route::get('/client', [HomeClientController::class, 'indexHomeClient'])->name('client.home');
});

/*------------------------------------------
        All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:ADMIN'])->group(function () {

    // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'indexDashboardAdmin'])->name('admin.dashboard');

    // Route Pendonor Data
    Route::get('/admin/pendonor_data', [AdminPendonorDataController::class, 'indexAddPedonorData'])->name('admin.pendonorData');
    Route::post('/admin/pendonor_data/insert', [AdminPendonorDataController::class, 'insert_pendonors_data'])->name('admin.insertPendonorData');
    Route::post('/admin/pendonor_data/update/{id}', [AdminPendonorDataController::class, 'update_pendonors_data'])->name('admin.updatePendonorData');
    Route::post('/admin/pendonor_data/delete/{id}', [AdminPendonorDataController::class, 'delete_pendonors_data'])->name('admin.deletePendonorData');


    // Route Pendonor Category
    Route::get('/admin/pendonor_category', [AdminCategoryController::class, 'indexAddPendonorCategory'])->name('admin.pendonorCategory');
    Route::post('/admin/category/insert', [AdminCategoryController::class, 'insert_category'])->name('admin.insertCategory');
    Route::post('/admin/category/update/{id}', [AdminCategoryController::class, 'update_category'])->name('admin.updateCategory');
    Route::post('/admin/category/delete/{id}', [AdminCategoryController::class, 'delete_category'])->name('admin.deleteCategory');
});

/*------------------------------------------
        All Admin Routes List
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:SUPERADMIN'])->group(function () {

//     Route::get('/superadmin/home', [HomeController::class, 'superadminHome'])->name('superadmin.home');
// });
