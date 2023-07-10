@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Mahasiswa</h3> 
	<form method="post" action="{{ url('/penitipan') }}">
	@csrf 
		<div class="card-body">
			<div class="form-group">
			<table class="table px-1">
				<tr>
					<td>NO KTP</td>
					<td><input class="form-control" type="text" name="no_ktp"></td> 
					<td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr> 
					<td>NAMA PEMILIK</td>
					<td><input class="form-control" type="text" name="nama"></td>
				</tr>
				<tr> 
					<td>NO TELEPON</td>
					<td><input class="form-control" type="text" name="no_telp"></td>
				</tr>
				<tr> 
					<td width="200">ALAMAT</td>
					<td><input class="form-control" type="text" name="alamat"></td>
				</tr>
				<tr> 
					<td>JENIS HEWAN</td>
					<td><input class="form-control" type="text" name="jenis_hewan"></td>
				</tr>
				<tr> 
					<td>KETERANGA HEWAN</td>
					<td><input class="form-control" type="text" name="keterangan_hewan"></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit" value="SIMPAN"></td>
				</tr>
			</table>
			</div>
		</div>
	</form>
</div>

@endsection