<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMatakuliah;

class JadwalMatakuliahController extends Controller
{
    public function awal(){
   return "Hello dari JadwalMatakuliahController";
   }
   public function tambah(){
   	return $this->simpan();
   }
   public function simpan(){
   	$jadwalmatakuliah = new JadwalMatakuliah();
   	$jadwalmatakuliah-> mahasiswa_id = 1;
   	$jadwalmatakuliah-> ruangan_id = 1;
   	$jadwalmatakuliah-> dosenmatakuliah_id = 1;
	$jadwalmatakuliah-> save();
   	return "Jadwal matakuliah dengan id mahasiswa {$jadwalmatakuliah->mahasiswa_id}  dan ruangan dengan id ruangan {$jadwalmatakuliah->ruangan_id}  dan dosen matakuliahnya dengan id dosen matakuliah {$jadwalmatakuliah->dosenmatakuliah_id} telah tersimpan";
   	
   }
}
