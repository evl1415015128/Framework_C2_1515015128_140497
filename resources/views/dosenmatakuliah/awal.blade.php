@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Dosen Matakuliah</strong>
		<a href="{{url('dosenmatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Dosen Matakuliah</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Dosen Matakuliah</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaDosenMatakuliah as $dosenmatakuliah)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $dosenmatakuliah->dosen->nama or 'nama Kosong' }}</td>
				<td>{{ $dosenmatakuliah->matakuliah->title or 'matakuliah Kosong' }}</td>
				<!-- <td>{{ $dosenmatakuliah->jadwalmatakuliah->dosenmatakuliah->matakuliah_id or 'dosenmatakuliah Kosong' }}</td> -->
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('dosenmatakuliah/edit/'.$dosenmatakuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('dosenmatakuliah/lihat/'.$dosenmatakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('dosenmatakuliah/hapus/'.$dosenmatakuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop