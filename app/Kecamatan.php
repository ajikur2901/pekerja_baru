<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    public function scopeFilter($query, $params)
    {
        if(isset($params['nama_kecamatan']) && trim($params['nama_kecamatan']) != "")
        {
            $query->whereRaw('upper(nama_kecamatan) LIKE ?','%'.strtoupper(trim($params['nama_kecamatan'])).'%');
        }

        if(isset($params['kabupaten_id']) && trim($params['kabupaten_id']) != "")
        {
            $query->where('kabupaten_id',$params['kabupaten_id']);
        }

        return $query;
    }
}
