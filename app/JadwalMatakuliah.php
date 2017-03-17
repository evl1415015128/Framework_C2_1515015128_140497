<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    protected $table = 'jadwalmatakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosenmatakuliah_id'];
}
