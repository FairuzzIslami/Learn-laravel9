<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        // dari model siswa
        // ini akan di tampilkan data sesuai dgn user pertama yg isi
        // $data = Siswa::all();

        // menggunakan orderBy akan mengurutkan sesuai kolom yg di inginkan 
        // parameter(no_induk,asc)->kolom induk
        // desc = urutan dari bawah/turun
        // asc = urutan dari atas/naik

        // ->get() = buat mengambil semua data yg telah di urutkan
        // ->paginate(1) = membagi data ke halaman kecil, memudahkan tampilan data yang banyak. 
        $data = Siswa::orderBy('Nama','desc')->paginate(1);
        return view('siswa.siswa')->with('data',$data);
    }

    function detail($id){
        // return "Saya adalah siswa dgn $id ";
        $data = Siswa::where('no_induk',$id)->first();
        return view('siswa.detail')->with('data',$data);
    }
}
