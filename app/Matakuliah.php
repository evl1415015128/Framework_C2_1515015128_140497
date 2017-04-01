<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['title','keterangan'];
    public function dosenmatakuliah()//fungsi dosenmatakuliah untuk menentukan hubungan pada model user
    {
        return $this->hasMany(DosenMatakuliah::class);//untuk mendifinisikan hubungan model matakuliah memiliki relasi many dengan data dosenmatakuliah 
      }
}
