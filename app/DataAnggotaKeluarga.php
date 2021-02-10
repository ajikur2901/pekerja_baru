<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAnggotaKeluarga extends Model
{
    /**
     * nama tabel di database
     * 
     * @var string
     */
    protected $table = 'data_anggota_keluarga';

    /**
     * primary key
     * 
     * @var string
     */
    protected $primaryKey = 'id_keluarga';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pekerja',
        'nama',
        'alamat',
        'hubungan_keluarga',
        'tanggal_lahir',
        'ditanggung',
        'status_nikah'
    ];
}
