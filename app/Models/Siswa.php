<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // model berguna untuk mengola data dan berinteraksi dgn database 
    // awal nama modelnya siswa's lalu di ubah sesuai table migration dan seeder
    // model siswa sudah tehubung dgn table migration siswa
    protected $table = "siswa";
}
