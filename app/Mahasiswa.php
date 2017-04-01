<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    //protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()//fungsi dosen untuk menentukan hubungan pada model user
    {
    	return $this->belongsTo(Pengguna::class);//untuk mendifinisikan nilai kembalian ke model mahasiswa memiliki relasi dengan data jadwalmatakuliah
            }

    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
    	$out = [];
    	foreach ($this->all() as $mhs) {
    		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
    	}
    	return $out;
    }
    public function jadwalmatakuliah()//fungsi dosen untuk menentukan hubungan pada model user
    {
        return $this->hasMany(JadwalMatakuliah::class);///untuk mendifinisikan hubungan model mahasiswa memiliki relasi many dengan data jadwalmatakuliah 
      }
    
}
