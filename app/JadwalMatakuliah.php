<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    protected $table = 'jadwalmatakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
        
    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function DosenMatakuliah()
    {
        return $this->belongsTo(DosenMatakuliah::class);
    }

    public function getNamadsnAttribute(){
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

    
}
