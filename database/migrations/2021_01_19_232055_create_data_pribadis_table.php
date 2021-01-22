<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPribadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pribadi', function (Blueprint $table) {

            $table->increments('id_pribadi');
            $table->string('nik',50)->nullable();
            $table->string('no_kk',50)->nullable();
            $table->string('no_npwp',50)->nullable();
            $table->string('nama',300)->nullable();
            $table->char('jenis_kelamin',1)->nullable();
            $table->string('agama',20)->nullable();
            $table->string('kewarganegaraan',10)->nullable();
            $table->string('tempat _lahir',100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('gol_darah',10)->nullable();
            $table->integer('no_handphone')->unsigned()->nullable();
            $table->integer('no_telephone')->unsigned()->nullable();
            $table->string('email',100)->nullable();
            $table->tinyInteger('status_nikah')->unsigned()->nullable();
            $table->date('tanggal_nikah')->nullable();
            $table->integer('jumlah_anak')->unsigned()->nullable();
            $table->string('created_by',20)->nullable();
            $table->string('created_ip_addr',50)->nullable();
            $table->timestamp('created_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pribadi');
    }
}
