<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;

class KecamatanController extends Controller
{
    public function show(Request $request)
    {
        $params = $request->all();
        $kecamatan = Kecamatan::filter($params)->get();
        return $kecamatan;
    }
}
