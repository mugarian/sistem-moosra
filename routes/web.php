<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Kriteria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Alternatif;

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

Route::get('/', [C_Login::class, 'index'])->name('login')->middleware('guest');
Route::get('/home', [C_Home::class, 'index'])->name('home');

Route::get('/kriteria', [C_Kriteria::class, 'lihatKriteria'])->name('kriteria');
Route::get('/kriteria/ubah/{id}', [C_Kriteria::class, 'ubahKriteria'])->name('ubah_kriteria');
Route::post('/kriteria/{id}/edit', [C_Kriteria::class, 'ubah']);

Route::get('/alternatif', [C_Alternatif::class, 'lihatAlternatif'])->name('alternatif');
Route::get('/alternatif/tambah/', [C_Alternatif::class, 'tambahAlternatif'])->name('tambah_Alternatif');
Route::post('/alternatif', [C_Alternatif::class, 'tambah']);
Route::get('/alternatif/ubah/{id}', [C_Alternatif::class, 'ubahAlternatif'])->name('ubah_Alternatif');
Route::post('/alternatif/{id}/edit', [C_Alternatif::class, 'ubah']);
Route::post('/alternatif/{id}/hapus', [C_Alternatif::class, 'hapus']);


