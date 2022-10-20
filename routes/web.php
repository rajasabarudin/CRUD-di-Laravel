<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\StaffController; // panggil controller Staff
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
     //   "title"=>"Home"
    ]);
});

Route::get('profil', function () {
    return view('profil', [
     //   "title"=>"Home"
    ]);
});

Route::get('karyawan',[KaryawanController::class, 'index']);
Route::get('karyawan/tambah',[KaryawanController::class, 'tambah']);
Route::post('/karyawan/store',[KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('laporan',[KaryawanController::class, 'laporan']);
Route::get('karyawan/cari',[KaryawanController::class, 'cari']);

