<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAlamatRumah;

class DataAlamatRumahController extends Controller
{
    /**
     * menyimpan data pribadi
     * 
     * @param Request $request 
     * @return \Illuminate\Http\JsonResponse
     */
    public function simpan(Request $request)
    {
        // return response()->json($request,200);
        $this->validate($request,[
            'id_pekerja'   => 'required|numeric',
            'alamat'       => 'required',
            'provinsi'     => 'required',
            'kabupaten'    => 'required',
            'kecamatan'    => 'required',
            'desa'         => 'required',
            'kode_pos'     => 'required|numeric',
            'status_rumah' => 'required'
        ]);

        $dataAlamatRumah = DataAlamatRumah::create([
            'id_pekerja'   => $request->id_pekerja,
            'alamat'       => $request->alamat,
            'provinsi'     => $request->provinsi,
            'kabupaten'    => $request->kabupaten,
            'kecamatan'    => $request->kecamatan,
            'desa'         => $request->desa,
            'kode_pos'     => $request->kode_pos,
            'status_rumah' => $request->status_rumah
        ]);

        return response()->json(['result' => 'success'],200);
    }
}
