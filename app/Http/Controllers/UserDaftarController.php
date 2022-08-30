<?php

namespace App\Http\Controllers;

use App\Models\DivisiModel;
use App\Models\MagangModel;
use Illuminate\Support\Facades\Auth;
use App\Models\PendaftaranModel;
use App\Models\PenempatanModel;
use App\Models\UserrModel;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class UserDaftarController extends Controller
{
    public function __construct()
    {   $this->UserrModel = new UserrModel();
        $this->middleware('auth');
    }

    public function index()
    {
        // dd('');
        $users = UserrModel::orderBy('id', 'ASC')->get();   //pdhl ws tak orderBy tapi kok gaiso hiks
        // dd($users);
        $daftar = UserrModel::where('status','1')->get();
        $editdaftar = UserrModel::all();
        $pendaftaran = UserrModel::with(['penempatan','user','magang'])->get();
        $tempat = PenempatanModel::all();
        $depart = DivisiModel::all();
        $magang = MagangModel::all();
    	return view('inside.v_user_daftar',compact('users','pendaftaran','daftar','tempat','depart', 'editdaftar','magang'));
    }

    function status_update($id)
    {
        // dd();
        //get product status with the help of product ID
        $pendaftaran = UserrModel::select('status')->where('id','=',$id)->first();
        // dd($pendaftaran);
        //Check user status
        if($pendaftaran->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update product status
        $values = array('status' => $status );
        UserrModel::where('id',$id)->update($values);
        return redirect()->route('user_daftar')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit_data_peserta(Request $request, $id)
    {
        $tempat = UserrModel::find($id);
        $tempat->nik = $request->nik;
        $tempat->no_telp = $request->no_telp;
        $tempat->berkas = $request->berkas;
        $tempat->penempatans = $request->penempatans;
        $tempat->divisis = $request->divisis;
        $tempat->jenis_magangs = $request->jenis_magangs;
        $tempat->save();

        if($tempat){
            Session::flash('status','success');
            Session::flash('message','data berhasil di update');
        }
        return redirect()->route('user_daftar')->with('pesan','data berhasil di update!!!');
    }
}
