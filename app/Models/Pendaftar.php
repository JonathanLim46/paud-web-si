<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Dokumen;
use App\Models\DataPribadi;
use App\Models\DataSekolah;
use App\Models\DataOrangTua;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pendaftar extends Model
{
    //
    use HasFactory;

    protected $table = 'tb_pendaftar';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'status_verifikasi',
        'no_telp',
        'diterima',
        'kelas_id',
    ];

    public function dataPribadi() : HasOne{ 
        return $this->hasOne(DataPribadi::class, 'pendaftaran_id');
    }

    public function dataOrangTua() : HasOne{ 
        return $this->hasOne(DataOrangTua::class, 'pendaftaran_id');
    }

    public function dokumen() : HasOne{ 
        return $this->hasOne(Dokumen::class, 'pendaftaran_id');
    }

    public function dataSekolah() : HasOne{ 
        return $this->hasOne(DataSekolah::class, 'pendaftaran_id');
    }

    public function kelas(): BelongsTo{
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function nilai(): HasMany{
        return $this->hasMany(Nilai::class, 'murid_id');
    }
}
