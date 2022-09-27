<?php

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Kriteria;
use App\Http\Controllers\C_Login;
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

Route::get('/', [C_Login::class, 'index'])->name('login')->middleware('guest');
Route::get('/home', [C_Home::class, 'index'])->name('home');
Route::get('/kriteria', [C_Kriteria::class, 'lihatKriteria'])->name('kriteria');
Route::get('/kriteria/ubah/{id}', [C_Kriteria::class, 'ubahKriteria'])->name('ubah_kriteria');


