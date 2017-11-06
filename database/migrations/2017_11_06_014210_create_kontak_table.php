<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kontak', function (Blueprint $table) {
        $table->increments('id');
        $table->string('kode')->unique();
        $table->string('nama');
        $table->string('no_tlp');
        $table->string('alamat');
        $table->string('email');
        $table->string('bank');
        $table->string('no_rek');
        $table->string('npwp');
        $table->integer('is_supplier');
        $table->integer('is_customer');
        $table->integer('is_collector');
        $table->integer('is_karyawan');
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
      Schema::drop('kontak');
    }
}
