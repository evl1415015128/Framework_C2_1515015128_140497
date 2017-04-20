<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MahasiswaRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
    	'nama'=>'required',//harus terisi
    	'nim'=>'required|integer',//nim harus terisi dan harus integer
    	'alamat'=>'required',
    	'username'=>'required'
    	];
    if($this->is('mahasiswa/tambah')){
    	$validasi['password']='required';
    }
    return $validasi;
    }
}
