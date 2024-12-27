@extends('layout.layout')

@section('konten')

    <h3 class="fw-bold py-3">Tambahkan data siswa</h3>
    <h4><a href="/siswa" class="btn btn-secondary ">Kembali</a></h4>

    <form style="margin-top: 30px" method="POST" action="{{'/siswa/'.$data->no_induk}}">
        @csrf
        {{-- Kalo mau Ke controlller update --}}
        {{-- Methodnya PUT --}}
        @method('PUT')
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="mb-3">
            <h3>No induk : {{$data->no_induk}}</h3>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" 
            id="nama" name="nama" value="{{$data->nama}}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{$data->alamat}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection