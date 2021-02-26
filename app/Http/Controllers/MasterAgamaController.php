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

    public function create(Request $request){
        $this->validate($request,[
            'agama' => 'required'
        ]);

        $agama = MasterAgama::create([
            'agama' => $request->agama
        ]);

        return response()->json(['agama' => $agama],200);
    }

    public function update(Request $request){
        $this->validate($request,[
            'agama' => 'required',
            'id' => 'required|numeric'
        ]);

        $agama = MasterAgama::find($request->id);
        $agama->agama = $request->agama;
        $agama->save();

        return response()->json(['agama' => $agama],200);
    }

    public function delete($id){

        $agama = MasterAgama::find($id);
        $agama->delete();

        return response()->json(['agama' => $agama],200);
    }
}
