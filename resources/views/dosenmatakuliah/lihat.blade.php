@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('dosenmatakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Dosen Matakuliah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Dosen ID</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->dosen_id }}</td>
		</tr>	
		<tr>
			<td>Matakuliah ID</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->matakuliah_id }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$dosenmatakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$dosenmatakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
