@extends('layouts.tema')

@section('title')
Halaman Input Karyawan
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
<body align="center" class="bg-gradient-primary">

<form action="/karyawan/store" method="post">
{{ csrf_field() }}



<table align="center">

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
        <div class="col-sm-12 mb-12 mb-sm-12">
            <input type="text" name="nama" class="form-control form-control-user"  placeholder="nama Lengkap">
        </div>
    </td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>
            <div class="col-sm-12 mb-12 mb-sm-12">
                <input type="text" name="jabatan" class="form-control form-control-user"  placeholder="jabatan">
            </div>
        </td>
    </tr>

    <tr>
        <td>Umur</td>
        <td>:</td>
        <td>
                <div class="col-sm-12 mb-12 mb-sm-12">
                    <input type="number" name="umur" class="form-control form-control-user"  placeholder="jabatan">
                </div>
        </td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
            <div class="mb-3">
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>

        </td>
    </tr>

    <tr>
        <td><a href="/karyawan" class="btn btn-warning btn-user btn-block">Kembali</a></td>
        <td>|</td>
        <td><input type="submit" value="Simpan Data" class="btn btn-primary btn-user btn-block"></td>
    </tr>
</table>
</form>
    
</body>
</html>

@endsection