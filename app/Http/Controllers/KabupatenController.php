<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;

class KabupatenController extends Controller
{
    

    public function show(Request $request)
    {
        $params = $request->all();
        $kabupaten = Kabupaten::filter($params)->get();
        return $kabupaten;
    }
}
