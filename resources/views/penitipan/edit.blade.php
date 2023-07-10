@extends('layouts.app')
@section('content')
<div class="container"> 
<h3>Edit Data Penitipan</h3>
	<form class="form" action="{{ url('/penitipan/' . $row->id) }}" method="POST">
	<input name="_method" type="hidden" value="PATCH"> 
	@csrf
		<table class="table">
			<tr>
				<td WIDTH="200">NO KTP</td>
				<td><input class="py-1 px-2 border rounded form-control " type="text" name="no_ktp" value="{{ $row->no_ktp }}"></td>
				<td></td><td></td><td></td><td></td><td></td>
			</tr>
			<tr>
				<td>NAMA PEMILIK</td><td><input class="py-1 px-2 border rounded form-control" type="text" name="nama" value="{{ $row->nama }}"></td>
			</tr>
			<tr>
				<td>NO TELEPON</td><td><input class="py-1 px-2 border rounded form-control" type="text" name="no_telp" value="{{ $row->no_telp }}"></td>
			</tr>
			<tr>
				<td>ALAMAT</td><td><input class="py-1 px-2 border rounded form-control" type="text" name="alamat" value="{{ $row->alamat }}"></td>
			</tr>
			<tr>
				<td>JENIS HEWAN</td><td><input class="py-1 px-2 border rounded" type="text" name="jenis_hewan" value="{{ $row->jenis_hewan }}"></td>
			</tr>
			<tr>
				<td>KETERANGAN HEWAN</td><td><input class="py-1 px-2 border rounded form-control" type="text" name="keterangan_hewan" value="{{ $row->keterangan_hewan }}"></td>
			</tr>
			<tr>
				<td></td><td><input class="btn btn-primary" type="submit" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection
