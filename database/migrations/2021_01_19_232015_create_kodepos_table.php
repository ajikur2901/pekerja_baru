<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKodeposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodepos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('kelurahan_id')->unsigned();
            $table->string('no_kodepos',15);
            $table->foreign('kelurahan_id')->references('id')->on('kelurahan');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kodepos');
    }
}
