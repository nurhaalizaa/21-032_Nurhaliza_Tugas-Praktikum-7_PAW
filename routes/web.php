<?php

use App\Http\Controllers\MahasiswaController;
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


//tampilan awal
Route::get('/',[MahasiswaController::class,'awal'])->name('awal');
// Route::get('/tampilan',[MahasiswaController::class,'home'])->name('home');

Route::get('/tambah',[MahasiswaController::class,'tambah'])->name('tambah');

Route::post('/tambahAction',[MahasiswaController::class,'tambahAction'])->name('tambahAction');

Route::get('/{id}/edit',[MahasiswaController::class,'edit'])->name('edit');

Route::put('/{id}',[MahasiswaController::class,'update'])->name('update');

Route::delete('/{id}/destroy',[MahasiswaController::class,'destroy'])->name('destroy');

// Route::get('/input',[MahasiswaController::class,'input'])->name('input');

Route::get('/about',[MahasiswaController::class,'about'])->name('about');

