<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

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
        $data = Siswa::orderBy('Nama','asc')->paginate(1);
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
        return 'dah ada di store';
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
        return 'edit bozz';
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
        //
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
