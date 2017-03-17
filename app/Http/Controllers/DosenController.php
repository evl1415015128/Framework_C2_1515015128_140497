<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
   	return "Hello dari DosenController";
   }
   public function tambah(){
   	return $this->simpan();
   }
   public function simpan(){
   	$dosen = new Dosen();
   	$dosen-> nama = 'Hario Jati';
   	$dosen-> nip = '111111111';
   	$dosen-> alamat = 'Jl. Kakap';
   	$dosen-> pengguna_id = 1;
	$dosen-> save();
   	return "Dosen dengan nama {$dosen->nama}  dengan nip {$dosen->nip} dan alamat {$dosen->alamat}  dengan pengguna {$dosen->pengguna_id} telah tersimpan";
   	
   }
}
