<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MatakuliahRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
    	'title'=>'required',//harus terisi
    	'keterangan'=>'required',//nim harus terisi dan harus integer
    	];
    if($this->is('matakuliah/tambah')){
    	$validasi['keterangan']='required';
    }
    return $validasi;
    }
}
