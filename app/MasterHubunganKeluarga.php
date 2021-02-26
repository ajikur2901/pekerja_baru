<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterHubunganKeluarga extends Model
{
    use SoftDeletes;
    
    /**
     * nama tabel di database
     * 
     * @var string
     */
    protected $table = 'master_hubungan_keluarga';

    /**
     * primary key
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hubungan'
    ];

    /**
     * The attributes that should be mutated to dates.
     * 
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];
}
