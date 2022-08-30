<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenempatanModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "penempatan";
    protected $primaryKey = "id"; // -> primary keynya apa ?
    protected $fillable =['lokasi','alamat'];

    public function allData()
    {
       return DB::table('penempatan')->get();
    }

    public function addData($data)
    {
        DB::table('penempatan')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('penempatan')
            ->where('id',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('penempatan')
            ->where('id',$id)
            ->delete();
    }
}
