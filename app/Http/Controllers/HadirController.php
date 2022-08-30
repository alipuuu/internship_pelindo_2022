<?php

namespace App\Http\Controllers;
use App\Models\PendaftaranModel;
use App\Models\DivisiModel;

use Illuminate\Http\Request;

class HadirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $daftar = PendaftaranModel::where('status','1')->get();
    	return view('inside.v_hadir', compact('daftar'));
    }
}
