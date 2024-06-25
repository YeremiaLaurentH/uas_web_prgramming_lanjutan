@extends('layout')

@section('konten')

<h4>Edit Mahasiswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label>NIM</label>
    <input type="number" name="nim" value="{{ $siswa->nim }}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
    <label>Email</label>
    <input type="text" name="email" value="{{ $siswa->email }}" class="form-control mb-2">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control mb-2">
    <label>Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control mb-2">
    <label>Agama</label>
    <input type="text" name="agama" value="{{ $siswa->agama }}" class="form-control mb-2">
    <label>Status</label>
    <input type="text" name="status" value="{{ $siswa->status }}" class="form-control mb-2">
    <label>Foto</label>
    <input type="text" name="foto" value="{{ $siswa->foto }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection
