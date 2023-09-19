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


Route::middleware('guest')->group(function () {
    Route::get('/login', 'AuthController@login_show')->name('web.login.show');
    Route::post('/login', 'AuthController@login_perfom')->name('web.login.perform');
});

Route::get('/check', 'TrackController@check')->name('web.track.check');
Route::post('/result', 'TrackController@result')->name('web.track.result');

Route::middleware('auth')->group(function () {
    Route::get('/', 'DashboardController')->name('web.dashboard');
    Route::get('/laporan', 'ReportController')->name('web.report');

    Route::get('/profile', 'AuthController@profile')->name('web.profile.show');
    Route::get('/profile/edit', 'AuthController@profile_edit')->name('web.profile.edit');
    Route::patch('/profile/edit', 'AuthController@profile_update')->name('web.profile.update');
    Route::get('/logout', 'AuthController@logout_perfom')->name('web.logout.perform');

    Route::get('/pelanggan', 'CustomerController@index')->name('web.customer.index');
    Route::get('/pelayanan', 'CustomerController@service')->name('web.customer.service');
    Route::get('/pelanggan/buat', 'CustomerController@create')->name('web.customer.create');
    Route::get('/pelanggan/{customer}', 'CustomerController@show')->name('web.customer.show');
    Route::get('/pelanggan/{customer}/edit', 'CustomerController@edit')->name('web.customer.edit');
    Route::post('/pelanggan', 'CustomerController@store')->name('web.customer.store');
    Route::patch('/pelanggan/{customer}', 'CustomerController@update')->name('web.customer.update');
    Route::delete('/pelanggan/{customer}', 'CustomerController@destroy')->name('web.customer.destroy');

    // baru
    Route::post('/daftarpelanggan', 'CustomerController@storecus')->name('web.customer.storecus');
    Route::get('/pelangganverif', 'CustomerController@verif')->name('web.customer.verif');




    Route::get('/submission/{submission}/edit', 'SubmissionController@edit')->name('web.submission.edit');
    Route::patch('/submission/{submission}', 'SubmissionController@update')->name('web.submission.update');

    Route::get('/data-master', 'DataMasterController@index')->name('web.data_master.index');
    Route::get('/data-master2', 'DataMasterController@showakun')->name('web.data_master.showakun');
    Route::get('/data-master4', 'DataMasterController@showberkas')->name('web.data_master.showberkas');
    Route::get('/data-master3', 'DataMasterController@showlayanan')->name('web.data_master.showlayanan');

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
});
