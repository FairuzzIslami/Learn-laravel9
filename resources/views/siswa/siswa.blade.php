@extends('layout.layout')

@section('konten')

    <a href="/siswa/create" class="btn btn-primary mb-3">+Tambah data siswa</a>

    @if ((Session::get('success')))
            <div class="alert alert-success alert-block">
                {{ Session::get('success') }}
            </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nomer induk</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- dari controller siswa --}}
            @foreach ($data as $item)
                <tr>
                    {{-- dapat dari table migration untuk nama,no_induk,alamat --}}
                    <td>{{$item->nama}}</td>
                    <td>{{$item->no_induk}}</td>
                    <td>{{$item->alamat}}</td>
                    {{-- route siswa dan akan nampilkan url no induknya --}}
                    {{-- no induk karena unique selain itu maka akan eror --}}
                    {{-- ada di controller siswa yg detail --}}
                    <td>
                        {{-- Operator (.) itu bergunan untuk menggabungkan elemen string dan variable --}}
                        {{-- Operator (,) Memisahkan argument kayak params  --}}
                        <a href="{{url('/siswa/'.$item->no_induk)}}" class="btn btn-primary">Detail</a>
                        <a href="{{url('/siswa/'.$item->no_induk.'/edit')}}" class="btn btn-warning">Edit</a>
                        <form class="d-inline" action="{{'/siswa/'.$item->no_induk}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="alert('yakin hapus data anda?')">Delete</button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- code bagian paginate yg ada di contoller --}}
    {{$data->links()}}
    {{-- supaya tampilan bagus edit bagian app/providers/appservice --}}
@endsection