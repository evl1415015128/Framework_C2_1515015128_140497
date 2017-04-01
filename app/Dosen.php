<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $table = 'dosen';
    //protected $fillable = ['nama','nip','alamat','pengguna_id'];

    public function pengguna()//fungsi pengguna untuk menentukan hubungan pada model user
    {
    	return $this->belongsTo(Pengguna::class);  //untuk mendifinisikan nilai kembalian ke model dosen memiliki relasi dengan data pengguna
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }


    public function dosenmatakuliah()//fungsi dosenmatakuliah untuk menentukan hubungan pada model user
    {
    	return $this->hasMany(DosenMatakuliah::class);  //untuk mendifinisikan hubungan model dosen  memiliki relasi  many dengan data dosenmatakuliah
        }
    public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
}
