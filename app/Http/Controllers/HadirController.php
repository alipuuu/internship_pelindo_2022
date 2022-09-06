<?php

namespace App\Http\Controllers;

use App\Models\HadirModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HadirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $hadir = HadirModel::all();
        // $hadir = HadirModel::where('id_hadir', Auth::hadir()->id_hadir)->with(['hadir'])->first();
    	return view('inside.v_hadir', compact('hadir'));
    }

    public function update_hadir(Request $request, $id)
    {
        $hadir = HadirModel::find($id);
        $hadir->update($request->all());
        $request->validate([
            'name' => 'required',
            'jenis_kehadiran' => 'required',
            'jenis_absensi' => 'required',
            'bukti' => "required",
            'konsinyering' => 'required',
        ],[
            'name.required'=>' Nama Lengkap wajib diisi !!',
            'jenis_kehadiran.required'=>' Jenis Kehadiran wajib diisi !!',
            'jenis_absensi.required' => 'Jenis Absensi wajib diisi !!',
            'bukti.required' => 'Bukti Foto wajib diisi !!',
        ]);
        return redirect()->route('hadir');
    }
}
