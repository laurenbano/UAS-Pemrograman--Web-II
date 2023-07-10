@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Lihat Data Penitipan</h3>
	@csrf
		<table class="table">
			<tr>
				<td width="200">NO KTP</td><td>{{ $row->no_ktp }}</td>
			</tr>
			<tr>
				<td>NAMA PEMILIK</td><td>{{ $row->nama }}</td>
			</tr>
			<tr>
				<td>NO TELEPON</td><td>{{ $row->no_telp }}</td>
			</tr>
			<tr>
				<td>ALAMAT</td><td>{{ $row->alamat }}</td>
			</tr>
			<tr>
				<td>JENIS HEWAN</td><td>{{ $row->jenis_hewan }}</td>
			</tr>
			<tr>
				<td>KETERANGA HEWAN</td><td>{{ $row->keterangan_hewan }}</td>
			</tr>
		</table>
</div>
@endsection
