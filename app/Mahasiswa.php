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

    public function jadwalmatakuliah()//fungsi jadwalmatakuliah untuk menentukan hubungan pada model user
    {
        return $this->hasMany(JadwalMatakuliah::class,'mahasiswa_id');///untuk mendifinisikan hubungan model mahasiswa memiliki relasi many dengan data jadwalmatakuliah 
      }
    
    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mahasiswa) {
            $out[$mahasiswa->id] = "{$mahasiswa->nama} ({$mahasiswa->nim})";
        }
        return $out;
    }
}
