@extends('layouts.tema')

@section('title')
Profil Saya
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
<body>
@foreach($karyawan as $p)
<form action="/karyawan/update" method="post">
{{ csrf_field() }}
<table align="center">

    <tr>
        <td align="center" colspan=3><h2>Edit Data Karyawan <br> <hr></h2></td>
    </tr>
    <tr>
        <td colspan=3><input type="hidden" name="id" value="{{ $p->karyawan_id }}"></td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" required="required" name="nama" value="{{ $p->nama }}"></td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"></td>
    </tr>

    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><input type="number" required="required" name="umur" value="{{ $p->umur }}"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea required="required" name="alamat">{{ $p->alamat }}</textarea></td>
    </tr>

    <tr>
        <td align="center" colspan=3><a href="/karyawan" class="btn btn-success">Kembali</a>
        |
        <input type="submit" value="Update" class="btn btn-warning"></td>
    </tr>
</table>
</form>
@endforeach
</body>
</html>

@endsection