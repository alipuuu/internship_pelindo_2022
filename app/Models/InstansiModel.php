<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InstansiModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "instansi";
    protected $primaryKey = "id_instansi"; // -> primary keynya apa ?
    protected $fillable =['instansi','alamat','no_telp','email'];

    public function allData()
    {
       return DB::table('instansi')->get();
    }

    public function addData($data)
    {
        DB::table('instansi')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('instansi')
            ->where('id_instansi',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('instansi')
            ->where('id_instansi',$id)
            ->delete();
    }
}
