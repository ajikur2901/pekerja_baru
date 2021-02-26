<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterAgama extends Model
{
    use SoftDeletes;
    
    /**
     * nama tabel di database
     * 
     * @var string
     */
    protected $table = 'master_agama';

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
        'agama'
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
