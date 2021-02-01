<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterStatusRumah;

class MasterStatusRumahController extends Controller
{
    public function index()
    {
        return masterStatusRumah::all();
    }
}
