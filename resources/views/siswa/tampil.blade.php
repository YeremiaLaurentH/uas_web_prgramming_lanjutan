@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Mahasiswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah Mahasiswa</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>id</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Status</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach ( $siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nim }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->tempat_lahir }}</td>
        <td>{{ $data->tanggal_lahir }}</td>
        <td>{{ $data->agama }}</td>
        <td>{{ $data->status }}</td>
        <td>{{ $data->foto }}</td>
        <td>
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection