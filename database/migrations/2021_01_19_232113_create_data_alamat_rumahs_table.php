<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAlamatRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alamat_rumah', function (Blueprint $table) {

            $table->increments('id_alamat');
            $table->integer('id_pekerja')->unsigned();
            $table->string('alamat',300)->nullable();
            $table->string('provinsi',100)->nullable();
            $table->string('kabupaten',100)->nullable();
            $table->string('kecamatan',100)->nullable();
            $table->string('desa',100)->nullable();
            $table->string('kode_pos',100)->nullable();
            $table->string('status_rumah',100)->nullable();
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
        Schema::dropIfExists('data_alamat_rumah');
    }
}
