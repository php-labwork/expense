<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDataCatatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_catatan', function (Blueprint $table) {
            $table->bigIncrements('id_catatan');
            $table->bigInteger('id_user')->unsigned();
            $table->smallInteger('id_jenis_transaksi')->unsigned();
            $table->integer('id_laporan_pembukuan')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->bigInteger('nominal')->unsigned();
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_jenis_transaksi')->references('id_jenis_transaksi')->on('m_jenis_transaksi');
            $table->foreign('id_laporan_pembukuan')->references('id_laporan_pembukuan')->on('m_laporan_pembukuan');
            $table->foreign('id_kategori')->references('id_kategori')->on('m_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_catatan');
    }
}
