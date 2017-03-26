@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{url('jadwalmatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Jadwal Mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>NIM Mahasiswa</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaJadwalMatakuliah as $jadwalmatakuliah)
			<tr>
				<td>{{ $x++}}</td>
				
				<td>{{ $jadwalmatakuliah->mahasiswa->nama or 'Nama Kosong' }}</td>
				<td>{{ $jadwalmatakuliah->mahasiswa->nim or 'NIM Kosong' }}</td>
				<td>{{ $jadwalmatakuliah->dosenmatakuliah->matakuliah->title or 'Matakuliah Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('jadwalmatakuliah/edit/'.$jadwalmatakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('jadwalmatakuliah/lihat/'.$jadwalmatakuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jadwalmatakuliah/hapus/'.$jadwalmatakuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop