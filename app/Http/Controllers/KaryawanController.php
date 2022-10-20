<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //penggunaan query builder

class KaryawanController extends Controller
{
    //halaman index di view
    public function index()
    {
        //fungsi pigination
        $karyawan = DB::table('karyawan')->paginate(5)->withQueryString();
        //fungsi mengambil data dari tabel karyawan
     //   $karyawan = DB::table('karyawan')->get();

        //mengirim data karyawan ke bagian view
        return view('index', ['karyawan'=>$karyawan]);
    }

    //halaman menampilkan tambah di view
    public function tambah()
    {
        return view('tambah');
    }

    //methode  untuk insert data ke tabel karyawan
    public function store(Request $request)
    {
        //insert data ke tabel karyawan
        DB::table('karyawan')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        //kembali ke halaman karyawan
        return redirect('/karyawan');
    }

    //method untuk edit data karyawan
    public function edit($id)
    {
        //mengambil data berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('karyawan_id',$id)->get();

        //passing data karyawan di dapat ke view edit.balade.php 
        return view('edit',['karyawan' => $karyawan]);
    }

    //update data karyawan
    public function update(Request $request)
    {
        //update data pegawai
        DB::table('karyawan')->where('karyawan_id',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' =>$request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        //kembali ke halaman karyawan
        return redirect('/karyawan');
    }

    //method untuk hapus data karyawan
    public function hapus($id)
    {
        //menghapus data karyawan berdasarkan id yang di pilih
        DB::table('karyawan')->where('karyawan_id',$id)->delete();

        //kembali ke halaman karyawan
        return redirect('/karyawan');
    }

    public function laporan()
    {
        //fungsi mengambil data dari tabel karyawan
        $karyawan = DB::table('karyawan')->get();

        //mengirim data karyawan ke bagian view
        return view('laporan', ['karyawan'=>$karyawan]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data karyawan ke view index
		return view('index',['karyawan' => $karyawan]);
 
	}
}
