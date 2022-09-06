<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KehadiranModel;
use Illuminate\Support\Facades\Session;

class KehadiranController extends Controller
{
    public function __construct()
    {
        $this->KehadiranModel = new KehadiranModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $kehadiran = KehadiranModel::all();
    	return view('inside.v_jenis_kehadiran', compact('kehadiran'));
    }

    public function kehadiran_detail($id)
    {
        $kehadiran = KehadiranModel::find($id);
        return view('inside.v_jenis_kehadiran', compact('kehadiran'));
    }

    public function add_kehadiran()
    {
        $kehadiran = KehadiranModel::all();
        return view('inside.v_jenis_kehadiran', compact('kehadiran'));
    }

    public function edit_kehadiran($id)
    {
        $kehadiran = KehadiranModel::find($id);
        return view('inside.v_jenis_kehadiran', compact('kehadiran'));
    }

    public function insert_kehadiran(Request $request)
    {
        $kehadiran = KehadiranModel::find($request->id);
        Request()->validate([
            'jenis_kehadiran' => 'required',
            'ket' => 'required',
        ],[
            'jenis_kehadiran.required'=>' kehadiran wajib diisi !!',
            'ket.required'=>' ket wajib diisi !!',
        ]);
        $kehadiran = [
            'jenis_kehadiran' => Request()->jenis_kehadiran,
            'ket' => Request()->ket,
        ];
        if($kehadiran){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->KehadiranModel->addData($kehadiran);
        // dd($pendaftaran);
        return redirect()->route('jenis_kehadiran',compact('kehadiran'));
    }

    public function update_kehadiran(Request $request, $id)
    {
        $kehadiran = KehadiranModel::find($id);
        $kehadiran->jenis_kehadiran = $request->jenis_kehadiran;
        $kehadiran->ket = $request->ket;
        $kehadiran->save();
        return redirect()->route('jenis_kehadiran')->with('pesan','data berhasil di update!!!');
    }

    public function delete_kehadiran($id)
    {
        $kehadiran = KehadiranModel::find($id);
        $kehadiran->delete();
        return redirect()->route('jenis_kehadiran');
    }
}
