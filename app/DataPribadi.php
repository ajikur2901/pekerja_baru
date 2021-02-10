<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    /**
     * nama tabel di database
     * 
     * @var string
     */
    protected $table = 'data_pribadi';

    /**
     * primary key
     * 
     * @var string
     */
    protected $primaryKey = 'id_pribadi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 
        'no_kk', 
        'no_npwp',
        'nama',
        'jenis_kelamin',
        'agama',
        'kewarganegaraan',
        'tempat_lahir',
        'tanggal_lahir',
        'gol_darah',
        'no_handphone',
        'no_telephone',
        'email',
        'status_nikah',
        'tanggal_nikah',
        'jumlah_anak',
        'created_by',
        'created_ip_addr'
    ];
}
