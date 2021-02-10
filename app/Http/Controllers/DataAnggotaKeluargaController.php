<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataAnggotaKeluarga;

class DataAnggotaKeluargaController extends Controller
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
            'id_pekerja'        => 'required|numeric',
            'alamat'            => 'required',
            'nama'              => 'required',
            'hubungan_keluarga' => 'required',
            'tanggal_lahir'     => 'required|date',
            'ditanggung'        => 'required|boolean',
            'status_nikah'      => 'required|boolean'
        ]);

        $dataAnggotaKeluarga = DataAnggotaKeluarga::create([
            'id_pekerja'        => $request->id_pekerja,
            'alamat'            => $request->alamat,
            'nama'              => $request->nama,
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'ditanggung'        => $request->ditanggung,
            'status_nikah'      => $request->status_nikah
        ]);

        return response()->json(['result' => 'success'],200);
    }
}
