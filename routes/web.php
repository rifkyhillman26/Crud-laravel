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
Route::post('/prosesdata', 'SiswaController@proses');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::put('/siswa/update/{id}', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');

