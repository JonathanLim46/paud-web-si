<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalPelajaran extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_jadwal_pelajaran';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = [
        'guru_id', 'kelas_id', 'hari_id',
    ];

    public function guru(): BelongsTo{
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function kelas(): BelongsTo{
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function hari(): BelongsTo{
        return $this->belongsTo(Hari::class, 'hari_id');
    }
}
