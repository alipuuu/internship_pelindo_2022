<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MagangModel extends Model
{
    protected $table = 'magang';
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_magang','ket'];

    public function allData()
    {
       return DB::table('magang')->get();
    }

    public function addData($data)
    {
        DB::table('magang')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('magang')
            ->where('id',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('magang')
            ->where('id',$id)
            ->delete();
    }
}

