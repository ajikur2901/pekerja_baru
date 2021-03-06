<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAlamatDomisili extends Model
{
    /**
     * nama tabel di database
     * 
     * @var string
     */
    protected $table = 'data_alamat_domisili';

    /**
     * primary key
     * 
     * @var string
     */
    protected $primaryKey = 'id_alamat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pekerja',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'kode_pos',
        'status_rumah'
    ];

}
