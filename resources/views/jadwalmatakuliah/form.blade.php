<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Mahasiswa</label>
		<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id' => 'mahasiswa_id','placeholder'=>"mahasiswa"]) !!}
	</div>	
</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" id="dosenmatakuliah_id">Matakuliah</label>
		<div class="col-sm-10">
		{!! Form::select('dosenmatakuliah_id',$dosenmatakuliah->listDosenDanMatakuliah(),null,['class'=>'form-control','id' => 'dosenmatakuliah_id','placeholder'=>"matakuliah"]) !!}	
	</div>
</div>

<div class="form-group">
		<label class="col-sm-2 control-label" id="ruangan_id">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id' => 'ruangan_id','placeholder'=>"ruangan"]) !!}
	</div>
</div>