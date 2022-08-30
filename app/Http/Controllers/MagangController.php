<?php

namespace App\Http\Controllers;

use App\Models\MagangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MagangController extends Controller
{
    public function __construct()
    {
        $this->MagangModel = new MagangModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $magang = MagangModel::all();
    	return view('inside.v_magang', compact('magang'));
    }

    public function magang_detail($id)
    {
        $magang = MagangModel::find($id);
        return view('inside.v_magang', compact('magang'));
    }

    public function add_magang()
    {
        $magang = MagangModel::all();
        return view('inside.v_magang', compact('magang'));
    }

    public function edit_magang($id)
    {
        $magang = MagangModel::find($id);
        return view('inside.v_magang', compact('magang'));
    }

    public function insert_magang(Request $request)
    {
        $magang = MagangModel::find($request->id);
        Request()->validate([
            'jenis_magang' => 'required',
            'ket' => 'required',
        ],[
            'jenis_magang.required'=>' jenis magang wajib diisi !!',
            'ket.required'=>' Keterangan wajib diisi !!',
        ]);
        $magang = [
            'jenis_magang' => Request()->jenis_magang,
            'ket' => Request()->ket,
        ];
        if($magang){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->MagangModel->addData($magang);
        // dd($pendaftaran);
        return redirect()->route('magang',compact('magang'));
    }

    public function update_magang(Request $request, $id)
    {
        $magang = MagangModel::find($id);
        $magang->jenis_magang = $request->jenis_magang;
        $magang->ket = $request->ket;
        $magang->save();
        return redirect()->route('magang')->with('pesan','data berhasil di update!!!');
    }

    public function delete_magang($id)
    {
        $magang = MagangModel::find($id);
        $magang->delete();
        return redirect()->route('magang');
    }
}
