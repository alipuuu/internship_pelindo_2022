<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
            ->where('id',$id)
            ->update($data);
    }

    public function addData($data)
    {
        DB::table('users')->insert($data);
    }

    protected $table = 'users';
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'magang_id',
    'email',
    'password',
    'password_confirmation','nik',
    'instansi',
    'no_telp',
    'berkas',
    'level',
    'status',
    'penempatans',
    'divisis'];

    public function penempatan()
    {
        return $this->hasOne(PenempatanModel::class,'id','penempatans');
    }

    public function divisi()
    {
        return $this->hasOne(DivisiModel::class,'id','divisis');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function datapribadi()
    {
        return $this->hasOne(UserrModel::class,'id','nik','instansi','no_telp','berkas');
    }

    public function magang()
    {
        return $this->hasOne(MagangModel::class,'id','jenis_magangs');
    }
}
