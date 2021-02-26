<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataBpjs;

class DataBpjsController extends Controller
{
    /**
     * menyimpan data pribadi
     * 
     * @param Request $request 
     * @return \Illuminate\Http\JsonResponse
     */
    public function simpan(Request $request)
    {
        $this->validate($request,[
            'id_pekerja'            => 'required|numeric',
            'nama_instansi'         => 'required',
            'sebelumnya_peserta'    => 'required',
            'no_peserta'            => 'nullable|numeric',
            'hubungan_kerja'        => 'required',
            'fasilitas_kesehatan_1' => 'required'
        ]);

        $dataBpjs = DataBpjs::create([
            'id_pekerja'            => $request->id_pekerja,
            'nama_instansi'         => $request->nama_instansi,
            'sebelumnya_peserta'    => $request->sebelumnya_peserta,
            'no_peserta'            => $request->no_peserta,
            'hubungan_kerja'        => $request->hubungan_kerja,
            'fasilitas_kesehatan_1' => $request->fasilitas_kesehatan_1
        ]);

        return response()->json(['result' => 'success'],200);
    }
}
