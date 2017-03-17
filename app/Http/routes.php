<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('jadwalmatakuliah/tambah', 'JadwalMatakuliahController@tambah');//
Route::get('jadwalmatakuliah', 'JadwalMatakuliahController@awal');//

Route::get('dosenmatakuliah/tambah', 'DosenMatakuliahController@tambah');//
Route::get('dosenmatakuliah', 'DosenMatakuliahController@awal');

Route::get('dosen/tambah', 'DosenController@tambah');//
Route::get('dosen', 'DosenController@awal');//

Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');//
Route::get('mahasiswa', 'MahasiswaController@awal');//

Route::get('matakuliah/tambah', 'MatakuliahController@tambah');//
Route::get('matakuliah', 'MatakuliahController@awal');//

Route::get('ruangan/tambah', 'RuanganController@tambah');//
Route::get('ruangan', 'RuanganController@awal');//

Route::get('pengguna/tambah', 'PenggunaController@tambah');//route membaca yg lebih spesifik dulu khususnya lebih didahulukan contoh khusus tambah = 'pengguna/tambah'
Route::get('pengguna', 'PenggunaController@awal');//route membaca yg lebih spesifik dulu khususnya lebih didahulukan contoh khusus pengguna = 'pengguna'
Route::get('/', function () {
    return view('welcome');
});
Route::get('/public', function () {
    return ('Nama Saya : Evi Lolita Apriyani');
});
Route::get('hello-world', function () {
    return ('hello world');
});

Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "hello world dari pengguna $pengguna";//route parameter
});
Route::get('berita/{berita?}', function ($berita = "Laravel 5") {
    return "berita $berita belum dibaca";//route parameter
});

