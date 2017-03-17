<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;

class DosenMatakuliahController extends Controller
{
   public function awal(){
   return "Hello dari DosenMatakuliahController";
   }
   public function tambah(){
   	return $this->simpan();
   }
   public function simpan(){
   	$dosenmatakuliah = new DosenMatakuliah();
   	$dosenmatakuliah-> dosen_id = 1;
   	$dosenmatakuliah-> matakuliah_id = 1;
	$dosenmatakuliah-> save();
   	return "Dosen matakuliah dengan id dosen {$dosenmatakuliah->dosen_id}  dan matakuliah dengan id matakuliah {$dosenmatakuliah->matakuliah_id}  telah tersimpan";
   	
   }

}
