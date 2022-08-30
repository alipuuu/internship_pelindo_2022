<?php

namespace App\Http\Controllers;

use App\Models\DivisiModel;
use App\Models\MagangModel;
use App\Models\PenempatanModel;
use App\Models\UserrModel;
use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
     public function __construct()
    {
        $this->UserrModel = new UserrModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $magang = MagangModel::all();
        $divisi =DivisiModel::all();
        $penempatan = PenempatanModel::all();
        $datapribadi = auth()->user();
        return view('inside.v_datapribadi', compact('datapribadi','magang','divisi',));
    }

    public function detail_datapribadi($id)
    {
        $datapribadi = UserrModel::find($id);
        return view('inside.v_datapribadi', compact('datapribadi'));
    }

    public function edit_datapribadi($id)
    {
        $datapribadi = UserrModel::find($id);
        dd($datapribadi);
        // return view('inside.v_datapribadi', compact('datapribadi'));
    }

    public function update_datapribadi(Request $request, $id)
    {
        $id = (int) $id;
        // dd(gettype($id));
        $datapribadi = UserrModel::find($id);
        // dd($id);
        $datapribadi->update($request->all());
        $request->validate([
            'nik' => 'required|min:16|unique:users,nik,'.$id,
            'instansi' => 'required',
            'no_telp' => 'min:11|max:12',
            'berkas' => "required|mimes:pdf|max:10000",
            'penempatans' => 'required',
            'divisis' => 'required',
            'jenis_magang' => 'required',
        ],[
            'nik.required'=>' NIK wajib diisi !!',
            'instansi.required'=>' Sekolah / Kampus wajib diisi !!',
            'no_telp.required' => 'no_telp wajib diisi !!',
            'berkas.required' => 'berkas wajib diisi !!',
            'penempatans.required' => 'penempatan wajib diisi !!',
            'divisis.required' => 'divisi wajib diisi !!',
            'jenis_magang.required' => 'jenis magang wajib diisi !!',
        ]);
        // dd($datapribadi);
        // $this->UserrModel->editData($datapribadi);
        return redirect()->route('datapribadi');
    }
}
