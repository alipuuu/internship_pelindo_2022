<?php

namespace App\Http\Controllers;
use App\Models\PendaftaranModel;

use Illuminate\Http\Request;

class TidakHadirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $daftar = PendaftaranModel::where('status','1')->get();
    	return view('inside.v_tidakhadir', compact('daftar'));
    }
}
