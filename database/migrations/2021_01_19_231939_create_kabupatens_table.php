<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('provinsi_id')->unsigned();
            $table->string('nama_kabupaten');
            $table->string('latitude');
            $table->string('longitude');
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten');
    }
}
