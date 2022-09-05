<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TheySayModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "theysay";
    protected $primaryKey = "id"; // -> primary keynya apa ?
    protected $fillable =['name','email','message'];

    public function allData()
    {
       return DB::table('theysay')->get();
    }

    public function addData($data)
    {
        DB::table('theysay')->insert($data);
    }

    public function editData($id , $data)
    {
        DB::table('theysay')
            ->where('id',$id)
            ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('theysay')
            ->where('id',$id)
            ->delete();
    }
}
