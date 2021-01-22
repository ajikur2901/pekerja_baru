<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('kabupaten_id')->unsigned();
            $table->string('nama_kecamatan');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreign('kabupaten_id')->references('id')->on('kabupaten');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
