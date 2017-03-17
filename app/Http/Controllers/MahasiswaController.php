<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    public function awal(){
   	return "Hello dari MahasiswaController";
   }
   public function tambah(){
   	return $this->simpan();
   }
   public function simpan(){
   	$mahasiswa = new Mahasiswa();
   	$mahasiswa-> nama = 'Evi Lolita Apriyani';
   	$mahasiswa-> nim = '1515015128';
   	$mahasiswa-> alamat = 'Jl. Seruling no 7';
   	$mahasiswa-> pengguna_id = 1;
	$mahasiswa-> save();
   	return "mahasiswa dengan nama {$mahasiswa->nama}  dengan nim {$mahasiswa->nim} dan alamat {$mahasiswa->alamat}  dengan pengguna {$mahasiswa->pengguna_id} telah tersimpan";
   	
   }
    
}
