<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view('Halaman.index');
    }

    function tentang(){
        return view('Halaman.tentang');
    }

    function kontak(){
        $judul = "ini adalh halaman kontak"; //variabel blade dulu baru dari variabel controller
        $data = [
            'judul' =>  'ini adalah halaman index',
            'desc'  => 'hubungi kami di no 085799690454 sertakan nama anda!!!',
            'sosial' => [
                    'youtube' => 'fairuz aqila islami',
                    'instagram' => 'frz_007',
                    'email' => 'fairuz@gmail.com'
                ]
        ];
        return view('Halaman.kontak')->with($data);
    }
}
