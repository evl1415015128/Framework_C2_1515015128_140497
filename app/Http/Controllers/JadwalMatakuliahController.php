<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMatakuliah;
use App\Mahasiswa;
use App\DosenMatakuliah;
use App\Dosen;
use App\Ruangan;
use App\Http\Requests\JadwalMatakuliahRequest;

class JadwalMatakuliahController extends Controller
{
   /*protected $guarded = ['id'];*/
   protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaJadwalMatakuliah = JadwalMatakuliah::all();//
        return view('jadwalmatakuliah.awal', compact('semuaJadwalMatakuliah'));
      // return "Hello dari Jadwal_MatakuliahController";
    }

    public function tambah()
    {
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenmatakuliah = new DosenMatakuliah;
        return view('jadwalmatakuliah.tambah',compact('mahasiswa','ruangan','dosenmatakuliah'));
      // return $this->simpan();
    }
    public function simpan(JadwalMatakuliahRequest $input)
    {
     $jadwalmatakuliah = new JadwalMatakuliah($input->only('ruangan_id','dosenmatakuliah_id','mahasiswa_id'));
        if ($jadwalmatakuliah->save()) $this->informasi = "Jadwal Mahasiswa Berhasil Di Simpan";
        return redirect('jadwalmatakuliah')->with(['informasi' => $this->informasi]);
    }

    public function edit($id){
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenmatakuliah = new DosenMatakuliah;
        return view('jadwalmatakuliah.edit',compact('mahasiswa','ruangan','dosenmatakuliah','jadwalmatakuliah'));

    }
    public function lihat($id)
    {
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        return view('jadwalmatakuliah.lihat')->with(array('jadwalmatakuliah'=>$jadwalmatakuliah));
    }
    public function update($id,JadwalMatakuliahRequest $input)
    {
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        $jadwalmatakuliah ->ruangan_id=$input->ruangan_id;
        $jadwalmatakuliah ->dosenmatakuliah_id=$input->dosenmatakuliah_id;
        $jadwalmatakuliah ->mahasiswa_id=$input->mahasiswa_id;
        $informasi=$jadwalmatakuliah->save()?'Berhasil Update':'Gagal Update Data';
        //return redirect('jadwalmatakuliah')->with(['informasi'=>informasi]

       /* $jadwalmatakuliah ->fill($input->only('ruangan_id,dosenmatakuliah_id,mahasiswa_id'));
        if($jadwalmatakuliah->save()) $this->informasi="Jadwal Mahasiswa Berhasil Di Perbarui";
        */return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
       $jadwalmatakuliah = jadwalmatakuliah::find($id); 
        if ($jadwalmatakuliah->delete()) $this->informasi = "Jadwal Mahasiswa Berhasil di Hapus";
        return redirect('jadwalmatakuliah')->with(['informasi' =>$this->informasi]);
}
}