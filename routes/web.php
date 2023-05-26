<?php

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
    return view('dashboard');
});

Route::get('/pelayanan', function () {
    return view('pelayanan');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/detail-pelanggan', function () {
    return view('detail-pelanggan');
});

Route::get('/data-master', function () {
    return view('data-master');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/detail-pelanggan', function () {
    return view('detail-pelanggan');
});




Route::view('/tes', 'tes');
Route::view('/cek', 'cek');
Route::view('/result', 'result');
Route::view('/profil', 'profile');
Route::view('/login', 'login');
Route::view('/form-akun-tambah', 'form-akun-tambah');
Route::view('/form-akun-edit', 'form-akun-edit');
Route::view('/form-berkas-tambah', 'form-berkas-tambah');
Route::view('/form-berkas-edit', 'form-berkas-edit');
Route::view('/form-layanan-tambah', 'form-layanan-tambah');
Route::view('/form-layanan-edit', 'form-layanan-edit');
Route::view('/form-pelanggan-tambah', 'form-pelanggan-tambah');
Route::view('/form-pelanggan-edit', 'form-pelanggan-edit');
Route::view('/form-monitor-berkas-edit', 'form-monitor-berkas-edit');
Route::view('/form-profile-edit', 'form-profile-edit');
