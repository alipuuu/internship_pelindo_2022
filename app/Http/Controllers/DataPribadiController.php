<?php

namespace App\Http\Controllers;

use App\Models\DivisiModel;
use App\Models\MagangModel;
use App\Models\PenempatanModel;
use App\Models\UserrModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataPribadiController extends Controller
{
     public function __construct()
    {
        $this->UserrModel = new UserrModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->UserrModel->semua();
        $pendaftaran = UserrModel::with(['penempatan','user','magang'])->get();
        $tempat = PenempatanModel::all();
        $depart = DivisiModel::all();
        $magang = MagangModel::all();
        $user = UserrModel::where('id_users', Auth::user()->id_users)->with(['magang','divisi','penempatan'])->first();
        return view('inside.v_datapribadi', compact('users','pendaftaran','tempat','depart','magang','user'));
    }

    public function detail_datapribadi($id)
    {
        $datapribadi = UserrModel::find($id);
        return view('inside.v_datapribadi', compact('datapribadi'));
    }

    public function update_datapribadi(Request $request, $id)
    {
        $datapribadi = UserrModel::find($id);
        $datapribadi->update($request->all());
        $request->validate([
            'nik' => 'required',
            'instansi' => 'required',
            'no_telp' => 'min:11|max:12',
            'berkas' => "required|mimes:pdf|max:10000",
            'id_penempatan' => 'required',
            'id_divisi' => 'required',
            'id_magang' => 'required',
        ],[
            'nik.required'=>' NIK wajib diisi !!',
            'instansi.required'=>' Sekolah / Kampus wajib diisi !!',
            'no_telp.required' => 'no_telp wajib diisi !!',
            'berkas.required' => 'berkas wajib diisi !!',
            'id_penempatan.required' => 'penempatan wajib diisi !!',
            'id_divisi.required' => 'divisi wajib diisi !!',
            'id_magang.required' => 'jenis magang wajib diisi !!',
        ]);
        return redirect()->route('datapribadi');
    }
}
