<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController; // Pastikan untuk mengimpor DashboardController
=======
>>>>>>> 52cf1ac (inisialisasi awal)

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
<<<<<<< HEAD
    return view('index');
=======
    return view('welcome');
>>>>>>> 52cf1ac (inisialisasi awal)
});

Auth::routes();

<<<<<<< HEAD
// user route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sewalapangan', [HomeController::class, 'sewalapangan'])->name('sewalapangan');
Route::get('/formsewa', [HomeController::class, 'formsewa'])->name('formsewa');
Route::get('/formsewa/store', [HomeController::class, 'sewastore'])->name('formsewa.store');

// admin route
Route::get('admin/request_sewa_lapangan', [AdminController::class, 'reqsewa'])->name('reqsewa');
Route::get('admin/acc_request_sewa/{id}', [AdminController::class, 'accreqsewa'])->name('accreqsewa');
Route::get('admin/tolak_request_sewa/{id}', [AdminController::class, 'tlkreqsewa'])->name('tlkreqsewa');
Route::get('admin/acc_sewa_lapangan', [AdminController::class, 'accsewa'])->name('accsewa');
Route::get('admin/batal_acc_sewa/{id}', [AdminController::class, 'btlaccsewa'])->name('btlaccsewa');
Route::get('admin/exportPdf/{id}', [AdminController::class, 'exportPdf'])->name('exportPdf');
Route::resource('admin', AdminController::class);
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 52cf1ac (inisialisasi awal)
