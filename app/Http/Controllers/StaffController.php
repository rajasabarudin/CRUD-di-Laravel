<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Staff
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////validasi
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:staff|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);
        
        $staff = new Staff();
        $staff->nama = $request->nama;
        $staff->nis = $request->nis;
        $staff->jenis_kelamin = $request->jenis_kelamin;
        $staff->agama = $request->agama;
        $staff->tgl_lahir = $request->tgl_lahir;
        $staff->alamat = $request->alamat;
        $staff->save();
        return redirect()->route('staff.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $staff = Staff::findOrFail($id);
        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //// Validasi
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->nama = $request->nama;
        $staff->nis = $request->nis;
        $staff->jenis_kelamin = $request->jenis_kelamin;
        $staff->agama = $request->agama;
        $staff->tgl_lahir = $request->tgl_lahir;
        $staff->alamat = $request->alamat;
        $staff->save();
        return redirect()->route('staff.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('staff.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
