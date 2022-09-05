<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\InstansiModel;
use Illuminate\Support\Facades\Session;

class InstansiController extends Controller
{
    public function __construct()
    {
        $this->InstansiModel = new InstansiModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $instansi = InstansiModel::all();
    	return view('inside.v_instansi',compact('instansi'));
    }

    public function add_instansi()
    {
        $instansi = InstansiModel::all();
        return view('inside.v_instansi', compact('instansi'));
    }

    public function insert_instansi(Request $request)
    {
        $instansi = InstansiModel::find($request->id);
        Request()->validate([
            'instansi' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ],[
            'instansi.required'=>' instansi wajib diisi !!',
            'alamat.required'=>' alamat wajib diisi !!',
            'no_telp.required'=>' nomor telepon wajib diisi !!',
            'email.required' => 'email wajib diisi !!',
        ]);
        $instansi = [
            'instansi' => Request()->instansi,
            'alamat' => Request()->alamat,
            'no_telp' => Request()->no_telp,
            'email' => Request()->email,
        ];

        if($instansi){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->InstansiModel->addData($instansi);
        return redirect()->route('instansi',compact('instansi'));
    }

    public function update_instansi(Request $request, $id)
    {
        $instansi = InstansiModel::find($id);
        $instansi->instansi = $request->instansi;
        $instansi->alamat = $request->alamat;
        $instansi->no_telp = $request->no_telp;
        $instansi->email = $request->email;
        $instansi->save();
        return redirect()->route('instansi')->with('pesan','data berhasil di update!!!');
    }

    public function delete_instansi($id)
    {
        $instansi = InstansiModel::find($id);
        $instansi->delete();
        return redirect()->route('instansi');
    }

}
