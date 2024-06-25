@extends('layout')

@section('konten')

<h4>Tambah Mahasiswa</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>NIM</label>
    <input type="number" name="nim" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>Email</label>
    <input type="text" name="email" class="form-control mb-2">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir" class="form-control mb-2">
    <label>Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir" class="form-control mb-2">
    <label>Agama</label>
    <input type="text" name="agama" class="form-control mb-2">
    <label>Status</label>
    <input type="text" name="status" class="form-control mb-2">
    <label>Foto</label>
    <input type="text" name="foto" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection
