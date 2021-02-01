<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kodepos;

class KodeposController extends Controller
{
    public function show(Request $request)
    {
        $params = $request->all();
        $kelurahan = Kodepos::filter($params)->get();
        return $kelurahan;
    }
}
