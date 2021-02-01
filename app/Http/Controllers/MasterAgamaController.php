<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterAgama;

class MasterAgamaController extends Controller
{
    public function index()
    {
        return MasterAgama::all();
    }
}
