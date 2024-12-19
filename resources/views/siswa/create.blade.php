@extends('layout.layout')

@section('konten')

    <h3 class="fw-bold py-3">Tambahkan data siswa</h3>

    {{-- btn itu gak ada hrefnya karena action adalah urlnya --}}
    {{-- action itu adalah href yg ada di btn --}}

    {{-- lalu action akan mengarahkan ke store --}}
    <form style="margin-top: 30px" method="POST" action="/siswa">

        {{-- METHOD --}}
        {{-- jika methodnya GET url akan ke INDEX --> untuk menampilkan data (Read)--}} 
        {{-- jika methodnya POST akan ke Store --> untuk menyimpan data dari (Create) --}}



        {{-- csrf melindungi sistem keamanan aplikasi --}}
        {{-- jika tidak form di beri csrf maka, page selanjutnya --}}
        {{-- akan menjadi "Expired page " --}}
        
        @csrf
        <div class="mb-5">
            <label for="no_induk" class="form-label">No induk</label>
            <input type="email" class="form-control" id="no_induk">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="email" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="" id="alamat" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection