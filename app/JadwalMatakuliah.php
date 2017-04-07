<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    protected $table = 'jadwalmatakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosenmatakuliah_id'];
        
    public function mahasiswa()//fungsi mahasiswa untuk menentukan hubungan pada model user
    
    {
        return $this->belongsTo(Mahasiswa::class);//untuk mendifinisikan nilai kembalian ke model mahasiswa memiliki relasi dengan data jadwalmatakuliah
            }
    public function ruangan()//fungsi dosen untuk menentukan hubungan pada model user
    {
        return $this->belongsTo(Ruangan::class);//untuk mendifinisikan nilai kembalian ke model ruangan memiliki relasi dengan data jadwalmatakuliah
       
    }

    public function dosenmatakuliah()//fungsi dosen untuk menentukan hubungan pada model user
    {
        return $this->belongsTo(DosenMatakuliah::class);//untuk mendifinisikan nilai kembalian ke model dosenmatakuliah memiliki relasi dengan data jadwalmatakuliah
    }

   /* public function getNamadsnAttribute(){
        return $this->dosenmatakuliah->dosen->nama;
    }
    public function getNipdsnAttribute(){
        return $this->dosenmatakuliah->dosen->nip;
    }
    public function getMKdsnAttribute(){
        return $this->dosenmatakuliah->matakuliah->title;
    }
    
    public function getNamamhsAttribute(){
        return $this->mahasiswa->nama;
    }

    public function getNimAttribute(){
        return $this->mahasiswa->nim;
    }
    public function getTitleruanganAttribute(){
        return $this->ruangan->title;
    }
*/
    
}
