<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DivisiModel;
use Illuminate\Support\Facades\Session;

class DivisiController extends Controller
{
    public function __construct()
    {
        $this->DivisiModel = new DivisiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $divisi = DivisiModel::all();
    	return view('inside.v_divisi', compact('divisi'));
    }

    public function divisi_detail($id)
    {
        $divisi = DivisiModel::find($id);
        return view('inside.v_divisi', compact('divisi'));
    }

    public function add_divisi()
    {
        $divisi = DivisiModel::all();
        return view('inside.v_divisi', compact('divisi'));
    }

    public function edit_divisi($id)
    {
        $divisi = DivisiModel::find($id);
        return view('inside.v_divisi', compact('divisi'));
    }

    public function insert_divisi(Request $request)
    {
        $divisi = DivisiModel::find($request->id);
        Request()->validate([
            'divisi' => 'required',
            'departemen' => 'required',
        ],[
            'divisi.required'=>' divisi wajib diisi !!',
            'departemen.required'=>' departemen wajib diisi !!',
        ]);
        $divisi = [
            'divisi' => Request()->divisi,
            'departemen' => Request()->departemen,
        ];
        if($divisi){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->DivisiModel->addData($divisi);
        // dd($pendaftaran);
        return redirect()->route('divisi',compact('divisi'));
    }

    public function update_divisi(Request $request, $id)
    {
        $divisi = DivisiModel::find($id);
        $divisi->divisi = $request->divisi;
        $divisi->departemen = $request->departemen;
        $divisi->save();
        return redirect()->route('divisi')->with('pesan','data berhasil di update!!!');
    }

    public function delete_divisi($id)
    {
        $divisi = DivisiModel::find($id);
        $divisi->delete();
        return redirect()->route('divisi');
    }
}
