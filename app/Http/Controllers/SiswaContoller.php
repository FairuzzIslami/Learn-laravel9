<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // untuk menampilkan data
    public function index()
    {
        // elequen
        $data = Siswa::orderBy('Nama','asc')->paginate(5); //->get(); // nampilin semua data
        return view('siswa.siswa')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // untuk menampilkan form jika ingin menambah data
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //untuk menyimpan data yg di massukan
    // dari create
    public function store(Request $request)
    {

        Session::flash('no_induk',$request->no_induk);
        Session::flash('nama',$request->nama);
        Session::flash('alamat',$request->alamat);

        // validasi di laravel berguna untuk,memastikan data yg dari create
        // bisa sesuai dgn aturan validasi yg di ingin kan 
        // contoh: 
        // nama => 'required|string' -> nama itu harus di isi dan wajib tulisan
        // umur => 'required|numeric' -> umur harus di isi dan wajib angka 

        // proses validasi
        $validate = $request->validate([
            'no_induk' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required|string'
        ],

        // menampilkan pesan sesuai yg kita inginkan
        // ada deafulnya tapi kalo di custom ya gak papa

        [
            'no_induk.required' => 'No induk Wajib dalam angka',
            'nama.required' => 'Nama Wajib di isi',
            'alamat.required' => 'Alamat Wajib di isi'
        ]
    );

        // bisa terhubung karena ada value di blade di input yaitu NAME
        // penyimpanan data
        $data = [
            'no_induk' => $request->input('no_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];

        //menyimpan data di table siswa
        // apa saja kolom yg di massukan
        Siswa::create($data);

        // redirec mengarah pada blade siswa 
        // dan ketika mendapatkan data baru maka akan menampilkanm pesan
        return redirect('/siswa')->with('success', 'Pesan berhasil di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // untuk melihat detail/show data
    public function show($id)
    {
        $data = Siswa::where('no_induk',$id)->first();
        return view('siswa.detail')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // untuk melakukan edit data
    public function edit($id)
    {
        // laravel elequen
        // adalah untuk memanipulasi dan mengakses data  yg telah di simpan di database
        // elequen di gunakan di contorller bagian edit
        // mirip dgn query builder tetapi elequen lebih singkat

        //logikanya
        // model siswa akan di filter oleh where dan where akan memilih 
        // kolom yaitu no_induk dari table lalu di ambil satu baris data tsb dari first
        $data = Siswa::where('no_induk',$id)->first();
        return view('siswa.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // untuk meng update data
    public function update(Request $request, $id)
    {
        return 'testing update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // untuk menghapus data
    public function destroy($id)
    {
        //
    }
}
