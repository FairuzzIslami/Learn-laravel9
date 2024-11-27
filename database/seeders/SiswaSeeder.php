<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // database yang mana || di isi apa         
        DB::table('siswa')->insert([
            'nama' => 'fairuz aqila',
            'no_induk' => 1192,
            'alamat' => 'Teras,Boyolali',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'salsa bila',
            'no_induk' => 1298,
            'alamat' => 'mojosongo,Boyolali',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Damar artha',
            'no_induk' => 1297,
            'alamat' => 'Cepogo,Boyolali',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Pangat Zya',
            'no_induk' => 1187,
            'alamat' => 'Cepogo,Boyolali',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
