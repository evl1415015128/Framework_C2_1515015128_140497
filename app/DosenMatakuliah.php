<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMatakuliah extends Model
{
    protected $table = 'dosenmatakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
     public function dosen()//fungsi dosen untuk menentukan hubungan pada model user
    {
        return $this->belongsTo(Dosen::class); //untuk mendifinisikan nilai kembalian ke model dosenmatakuliah memiliki relasi dengan data dosen
        }
    public function matakuliah()//fungsi matakuliah untuk menentukan hubungan pada model user
    {
        return $this->belongsTo(Matakuliah::class);//untuk mendifinisikan nilai kembalian ke model dosenmatakuliah memiliki relasi dengan data matakuliah
           }
    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }
    public function getNipdosenAttribute(){
        return $this->dosen->nip;
    }
    public function getTitlematakuliahAttribute(){
        return $this->matakuliah->title;
    }

    public function jadwalmatakuliah()//fungsi jadwalmatakuliah untuk menentukan hubungan pada model user
    {
        return $this->hasMany(JadwalMatakuliah::class);//untuk mendifinisikan hubungan model dosenmatakuliah memiliki relasi many dengan data jadwalmatakuliah 
           }

    public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} {$dsnMtk->dosen->nip} (Matakuliah {$dsnMtk->matakuliah->title})";
    	}
    	return $out;
    }

}
