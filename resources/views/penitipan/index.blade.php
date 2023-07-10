@extends('layouts.app')

@section('content')

<div class="container">
<h3>Daftar Penitipan Hewan</h3>
	<td><a class="btn btn-primary my-2" href="{{ url('penitipan/create') }}">Tambah Data</a></td>
	<form class="form" method="get" action="{{ route('search') }}">
		    <div class="form-group w-100 mb-3">
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
		        <button type="submit" class="btn btn-primary mb-1">Cari</button>
		    </div>
		</form>
	<div class="table-responsive">
		<table class="table"> 
			<tr class="">
				<th>NO KTP</th>
				<th>NAMA PEMILIK</th>
				<th>NO TELEPON</th>
				<th>ALAMAT</th>
				<th>JENIS HEWAN</th>
				<th>KETERANGAN HEWAN</th>
			</tr>
			@foreach($rows as $row)
				<tr>
					<td>{{ $row->no_ktp }}</td>
					<td>{{ $row->nama }}</td>
					<td>{{ $row->no_telp }}</td>
					<td>{{ $row->alamat }}</td>
					<td>{{ $row->jenis_hewan }}</td>
					<td>{{ $row->keterangan_hewan }}</td>
					<td><a href="{{ url('penitipan/' . $row->id . '/edit') }}">Edit</a></td>
					<td><a href="{{ url('penitipan/' . $row->id . '/lihat') }}">Lihat</a></td>
					<td>
						<form action="{{ url('penitipan/' . $row->id) }}" method="POST">
							<input name="_method" type="hidden" value="DELETE">
							@csrf
							<button class="btn btn-danger">Hapus</button>
						</form>			
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection