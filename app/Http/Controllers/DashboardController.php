<?php

namespace App\Http\Controllers;

use App\Models\InstansiModel;
use App\Models\PenempatanModel;
use App\Models\TheySayModel;
use App\Models\UserrModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gettheysay = TheySayModel::where('status','1')->get();

        $peserta = UserrModel::count();
        $lolos = UserrModel::with('status','1')->count();
        $tidak_lolos = UserrModel::with('status','0')->count();

        $fresh = UserrModel::count();
        $mahasiswa = UserrModel::count();
        $siswa = UserrModel::count();

        $instansi = InstansiModel::count();
        $penempatan = PenempatanModel::count();

        // $hadir =
        // $tidakhadir =
    	return view('inside.v_dashboard',
        compact('peserta','lolos','tidak_lolos',
        'fresh','mahasiswa', 'siswa',
        'instansi','penempatan', 'gettheysay'
    ));
    }
}
