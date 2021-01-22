<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelurahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('kecamatan_id')->unsigned();
            $table->string('nama_kelurahan');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
