<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->integer('jml_kamar');
            $table->string('email');
            $table->string('no_telp');
            $table->string('nama_tamu');
            $table->enum('tipe_kamar', ['deluxe', 'superior']);
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
        //
    }
}
