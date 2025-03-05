<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //
    protected $table = 'tb_mata_pelajaran';
    protected $primaryKey = 'id_pelajaran';
    protected $fillable = [
        'nama_pelajaran',
        'kelas_id',
        'jadwal_pelajaran'
    ];
}
