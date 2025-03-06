<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Murid;
use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    //

    use HasFactory;
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillabel = [
        'tingkat_kelas'
    ];

    public function guru(): HasOne{
        return $this->hasOne(Guru::class, 'kelas_id');
    }

    public function murids(): HasMany{
        return $this->hasMany(Murid::class, 'kelas_id');
    }

    public function pelajarans(): HasMany{
        return $this->hasMany(MataPelajaran::class, 'kelas_id');
    }
}
