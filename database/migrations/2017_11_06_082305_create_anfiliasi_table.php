<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnfiliasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anfiliasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->string('nama');
            $table->string('no_tlp');
            $table->string('alamat');
            $table->string('email');
            $table->string('bank');
            $table->string('no_rek');
            $table->string('npwp');
            $table->integer('id_kontak');
            $table->integer('is_supplier')->nullable();
            $table->integer('is_costumer')->nullable();
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
        Schema::dropIfExists('anfiliasi');
    }
}
