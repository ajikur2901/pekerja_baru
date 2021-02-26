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

    public function create(Request $request){
        $this->validate($request, [
            'hubungan' => 'required'
        ]);

        $hubunganKeluarga = MasterHubunganKeluarga::create([
            'hubungan' => $request->hubungan
        ]);

        return response()->json(['hubungan_keluarga' => $hubunganKeluarga], 200);
    }

    public function update(Request $request){
        $this->validate($request,[
            'hubungan'  => 'required',
            'id'        => 'required|numeric'
        ]);

        $hubunganKeluarga = MasterHubunganKeluarga::find($request->id);
        $hubunganKeluarga->hubungan = $request->hubungan;
        $hubunganKeluarga->save();

        return response()->json(['hubungan_keluarga' => $hubunganKeluarga], 200);
    }

    public function delete($id){

        $hubunganKeluarga = MasterHubunganKeluarga::find($id);
        $hubunganKeluarga->delete();

        return response()->json(['hubungan_keluarga' => $hubunganKeluarga], 200);
    }
}
