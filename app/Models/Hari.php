<?php

namespace App\Models;

use App\Models\JadwalPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hari extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_hari';
    protected $primaryKey = 'id_hari';
    protected $fillable = [
        'nama_hari',
    ];

    public function jadwals(): HasMany{
        return $this->hasMany(JadwalPelajaran::class, 'hari_id');
    }
}
