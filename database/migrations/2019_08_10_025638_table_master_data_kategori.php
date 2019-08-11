<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMasterDataKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kategori', function (Blueprint $table) {
            $table->increments('id_kategori');
            $table->smallInteger('id_jenis_transaksi')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->string('nama_kategori', 255);
            $table->timestamps();
            $table->foreign('id_jenis_transaksi')->references('id_jenis_transaksi')->on('m_jenis_transaksi');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kategori');
    }
}
