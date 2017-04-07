<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['title'];
     public function jadwalmatakuliah()//fungsi dosen untuk menentukan hubungan pada model user
    {
        return $this->hasMany(JadwalMatakuliah::class,'ruangan_id');//untuk mendifinisikan hubungan model ruangan memiliki relasi many dengan data jadwalmatakuliah 
      
    }
}
