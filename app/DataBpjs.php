<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBpjs extends Model
{
    /**
     * nama tabel di database
     * 
     * @var string
     */
    protected $table = 'data_bpjs';

    /**
     * primary key
     * 
     * @var string
     */
    protected $primaryKey = 'id_bpjs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pekerja',
        'nama_instansi',
        'sebelumnya_peserta',
        'no_peserta',
        'hubungan_kerja',
        'fasilitas_kesehatan_1'
    ];
}
