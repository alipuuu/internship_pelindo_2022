<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheySayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('inside.v_theysay');
    }

}
