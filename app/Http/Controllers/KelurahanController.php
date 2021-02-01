<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahan;

class KelurahanController extends Controller
{
    public function show(Request $request)
    {
        $params = $request->all();
        $kelurahan = Kelurahan::filter($params)->get();
        return $kelurahan;
    }
}
