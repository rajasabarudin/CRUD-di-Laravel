<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
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

   
	<table class="table table-bordered" align="center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Umur</th>
	  <th scope="col">Alamat</th>
	 
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
			
    </tr>
    	<?php $no++ ;?>
		@endforeach

  </tbody>
</table>
    <p align="center">Dicetak di Pontianak, <?php echo date('l, d-m-Y  H:i:s'); ?></p>
</body>
</html>