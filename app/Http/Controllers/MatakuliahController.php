<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    //
    public function awal()
    {
        //return "hello dari matakuliahcontroller nih gaiss";
        return view('matakuliah.awal', ['data'=>matakuliah::all()]);
    }
    public function tambah()
    {
        //return $this->simpan();
         return view('matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        // $matakuliah = new Matakuliah();
        // $matakuliah->title = 'Mulitmedia';
        // $matakuliah->keterangan = 'tidak wajib';
        // $matakuliah->save();
        // return "data {$matakuliah->title} telah disimpan";
        $matakuliah = new matakuliah();
        $matakuliah->title = $input->title;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('matakuliah')->with(['infromasi'=>$informasi]);
    }
    public function edit($id)
    {
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id)
    {
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
    public function update($id, Request $input)
    {
        $matakuliah = matakuliah::find($id);
        $matakuliah->title = $input->title;
        $matakuliah->keterangan= $input->keterangan;
        $informasi = $matakuliah->save()? 'berhasil update data' : 'gagal update data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $matakuliah = matakuliah::find($id);
        $informasi = $matakuliah->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
}
