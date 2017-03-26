<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;
use App\JadwalMatakuliah;
use App\Dosen;
use App\Matakuliah;

class DosenMatakuliahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaDosenMatakuliah = DosenMatakuliah::all();
        return view('dosenmatakuliah.awal', compact('semuaDosenMatakuliah'));
    
    }

    public function tambah()
    {      
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosenmatakuliah.tambah',compact('dosen','matakuliah'));
      return $this->simpan();
    }
    public function simpan(Request $input)
    {
                $jadwalmatakuliah = new JadwalMatakuliah;
        $dosenmatakuliah = new DosenMatakuliah($input->only('dosen_id','matakuliah_id'));
            if($jadwalmatakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil disimpan";
            return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);

   }
    public function lihat($id){
        $dosenmatakuliah = DosenMatakuliah::find($id);
        return view('dosenmatakuliah.lihat',compact('dosenmatakuliah'));
    }
    public function edit($id){
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosenmatakuliah.edit',compact('dosen','matakuliah','dosenmatakuliah'));
    }
    public function update($id,Request $input)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $dosenmatakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosenmatakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
        return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        if($dosenmatakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        return redirect('dosenmatakuliah')-> with(['informasi'=>$this->informasi]);
    }
}

