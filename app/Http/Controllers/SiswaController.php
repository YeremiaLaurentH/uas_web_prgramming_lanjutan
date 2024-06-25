<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil() {
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));
    }

    function tambah() {
        return view('siswa.tambah');
    }

    function submit(Request $request) {
        $siswa = new Siswa();
        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->email = $request->email;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->agama = $request->agama;
        $siswa->status = $request->status;
        $siswa->foto = $request->foto;
        $siswa->save();

        return redirect()->route('siswa.tampil');
    }

    function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nim = $request->nim;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->email = $request->email;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->agama = $request->agama;
        $siswa->status = $request->status;
        $siswa->foto = $request->foto;
        $siswa->update();

        return redirect()->route('siswa.tampil');
    }
    function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.tampil');
    }
}
