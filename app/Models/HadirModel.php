<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HadirModel extends Model
{
        public function allData()
        {
        return DB::table('hadir')->get();
        }

        public function editData($id , $data)
        {
            DB::table('hadir')
                ->where('id_hadir',$id)
                ->update($data);
        }

        public function addData($data)
        {
            DB::table('hadir')->insert($data);
        }

        protected $table = 'hadir';
        protected $guarded = [];
        protected $primaryKey = 'id_hadir';
        protected $fillable = [
        'name',
        'jenis_kehadiran',
        'jenis_absensi',
        'bukti',
        'konsinyering'];
}
