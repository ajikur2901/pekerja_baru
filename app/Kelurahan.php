<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';

    public function scopeFilter($query, $params)
    {
        if(isset($params['nama_kelurahan']) && trim($params['nama_kelurahan']) != "")
        {
            $query->whereRaw('upper(nama_kelurahan) LIKE ?','%'.strtoupper(trim($params['nama_kelurahan'])).'%');
        }

        if(isset($params['kecamatan_id']) && trim($params['kecamatan_id']) != "")
        {
            $query->where('kecamatan_id',$params['kecamatan_id']);
        }

        return $query;
    }
}
