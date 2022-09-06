<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\UserrModel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'nik' => ['required'],
            'instansi' => ['required'],
            'no_telp' => ['required'],
            'berkas' => ['required'],
            'status' => ['required'],
            'level' => ['required'],
            'id_penempatan' => ['required'],
            'id_divisi' => ['required'],
            'id_magang' => ['required'],
            'id_jadwal' => ['required'],
            'id_kehadiran' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\UserrModel
     */
    protected function create(array $data)
    {
        // dd($data);
        return UserrModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nik' => $data['nik'],
            'instansi' => $data['instansi'],
            'no_telp' => $data['no_telp'],
            'berkas' => $data['berkas'],
            'status' => $data['status'],
            'level' => $data['level'],
            'id_penempatan' => $data['id_penempatan'],
            'id_divisi' => $data['id_divisi'],
            'id_magang' => $data['id_magang'],
            'id_jadwal' => $data['id_jadwal'],
            'id_kehadiran' => $data['id_kehadiran'],
        ]);
    }

}
