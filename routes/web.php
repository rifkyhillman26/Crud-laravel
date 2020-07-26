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
    return view('home');
});

Route::get('/datasiswa', 'SiswaController@index');
Route::get('/siswa/tambahdata', 'SiswaController@tambah');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');
Route::post('/prosesdata', 'SiswaController@proses');
Route::put('/siswa/{id}', 'SiswaController@ubah');
// Route::delete('/siswa/{id}', 'SiswaController@hapus');
