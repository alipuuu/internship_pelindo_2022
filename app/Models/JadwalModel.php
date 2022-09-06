<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JadwalModel extends Model
{
    protected $guarded = [];
    protected $table = "jadwalhadir";
    protected $primaryKey = "id_jadwal";
    protected $fillable =['jadwal_kehadiran','ket'];

    public function allData()
    {
       return DB::table('jadwalhadir')->get();
    }

    public function addData($data)
    {
        DB::table('jadwalhadir')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('jadwalhadir')
            ->where('id_jadwal',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('jadwalhadir')
            ->where('id_jadwal',$id)
            ->delete();
    }
}
