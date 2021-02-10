<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAlamatDomisilisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alamat_domisili', function (Blueprint $table) {

            $table->increments('id_alamat');
            $table->integer('id_pekerja')->unsigned();
            $table->string('alamat',300)->nullable();
            $table->string('provinsi',100)->nullable();
            $table->string('kabupaten',100)->nullable();
            $table->string('kecamatan',100)->nullable();
            $table->string('desa',100)->nullable();
            $table->string('kode_pos',100)->nullable();
            $table->string('status_rumah',100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('data_alamat_domisili');
    }
}
