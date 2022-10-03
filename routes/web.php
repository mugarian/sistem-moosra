<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Kriteria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Alternatif;
use App\Http\Controllers\C_SubKriteria;
use App\Http\Controllers\C_Penilaian;

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
Route::post('/alternatif/{id}/delete', [C_Alternatif::class, 'hapus']);

Route::get('/subkriteria', [C_SubKriteria::class, 'lihatSub'])->name('sub');
Route::get('/subkriteria/tambah/{id}', [C_SubKriteria::class, 'tambahSub'])->name('tambah_sub');
Route::post('/subkriteria', [C_SubKriteria::class, 'tambah']);
Route::get('/subkriteria/ubah/{id}', [C_SubKriteria::class, 'ubahSub'])->name('ubah_sub');
Route::post('/subkriteria/{id}/edit', [C_SubKriteria::class, 'ubah']);
Route::post('/subkriteria/{id}/delete', [C_SubKriteria::class, 'hapus']);

Route::get('/penilaian', [C_Penilaian::class, 'lihatPenilaian'])->name('penilaian');
Route::get('/penilaian/tambah/{id}', [C_Penilaian::class, 'tambahPenilaian'])->name('tambah_penilaian');
Route::post('/penilaian', [C_Penilaian::class, 'tambah']);
Route::get('/penilaian/ubah/{id}', [C_Penilaian::class, 'ubahPenilaian'])->name('ubah_penilaian');
Route::post('/penilaian/{id}/edit', [C_Penilaian::class, 'ubah']);
Route::post('/penilaian/{id}/delete', [C_Penilaian::class, 'hapus']);
