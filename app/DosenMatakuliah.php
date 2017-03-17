<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMatakuliah extends Model
{
    protected $table = 'dosenmatakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
}
