<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipe_kamar_id');
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('no_telp');
            $table->string('nama_tamu');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->integer('jml_kamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamu');
    }
}
