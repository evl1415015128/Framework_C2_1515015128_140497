<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMatakuliah;
use App\Mahasiswa;
use App\DosenMatakuliah;
use App\Dosen;
use App\Ruangan;

class JadwalMatakuliahController extends Controller
{
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

    public function simpan(Requests $input)
    {
      $jadwalmatakuliah = new JadwalMatakuliah($input->only('ruangan_id','dosen_matakuliah_id','   mahasiswa_id'));
            if($jadwalmatakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil disimpan";
            return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);

 }
    public function lihat($id){
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        return view('jadwalmatakuliah.lihat',compact('jadwalmatakuliah'));
    }
    public function edit($id){
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenmatakuliah = new DosenMatakuliah;
        return view('jadwalmatakuliah.edit',compact('mahasiswa','ruangan','dosenmatakuliah','jadwalmatakuliah'));
    }
    public function update($id,Request $input)
    {
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        $jadwalmatakuliah->fill($input->only('ruangan_id','dosenmatakuliah_id','mahasiswa_id'));
        if($jadwalmatakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $jadwalmatakuliah = JadwalMatakuliah::find($id);
        if($jadwalmatakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        // $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwalmatakuliah')-> with(['informasi'=>$this->informasi]);
    }
}