<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterHubunganKeluarga;

class MasterHubunganKeluargaController extends Controller
{
    public function index()
    {
        return MasterHubunganKeluarga::all();
    }
}
