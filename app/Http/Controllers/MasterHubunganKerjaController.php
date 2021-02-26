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

    public function create(Request $request){
        $this->validate($request, [
            'hubungan' => 'required'
        ]);

        $hubunganKerja = MasterHubunganKerja::create([
            'hubungan' => $request->hubungan
        ]);

        return response()->json(['hubungan_kerja' => $hubunganKerja], 200);
    }

    public function update(Request $request){
        $this->validate($request,[
            'hubungan' => 'required',
            'id' => 'required|numeric'
        ]);

        $hubunganKerja = MasterHubunganKerja::find($request->id);
        $hubunganKerja->hubungan = $request->hubungan;
        $hubunganKerja->save();

        return response()->json(['hubungan_kerja' => $hubunganKerja],200);
    }

    public function delete($id){
        $hubunganKerja = MasterHubunganKerja::find($id);
        $hubunganKerja->delete();
        
        return response()->json(['hubungan_kerja' => $hubunganKerja],200);
    }
}
