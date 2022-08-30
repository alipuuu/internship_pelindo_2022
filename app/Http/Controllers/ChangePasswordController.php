<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('inside.v_changepassword');
    }

    public function store(Request $request)
    {
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        return view('inside.v_changepassword');
    }
}
