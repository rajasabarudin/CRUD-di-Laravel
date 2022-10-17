<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Sederhana</title>
</head>
<body align="center">
<h3>Input Data Karyawan</h3>

<br><br>

<form action="/karyawan/store" method="post">
{{ csrf_field() }}
<table align="center">

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" required="required"></td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" name="jabatan" required="required"></td>
    </tr>

    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><input type="number" name="umur" required="required"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" required="required"></textarea></td>
    </tr>

    <tr>
        <td><a href="/karyawan">Kembali</a></td>
        <td>|</td>
        <td><input type="submit" value="Simpan Data"></td>
    </tr>
</table>
</form>
    
</body>
</html>