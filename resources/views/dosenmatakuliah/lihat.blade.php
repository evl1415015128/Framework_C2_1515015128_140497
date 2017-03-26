@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('dosenmatakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Jadwal Dosen</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->dosen->nama }}</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->dosen->nip }}</td>
		</tr>
		<tr>
			<td>Matakuliah</td>
			<td>:</td>
			<td>{{ $dosenmatakuliah->matakuliah->title }}</td>
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