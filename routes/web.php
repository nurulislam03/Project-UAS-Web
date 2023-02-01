<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/products', AdminProductController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\DaftarSiswaController::class)->group(function () {
    
    Route::get('/daftarsiswa','index');
    Route::get('/daftar-siswa', 'create');
    Route::post('/daftar-siswa', 'store');
    Route::get('/edit-siswa/{siswa_id}', 'edit');
    Route::put('/update-siswa/{siswa_id}', 'update');
    Route::delete('/delete-siswa/{siswa_id}', 'destroy');
    
});

Route::controller(App\Http\Controllers\PrestasiController::class)->group(function () {
    
    Route::get('/prestasi','index');
    Route::get('/tambah-prestasi', 'create');
    Route::post('/tambah-prestasi', 'store');
    Route::get('/edit-prestasi/{prestasi_id}', 'edit');
    Route::put('/update-prestasi/{prestasi_id}', 'update');
    Route::delete('/delete-prestasi/{prestasi_id}', 'destroy');
    
});