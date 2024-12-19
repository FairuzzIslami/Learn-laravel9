<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaContoller;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Halaman.index');
});

Route::get('/tentang', function () {
    return view('Halaman.tentang');
});
Route::get('/kontak',[HalamanController::class,'kontak']);


// resource,memudahkan controller untuk langsung membentuk semua function 
// dari index,edit,update. jadi gak perlu nambahin route untuk 1 function
Route::resource('siswa',SiswaContoller::class);




// Route::get('/siswa',[SiswaController::class,'index']);
// Route::get('/siswa/create',[SiswaController::class,'create']);
// // ada /{id} karena, terdapat parameter di function detail
// Route::get('/siswa/{id}',[SiswaController::class,'detail']);

