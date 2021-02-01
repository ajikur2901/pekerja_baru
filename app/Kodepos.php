<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
    protected $table = 'kodepos';

    public function scopeFilter($query, $params)
    {

        if(isset($params['kelurahan_id']) && trim($params['kelurahan_id']) != "")
        {
            $query->where('kelurahan_id',$params['kelurahan_id']);
        }

        return $query;
    }
}
