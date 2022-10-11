<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Laporan;
use App\Http\Controllers\C_Kriteria;
use App\Http\Controllers\C_Penilaian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Alternatif;
use App\Http\Controllers\C_SubKriteria;

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
Route::post('/login', [C_Login::class, 'cekStatusLogin'])->middleware('guest');
Route::post('/logout', [C_Login::class, 'logout'])->middleware('auth');
Route::get('/home', [C_Home::class, 'index'])->name('home')->middleware('auth');

Route::get('/kriteria', [C_Kriteria::class, 'lihatKriteria'])->name('kriteria')->middleware('auth');
Route::get('/kriteria/ubah/{id}', [C_Kriteria::class, 'ubahKriteria'])->name('ubah_kriteria')->middleware('auth');
Route::post('/kriteria/{id}/edit', [C_Kriteria::class, 'ubah']);

Route::get('/alternatif', [C_Alternatif::class, 'lihatAlternatif'])->name('alternatif')->middleware('auth');
Route::get('/alternatif/tambah/', [C_Alternatif::class, 'tambahAlternatif'])->name('tambah_Alternatif')->middleware('auth');
Route::post('/alternatif', [C_Alternatif::class, 'tambah']);
Route::get('/alternatif/ubah/{id}', [C_Alternatif::class, 'ubahAlternatif'])->name('ubah_Alternatif')->middleware('auth');
Route::post('/alternatif/{id}/edit', [C_Alternatif::class, 'ubah']);
Route::post('/alternatif/{id}/delete', [C_Alternatif::class, 'hapus']);

Route::get('/subkriteria', [C_SubKriteria::class, 'lihatSub'])->name('sub')->middleware('auth');
Route::get('/subkriteria/tambah/{id}', [C_SubKriteria::class, 'tambahSub'])->name('tambah_sub')->middleware('auth');
Route::post('/subkriteria', [C_SubKriteria::class, 'tambah']);
Route::get('/subkriteria/ubah/{id}', [C_SubKriteria::class, 'ubahSub'])->name('ubah_sub')->middleware('auth');
Route::post('/subkriteria/{id}/edit', [C_SubKriteria::class, 'ubah']);
Route::post('/subkriteria/{id}/delete', [C_SubKriteria::class, 'hapus']);

Route::get('/penilaian', [C_Penilaian::class, 'lihatPenilaian'])->name('penilaian')->middleware('auth');
Route::get('/penilaian/tambah/{id}', [C_Penilaian::class, 'tambahPenilaian'])->name('tambah_penilaian')->middleware('auth');
Route::post('/penilaian', [C_Penilaian::class, 'tambah']);
// Route::get('/penilaian/ubah/{id}', [C_Penilaian::class, 'ubahPenilaian'])->name('ubah_penilaian');
Route::get('/penilaian/{id}', [C_Penilaian::class, 'jalur'])->name('ubah_penilaian')->middleware('auth');
Route::post('/penilaian/{id}/edit', [C_Penilaian::class, 'ubah']);
Route::post('/penilaian/{id}/delete', [C_Penilaian::class, 'hapus']);

Route::get('/laporan', [C_Laporan::class, 'lihatLaporan'])->name('laporan')->middleware('auth');
