<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Murid;
use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillabel = [
        'tingkat_kelas'
    ];

    public function guru(): HasOne{
        return $this->hasOne(Guru::class);
    }

    public function murids(): HasMany{
        return $this->hasMany(Murid::class);
    }

    public function pelajarans(): HasMany{
        return $this->hasMany(MataPelajaran::class);
    }
}
