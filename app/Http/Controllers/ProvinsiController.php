<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;

class ProvinsiController extends Controller
{
    public function index()
    {
        return Provinsi::all();
    }

    public function show(Request $request)
    {
        $params = $request->all();
        $provinsi = Provinsi::filter($params)->get();
        return $provinsi;
    }
}
