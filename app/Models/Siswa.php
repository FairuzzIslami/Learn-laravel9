<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // awal nama modelnya siswa's lalu di ubah sesuai table migration dan seeder
    protected $table = "siswa";
}
