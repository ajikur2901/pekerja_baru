<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPribadi;

class DataPribadiController extends Controller
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
            'nik'               => 'required|numeric',
            'no_kk'             => 'required|numeric',
            'no_npwp'           => 'numeric',
            'nama'              => 'required',
            'jenis_kelamin'     => 'required',
            'agama'             => 'required',
            'kewarganegaraan'   => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
            'gol_darah'         => 'required',
            'no_handphone'      => 'required|numeric',
            'no_telephone'      => 'numeric',
            'email'             => 'email',
            'status_nikah'      => 'required|boolean',
            'tanggal_nikah'     => 'required_if:status_nikah,==,true|date',
            'jumlah_anak'       => 'required_if:status_nikah,==,true|numeric',
            'created_by'        => 'required'
        ]);

        $dataPribadi = DataPribadi::create([
            'nik'               => $request->nik,
            'no_kk'             => $request->no_kk,
            'no_npwp'           => $request->no_npwp,
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'agama'             => $request->agama,
            'kewarganegaraan'   => $request->kewarganegaraan,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'gol_darah'         => $request->gol_darah,
            'no_handphone'      => $request->no_handphone,
            'no_telephone'      => $request->no_telephone ? $request->no_telephone : null,
            'email'             => $request->email ? $request->email : null,
            'status_nikah'      => $request->status_nikah,
            'tanggal_nikah'     => $request->tanggal_nikah ? $request->tanggal_nikah : null,
            'jumlah_anak'       => $request->jumlah_anak ? $request->jumlah_anak : null,
            'jumlah_anak'       => $request->jumlah_anak ? $request->jumlah_anak : null,
            'created_by'        => $_SERVER['HTTP_USER_AGENT'],
            'created_ip_addr'   => $_SERVER['REMOTE_ADDR']
        ]);

        $id = $dataPribadi->id_pribadi;

        return response()->json([
            'id' => $id,
            'result' => 'success'
        ],200);
    }
}
