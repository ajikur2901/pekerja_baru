<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    public function scopeFilter($query, $params)
    {
        if(isset($params['nama_provinsi']) && trim($params['nama_provinsi']) != ""){
            $query->whereRaw('upper(nama_provinsi) LIKE ?','%'.strtoupper(trim($params['nama_provinsi'])).'%');
        }

        return $query;
    }
}
