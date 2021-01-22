<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    public function scopeFilter($query, $params)
    {
        if(isset($params['nama_kabupaten']) && trim($params['nama_kabupaten']) != "")
        {
            $query->whereRaw('upper(nama_kabupaten) LIKE ?','%'.strtoupper(trim($params['nama_kabupaten'])).'%');
        }

        if(isset($params['provinsi_id']) && trim($params['provinsi_id']) != "")
        {
            $query->where('provinsi_id',$params['provinsi_id']);
        }

        return $query;
    }
}
