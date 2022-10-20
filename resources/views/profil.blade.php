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
<body>
    <h1>Profil Pengguna</h1>
    <table>
        <tr>
            <td rowspan=4><img src="img/rjd.jpeg" alt="bang raje" width=200></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>bang raje</td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td>raje@gmail.com</td>
        </tr>

        <tr>
            <td>Contact</td>
            <td>:</td>
            <td>021-1234 5678</td>
        </tr>
    </table>
    
</body>
</html>

@endsection