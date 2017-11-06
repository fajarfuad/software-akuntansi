<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->string('nama');
            $table->integer('harga_beli');
            $table->integer('hpp');
            $table->integer('harga_jual');
            $table->integer('stok_min');
            $table->integer('stok_max');
            $table->string('satuan');
            $table->string('deskripsi');
            $table->integer('id_kontak');
            $table->integer('id_pajak');
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
        Schema::dropIfExists('item');
    }
}
