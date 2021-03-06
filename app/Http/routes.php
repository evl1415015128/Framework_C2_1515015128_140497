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
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
Route::group(['middleware'=>'AutentifikasiUser'],function ()
{
Route::get('pengguna/tambah', 'PenggunaController@tambah');//route membaca yg lebih spesifik dulu khususnya lebih didahulukan contoh khusus tambah = 'pengguna/tambah'
Route::get('pengguna', 'PenggunaController@awal');//route membaca yg lebih spesifik dulu khususnya lebih didahulukan contoh khusus pengguna = 'pengguna'
Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');//
Route::post('pengguna/simpan', 'PenggunaController@simpan');//
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');//
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');//
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');//

Route::get('dosenmatakuliah/lihat/{dosenmatakuliah}', 'DosenMatakuliahController@lihat');//
Route::post('dosenmatakuliah/simpan', 'DosenMatakuliahController@simpan');//
Route::get('dosenmatakuliah/edit/{dosenmatakuliah}', 'DosenMatakuliahController@edit');//
Route::post('dosenmatakuliah/edit/{dosenmatakuliah}', 'DosenMatakuliahController@update');//
Route::get('dosenmatakuliah/hapus/{dosenmatakuliah}', 'DosenMatakuliahController@hapus');//

Route::get('dosen/lihat/{dosen}', 'DosenController@lihat');//
Route::post('dosen/simpan', 'DosenController@simpan');//
Route::get('dosen/edit/{dosen}', 'DosenController@edit');//
Route::post('dosen/edit/{dosen}', 'DosenController@update');//
Route::get('dosen/hapus/{dosen}', 'DosenController@hapus');//

Route::get('mahasiswa/lihat/{mahasiswa}', 'MahasiswaController@lihat');//
Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');//
Route::get('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');//
Route::post('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@update');//
Route::get('mahasiswa/hapus/{mahasiswa}', 'MahasiswaController@hapus');//


Route::get('matakuliah/lihat/{matakuliah}', 'MatakuliahController@lihat');//
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');//
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');//
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');//
Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');//

Route::get('ruangan/lihat/{ruangan}', 'RuanganController@lihat');//
Route::post('ruangan/simpan', 'RuanganController@simpan');//
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');//
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');//
Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');//

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


Route::get('jadwalmatakuliah/lihat/{jadwalmatakuliah}', 'JadwalMatakuliahController@lihat');//
Route::post('jadwalmatakuliah/simpan', 'JadwalMatakuliahController@simpan');//
Route::get('jadwalmatakuliah/edit/{jadwalmatakuliah}', 'JadwalMatakuliahController@edit');//
Route::post('jadwalmatakuliah/edit/{jadwalmatakuliah}', 'JadwalMatakuliahController@update');//
Route::get('jadwalmatakuliah/hapus/{jadwalmatakuliah}', 'JadwalMatakuliahController@hapus');//
Route::get('jadwalmatakuliah/tambah', 'JadwalMatakuliahController@tambah');
Route::get('jadwalmatakuliah', 'JadwalMatakuliahController@awal');

Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');


});
Route::get('/ada_huruf_d_dosen',function()
{
	return \App\DosenMatakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%d%');
	})->with('dosen')->groupBy('dosen_id')->get();
});
Route::get('/ada_huruf_d_dan_a_dosenmatakuliah',function()
{
	return \App\DosenMatakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%d%');
	})
	->orWhereHas('matakuliah',function($kueri)
	{
		$kueri->where('title','like','%a%');
	})
	->with('dosen','matakuliah')
	->groupBy('dosen_id')
	->get();
});
Route::get('/ada_huruf_r_mahasiswa',function()
{
	return \App\JadwalMatakuliah::whereHas('mahasiswa',function($cueri)
	{
		$cueri->where('nama','like','%r%');
	})->with('mahasiswa')->groupBy('mahasiswa_id')->get();
});
Route::get('/ada_huruf_s_dan_7_jadwalmatakuliah',function()
{
	return \App\JadwalMatakuliah::whereHas('mahasiswa',function($cueri)
	{
		$cueri->where('nama','like','%s%');
	})
	->orWhereHas('ruangan',function($vueri)
	{
		$vueri->where('title','like','%7%');
	})
	->with('mahasiswa','ruangan')
	->groupBy('mahasiswa_id')
	->get();
});




/*Route::get('/', function () {
    return view('welcome');
});*/
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

Route::get('/b',function(Illuminate\Http\Request $request)
{	
	echo "Ini adalah request dari method get  ".$request->nama;
});

use Illuminate\Http\Request;
Route::get('/a',function()
{
	echo Form::open(['url'=>'/']).
		 Form::label('nama').
		 Form::text('nama',null).
		 Form::submit('kirim').
		 Form::close();
});
Route::post('/a',function(Request $request)
{	
	echo "hasil dari form input tadi nama: ".$request->nama;
});