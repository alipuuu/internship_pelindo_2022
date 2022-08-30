<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DivisiModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "divisi";
    protected $primaryKey = "id"; // -> primary keynya apa ?
    protected $fillable =['divisi','departemen'];

    public function allData()
    {
       return DB::table('divisi')->get();
    }

    public function addData($data)
    {
        DB::table('divisi')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('divisi')
            ->where('id',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('divisi')
            ->where('id',$id)
            ->delete();
    }
}
