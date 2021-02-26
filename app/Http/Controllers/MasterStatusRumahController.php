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

    public function create(Request $request)
    {
        $this->validate($request,[
            'status' => 'required'
        ]);

        $statusRumah = MasterstatusRumah::create([
            'status' => $request->status
        ]);

        return response()->json(['status_rumah' => $statusRumah],200);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'status' => 'required',
            'id' => 'required|numeric'
        ]);

        $statusRumah = MasterstatusRumah::find($request->id);
        $statusRumah->status = $request->status;
        $statusRumah->save();

        return response()->json(['status_rumah' => $statusRumah],200);
    }

    public function delete($id)
    {
        $statusRumah = MasterstatusRumah::find($id);
        $statusRumah->delete();
        
        return response()->json(['status_rumah' => $statusRumah],200);
    }
}
