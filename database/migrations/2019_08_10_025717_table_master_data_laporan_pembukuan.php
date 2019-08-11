<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMasterDataLaporanPembukuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_laporan_pembukuan', function (Blueprint $table) {
            $table->increments('id_laporan_pembukuan');
            $table->bigInteger('id_user')->unsigned();
            $table->string('nama_laporan_pembukuan', 255);
            $table->timestamps();
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
        Schema::dropIfExists('m_laporan_pembukuan');
    }
}
