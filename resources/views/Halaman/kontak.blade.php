@extends('layout.layout')

@section('konten')
    <h1>{{$judul}}</h1>
    <p>{{$desc}}</p>
    <h3>Follow akun sosial kami</h3>
    <ul>
        <li>{{$sosial['youtube']}}</li>
        <li>{{$sosial['instagram']}}</li>
        <li>{{$sosial['email']}}</li>
    </ul>
@endsection