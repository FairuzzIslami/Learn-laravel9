@extends('layout.layout')

@section('konten')
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
                    <td><a href="{{url('/siswa/'.$item->no_induk)}}" class="btn btn-primary">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- code bagian paginate yg ada di contoller --}}
    {{$data->links()}}
    {{-- supaya tampilan bagus edit bagian app/providers/appservice --}}
@endsection