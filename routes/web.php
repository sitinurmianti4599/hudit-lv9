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
Route::view('/form-akun-edit', 'form-akun-edit');
Route::view('/form-berkas-tambah', 'form-berkas-tambah');
Route::view('/form-pelanggan-tambah', 'form-pelanggan-tambah');
Route::view('/form-pelanggan-edit', 'form-pelanggan-edit');
Route::view('/form-monitor-berkas-edit', 'form-monitor-berkas-edit');
Route::view('/form-profile-edit', 'form-profile-edit');



Route::get('/data-master', 'DataMasterController@index')->name('web.data_master.index');

Route::get('/form-akun-tambah', 'UserController@create')->name('web.user.create');
Route::get('/form-berkas-edit/{user}', 'UserController@edit')->name('web.user.edit');
Route::post('/form-akun-tambah', 'UserController@store')->name('web.user.store');
Route::patch('/form-akun-perbarui/{user}', 'UserController@update')->name('web.user.update');
Route::delete('/form-akun-perbarui/{user}', 'UserController@destroy')->name('web.user.destroy');

Route::get('/form-layanan-tambah', 'ServiceController@create')->name('web.service.create');
Route::post('/form-layanan-tambah', 'ServiceController@store')->name('web.service.store');
Route::get('/form-layanan-edit/{service}', 'ServiceController@edit')->name('web.service.edit');
Route::patch('/form-layanan-edit/{service}', 'ServiceController@update')->name('web.service.update');
Route::delete('/form-layanan-edit/{service}', 'ServiceController@destroy')->name('web.service.destroy');

Route::get('/form-berkas', 'FileController@create')->name('web.file.create');
Route::post('/form-berkas', 'FileController@store')->name('web.file.store');
Route::get('/form-berkas/{file}', 'FileController@edit')->name('web.file.edit');
Route::patch('/form-berkas/{file}', 'FileController@update')->name('web.file.update');
Route::delete('/form-berkas/{file}', 'FileController@destroy')->name('web.file.destroy');
