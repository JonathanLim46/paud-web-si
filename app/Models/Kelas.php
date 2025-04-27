<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Pendaftar;
use App\Models\MataPelajaran;
use App\Models\JadwalPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    //

    use HasFactory;
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'nama_kelas',
        'tingkat_kelas',
        'guru_id',
    ];

    // public function guru(): HasOne{
    //     return $this->hasOne(Guru::class, 'kelas_id');
    // }

    public function murids(): HasMany{
        return $this->hasMany(Pendaftar::class, 'kelas_id');
    }

    public function pelajarans(): HasMany{
        return $this->hasMany(MataPelajaran::class, 'kelas_id');
    }

    public function jadwals(): HasMany{
        return $this->hasMany(JadwalPelajaran::class, 'kelas_id');
    }

    public function guru(): BelongsTo{
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
