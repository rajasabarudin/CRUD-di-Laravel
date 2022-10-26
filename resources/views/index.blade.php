@extends('layouts.tema')

@section('title')
Halaman Karyawan
@endsection

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
	<td><a href="/karyawan/tambah" class="btn btn-success">+Tambah Data</a>|<a href="/laporan" target="_blank" class="btn btn-info"><e align="center">Cetak Laporan</e></a>
	|
		<button type="button" class="btn btn-primary position-relative">
			Total Data <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> {{ $karyawan->total() }} <span class="visually-hidden">karyawan</span></span>
		</button>
	</td>
	
	</tr>
	</table>
	<br>

<form action="/karyawan/cari" method="GET">
<!--
<div class="input-group mb-3">
	<input type="text" name="cari" class="form-control" placeholder="Cari Nama Karyawan .." value="{{ old('cari') }}">
	<button class="btn btn-primary" type="submit" value="CARI">CARI</button>
	
</div>
-->

<div class="input-group">
	<input type="text" class="form-control bg-light border-0 small"
		placeholder="Cari data karyawan..." aria-label="Search"
		aria-describedby="basic-addon2" name="cari" value="{{ old('cari') }}">
	<div class="input-group-append">
		<button class="btn btn-primary" type="submit" value="CARI">
			<i class="fas fa-search fa-sm"></i>
		</button>
	</div>
</div>
<br>

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
      
		  <?php 
			$no=1;
			$page = $karyawan->currentPage();
			$jmlData = $karyawan->perPage();
			if($page > 1){
				$no = (($page-1) * $jmlData) + 1;
			}
			?>
		@foreach($karyawan as $p)

      		<th scope="col">{{ $no }}</th>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
					
				
					
				<a href="/karyawan/edit/{{ $p->karyawan_id }}" class="btn btn-warning">Edit</a> 
				|
				<a href="/karyawan/hapus/{{ $p->karyawan_id }}" class="btn btn-danger">Hapus</a> 
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