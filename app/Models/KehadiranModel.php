<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KehadiranModel extends Model
{
    protected $guarded = [];
    protected $table = "kehadiran";
    protected $primaryKey = "id_kehadiran";
    protected $fillable =['id_kehadiran','ket'];

    public function allData()
    {
       return DB::table('kehadiran')->get();
    }

    public function addData($data)
    {
        DB::table('kehadiran')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('kehadiran')
            ->where('id_kehadiran',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('kehadiran')
            ->where('id_kehadiran',$id)
            ->delete();
    }
}
