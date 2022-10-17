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
				
        </style>
    <title>Toko Sederhana</title>
</head>
<body align="center">
	
	<table align="center" width=40%> 
	<tr>
	<td><h2>Data Karyawan Toko Sederhana</h2></td>
	</tr>
	<tr>
	<td>Jl Natuna, Kawasan Subi, Indonesia | No AAA 8 | HP : 2876 78567 8756
	<hr></td>
	</tr>
	<tr>
	
	</table>
    
<br>

    <table border=1 align="center">
    <tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td align="left">{{ $p->nama }}</td>
			<td align="left">{{ $p->jabatan }}</td>
			<td align="center">{{ $p->umur }}</td>
			<td align="left">{{ $p->alamat }}</td>
			
		</tr>
		@endforeach
         
    </table>
    <p>Dicetak di Pontianak, <?php echo date('l, d-m-Y  H:i:s'); ?></p>
</body>
</html>