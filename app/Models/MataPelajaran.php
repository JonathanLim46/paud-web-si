<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataPelajaran extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_mata_pelajaran';
    protected $primaryKey = 'id_pelajaran';
    protected $fillable = [
        'nama_pelajaran',
        'kelas_id',
        'jadwal_pelajaran'
    ];
}
