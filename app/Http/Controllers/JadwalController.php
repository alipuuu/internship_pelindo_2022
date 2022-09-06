<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalModel;
use Illuminate\Support\Facades\Session;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->JadwalModel = new JadwalModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $jadwal = JadwalModel::all();
    	return view('inside.v_jadwal_kehadiran', compact('jadwal'));
    }

    public function jadwal_detail($id)
    {
        $jadwal = JadwalModel::find($id);
        return view('inside.v_jadwal_kehadiran', compact('jadwal'));
    }

    public function add_jadwal()
    {
        $jadwal = JadwalModel::all();
        return view('inside.v_jadwal_kehadiran', compact('jadwal'));
    }

    public function edit_jadwal($id)
    {
        $jadwal = JadwalModel::find($id);
        return view('inside.v_jadwal_kehadiran', compact('jadwal'));
    }

    public function insert_jadwal(Request $request)
    {
        $jadwal = JadwalModel::find($request->id);
        Request()->validate([
            'jadwal_kehadiran' => 'required',
            'ket' => 'required',
        ],[
            'jadwal_kehadiran.required'=>' jadwal wajib diisi !!',
            'ket.required'=>' ket wajib diisi !!',
        ]);
        $jadwal = [
            'jadwal_kehadiran' => Request()->jadwal_kehadiran,
            'ket' => Request()->ket,
        ];
        if($jadwal){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->JadwalModel->addData($jadwal);
        // dd($pendaftaran);
        return redirect()->route('jadwal_kehadiran',compact('jadwal'));
    }

    public function update_jadwal(Request $request, $id)
    {
        $jadwal = JadwalModel::find($id);
        $jadwal->jadwal_kehadiran = $request->jadwal_kehadiran;
        $jadwal->ket = $request->ket;
        $jadwal->save();
        return redirect()->route('jadwal_kehadiran')->with('pesan','data berhasil di update!!!');
    }

    public function delete_jadwal($id)
    {
        $jadwal = JadwalModel::find($id);
        $jadwal->delete();
        return redirect()->route('jadwal_kehadiran');
    }
}
