<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAnggotaKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggota_keluarga', function (Blueprint $table) {

            $table->increments('id_keluarga');
            $table->integer('id_pekerja')->unsigned();
            $table->string('nama',300)->nullable();
            $table->string('alamat',300)->nullable();
            $table->string('hubungan_keluarga',100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->tinyInteger('ditanggung')->nullable()->unsigned();
            $table->tinyInteger('status_nikah')->nullable()->unsigned();
            $table->foreign('id_pekerja')->references('id_pribadi')->on('data_pribadi');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_anggota_keluarga');
    }
}
