@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwalmatakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Jadwal Matakuliah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Mahasiswsa Id</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->mahasiswa_id }}</td>
		</tr>	
		<tr>
			<td>Ruangan Id</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->ruangan_id }}</td>
		</tr>	
		<tr>
			<td>Dosenmatakuliah Id</td>
			<td>:</td>
			<td>{{ $jadwalmatakuliah->dosenmatakuliah_id }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwalmatakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwalmatakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
