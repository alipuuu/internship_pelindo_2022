<?php

namespace App\Http\Controllers;

use App\Models\TheySayModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->TheySayModel = new TheySayModel();
    }

     public function index()
    {
        $theysay = TheySayModel::all();
        return view('inside.v_theysay', compact('theysay'));
    }

    function status_update($id)
    {
        $theysay = TheySayModel::select('status')->where('id','=',$id)->first();
        if($theysay->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        $values = array('status' => $status );
        TheySayModel::where('id',$id)->update($values);
        return redirect()->route('theysay')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function add_theysay()
    {
        $theysay = TheySayModel::all();
    	return view('index', compact('theysay'));
    }

    public function insert_theysay(Request $request)
    {
        $theysay = TheySayModel::find($request->id);
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ],[
            'name.required'=>' name wajib diisi !!',
            'email.required'=>' email wajib diisi !!',
            'message.required'=>' message wajib diisi !!',
        ]);
        $theysay = [
            'name' => Request()->name,
            'email' => Request()->email,
            'message' => Request()->message,
        ];
        if($theysay){
            Session::flash('status','success');
            Session::flash('message','DATA ANDA SUKSES TERKIRIM');
        }
        $this->TheySayModel->addData($theysay);
        // dd($theysay);
        // return redirect()->route('index',compact('theysay'));
        return view('index', compact('theysay'));
    }
}
