<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;
use App\DosenMatakuliah;

class RelationshipRebornController extends Controller
{
    public function ujiHas()
    {
    	return Dosen::has('dosenmatakuliah')->get();
    }
     public function ujiDoesntHave()
    {
    	return Dosen::doesntHave('dosenmatakuliah')->get();
    }
}
