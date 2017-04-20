<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class JadwalMatakuliahRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
        'mahasiswa_id'=>'required',
    	'ruangan_id'=>'required',
    	'dosenmatakuliah_id'=>'required'
        ];

        return $validasi;
    }
}
