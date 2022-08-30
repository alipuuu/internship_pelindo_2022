<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PenempatanModel;
use Illuminate\Support\Facades\Session;

class PenempatanController extends Controller
{
    public function __construct()
    {
        $this->PenempatanModel = new PenempatanModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $penempatan = PenempatanModel::all();
    	return view('inside.v_penempatan', compact('penempatan'));
    }

    public function penempatan_detail($id)
    {
        $penempatan = PenempatanModel::find($id);
        return view('inside.v_penempatan', compact('penempatan'));
    }

    public function add_penempatan()
    {
        $penempatan = PenempatanModel::all();
        return view('inside.v_penempatan', compact('penempatan'));
    }

    public function edit_penempatan($id)
    {
        $penempatan = PenempatanModel::find($id);
        return view('inside.v_penempatan', compact('penempatan'));
    }

    public function insert_penempatan(Request $request)
    {
        $penempatan = PenempatanModel::find($request->id);
        Request()->validate([
            'lokasi' => 'required',
            'alamat' => 'required',
        ],[
            'lokasi.required'=>' lokasi wajib diisi !!',
            'alamat.required'=>' alamat wajib diisi !!',
        ]);
        $penempatan = [
            'lokasi' => Request()->lokasi,
            'alamat' => Request()->alamat,
        ];
        if($penempatan){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->PenempatanModel->addData($penempatan);
        // dd($pendaftaran);
        return redirect()->route('penempatan',compact('penempatan'));
    }

    public function update_penempatan(Request $request, $id)
    {
        $penempatan = PenempatanModel::find($id);
        $penempatan->lokasi = $request->lokasi;
        $penempatan->alamat = $request->alamat;
        $penempatan->save();
        return redirect()->route('penempatan')->with('pesan','data berhasil di update!!!');
    }

    public function delete_penempatan($id)
    {
        $penempatan = PenempatanModel::find($id);
        $penempatan->delete();
        return redirect()->route('penempatan');
    }
}
