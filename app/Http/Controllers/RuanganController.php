<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
use App\Http\Requests\RuanganRequest;
class RuanganController extends Controller
{
    //
    public function awal()
    {
      //return "hello dari ruangancontroller nih gaiss";
        return view('ruangan.awal', ['data'=>ruangan::all()]);
    }
    public function tambah()
    {
      //return $this->simpan();
        return view('ruangan.tambah');
    }
    public function simpan(RuanganRequest $input)
    {

       $ruangan = new ruangan();
        $ruangan->title = $input->title;
        $informasi = $ruangan->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangan')->with(['infromasi'=>$informasi]);
    }
     public function edit($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
    }
    public function lihat($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }
    public function update($id, RuanganRequest $input)
    {
        $ruangan = ruangan::find($id);
        $ruangan->title = $input->title;
        $informasi = $ruangan->save()? 'berhasil update data' : 'gagal update data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangan = ruangan::find($id);
        $informasi = $ruangan->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}
