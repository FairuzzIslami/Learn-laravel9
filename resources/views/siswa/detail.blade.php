@extends('layout.layout')

@section('konten')
    <a href="/siswa" class="btn btn-secondary">Kembali</a>

    <ul>
        <li>{{$data->nama}}</li>
        <li>{{$data->no_induk}}</li>
        <li>{{$data->alamat}}</li>
    </ul>
@endsection