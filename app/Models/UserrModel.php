<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserrModel extends Authenticatable
{
    public function allData()
    {
       return DB::table('users')->get();
    }

    public function editData($id , $data)
    {
        DB::table('users')
            ->where('id_users',$id)
            ->update($data);
    }

    public function addData($data)
    {
        DB::table('users')->insert($data);
    }

    protected $table = 'users';
    protected $guarded = [];
    protected $primaryKey = 'id_users';
    protected $fillable = [
    'name',
    'email',
    'password',
    'password_confirmation',
    'nik',
    'instansi',
    'no_telp',
    'berkas',
    'status',
    'level',
    'id_penempatan',
    'id_divisi',
    'id_magang',
    'id_jadwal',
    'id_kehadiran'];

    public function penempatan()
    {
        return $this->hasOne(PenempatanModel::class,'id_penempatan','id_penempatan');
    }

    public function divisi()
    {
        return $this->hasOne(DivisiModel::class,'id_divisi','id_divisi');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id_users','user_id');
    }

    public function datapribadi()
    {
        return $this->hasOne(UserrModel::class,'id_users','nik','instansi','no_telp','berkas');
    }

    public function magang()
    {
        return $this->hasOne(MagangModel::class,'id_magang','id_magang');
    }

    public function semua()
    {
        return DB::table('users')
        ->leftJoin('magang','magang.id_magang', '=', 'users.id_magang')
        ->leftJoin('penempatan','penempatan.id_penempatan', '=', 'users.id_penempatan')
        ->leftJoin('divisi','divisi.id_divisi', '=', 'users.id_divisi')
        ->get();
    }
}
