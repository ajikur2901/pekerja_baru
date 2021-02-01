<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterHubunganKerja;

class MasterHubunganKerjaController extends Controller
{
    public function index()
    {
        return MasterHubunganKerja::all();
    }
}
