<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- css tabel -->
	<style>
            table { 
				border-collapse: collapse; 
				}
				{ 
				width: 100%; 
				} 
				th 
				{ height: 50px; }

			b {
				background-color:#228B22; /* warna */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				}

				c {
				background-color:#FF8C00; /* warna */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				}

				d {
				background-color:#B22222; /* warna */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				}

				e {
				background-color:#D2691E; /* warna */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				}
				
        </style>
    <title>Toko Sederhana</title>
</head>
<body align="center">
	

	<table align="center" width=40%> 
	<tr>
	<td><h2>Data Karyawan Toko Sederhana</h2></td>
	</tr>
	
	<tr>
	<td><a href="/karyawan/tambah"><b align="center">+Tambah Data</b></a>|<a href="/laporan" target="_blank"><e align="center">Cetak Laporan</e></a></td>
	
	</tr>
	</table>
	<br>
	<form action="/karyawan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Karyawan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
<br>

    <table border=1 align="center">
    <tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/karyawan/edit/{{ $p->karyawan_id }}"><c>Edit</c></a> 
				|
				<a href="/karyawan/hapus/{{ $p->karyawan_id }}"><d>Hapus</d></a> 
			</td>
		</tr>
		@endforeach
		
    </table>
	<br>
	<p>Halaman : {{ $karyawan->currentPage() }}  | Jumlah Data : {{ $karyawan->total() }} | Data Per Halaman : {{ $karyawan->perPage() }}</p>
<p>{{ $karyawan->links() }}</p>
</body>
</html>