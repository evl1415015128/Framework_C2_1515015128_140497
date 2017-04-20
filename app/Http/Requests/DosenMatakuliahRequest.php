<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
/*use App\Http\Dosen;
use App\Http\Matakuliah;*/

class DosenMatakuliahRequest extends Request
{
    public function authorize()
    {
    	return true;
    }
    public function rules()
    {
    	$validasi = [
    	'dosen_id'=>'required',
    	'matakuliah_id'=>'required'
        ];
    
    return $validasi;
    }
}
