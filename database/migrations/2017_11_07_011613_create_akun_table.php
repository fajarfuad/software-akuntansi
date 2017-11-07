<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_rek');
            $table->string('nama');
            $table->integer('tipe');
            $table->integer('level');
            $table->integer('normal');
            $table->integer('posisi');
            $table->string('keterangan');
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
        Schema::dropIfExists('akun');
    }
}
