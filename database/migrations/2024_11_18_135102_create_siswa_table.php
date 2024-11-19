<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            // $table->id();
            $table->timestamps(); // berisi 2 kolom yaitu update dan add
            $table->string('nama');
            $table->integer('no_induk')->unique();
            $table->text('alamat');
            // $table->unique(array('nomor_induk'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
