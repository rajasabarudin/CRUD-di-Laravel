@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	
	
    <title>Toko Sederhana</title>
</head>
<body align="center">

<table class="table table-borderless"> 
	<tr>
	<td><h2>Data Karyawan Toko Sederhana</h2></td>
	</tr>
	
	<tr>
	<td><a href="/karyawan/tambah" class="btn btn-success">+Tambah Data</a>|<a href="/laporan" target="_blank" class="btn btn-primary"><e align="center">Cetak Laporan</e></a></td>
	
	</tr>
	</table>
	<br>

<form action="/karyawan/cari" method="GET">
<div class="input-group mb-3">
	<input type="text" name="cari" class="form-control" placeholder="Cari Nama Karyawan .." value="{{ old('cari') }}">
	<button class="btn btn-success" type="submit" value="CARI">CARI</button>
</div>
</form>
	
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Umur</th>
	  <th scope="col">Alamat</th>
	  <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      
	  	<?php $no=1;?>
		@foreach($karyawan as $p)

      		<th scope="col">{{ $no }}</th>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/karyawan/edit/{{ $p->karyawan_id }}" class="btn btn-warning"><c>Edit</c></a> 
				|
				<a href="/karyawan/hapus/{{ $p->karyawan_id }}" class="btn btn-danger"><d>Hapus</d></a> 
			</td>
    </tr>
    	<?php $no++ ;?>
		@endforeach

  </tbody>
</table>
<div class="card-body">

<div>
	Halaman : {{ $karyawan->currentPage() }}  | 
	Jumlah Data : {{ $karyawan->total() }} |
	Data Per Halaman : {{ $karyawan->perPage() }}  
	<p>{{ $karyawan->links() }}</p>
	
</div>

</div>


</body>
</html>

@endsection