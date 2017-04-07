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
    protected $guarded = ['id'];
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
 
    }

      
    public function simpan(Request $input)
    {
        //$jadwalmatakuliah = new JadwalMatakuliah;
          $dosenmatakuliah = new Dosenmatakuliah($input->only('dosen_id','matakuliah_id'));
        if ($dosenmatakuliah->save()) $this->informasi = 'Dosen Matakuliah Berhasil Di Simpan';
        return redirect('dosenmatakuliah')->with(['informasi' => $this->informasi]);
    
       }
    public function edit($id){
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosenmatakuliah.edit',compact('dosen','matakuliah','dosenmatakuliah'));
    }
    public function lihat($id){
        $dosenmatakuliah = DosenMatakuliah::find($id);
        return view('dosenmatakuliah.lihat')->with(array('dosenmatakuliah'=>$dosenmatakuliah));
    }
    
    public function update($id,Request $input)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $dosenmatakuliah ->dosen_id=$input->dosen_id;
        $dosenmatakuliah ->matakuliah_id=$input->matakuliah_id;
        $informasi=$dosenmatakuliah->save()?'Berhasil Update':'Gagal Update Data';
        
        /*$dosenmatakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosenmatakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
        */
        return redirect('dosenmatakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $dosenmatakuliah = DosenMatakuliah::find($id);
        $informasi = $dosenmatakuliah->delete()? 'Berhasil hapus data' : 'gagal hapus data';
                //if($dosenmatakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        return redirect('dosenmatakuliah')-> with(['informasi'=>$this->informasi]);
    }
}

