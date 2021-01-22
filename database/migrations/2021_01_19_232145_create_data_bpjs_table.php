<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bpjs', function (Blueprint $table) {

            $table->increments('id_bpjs');
            $table->integer('id_pekerja')->unsigned();
            $table->string('nama_instansi',100)->nullable();
            $table->tinyInteger('sebelumnya_peserta')->nullable()->unsigned();
            $table->string('no_peserta',50)->nullable();
            $table->string('hubungan_kerja',100)->nullable();
            $table->string('fasilitas_kesehatan_1',100)->nullable();
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
        Schema::dropIfExists('data_bpjs');
    }
}
