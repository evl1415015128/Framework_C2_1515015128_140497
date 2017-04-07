<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

   public function dosen()//fungsi dosen untuk menentukan hubungan pada model user
    {
    	return $this->hasOne(Dosen::class);//untuk mendifinisikan hubungan model pengguna memiliki relasi one dengan data dosen
          }
    public function mahasiswa()//fungsi nahasiswa untuk menentukan hubungan pada model user
    {
    	return $this->hasOne(Mahasiswa::class);//untuk mendifinisikan hubungan model pengguna memiliki relasi one dengan data mahasiswa
}
}