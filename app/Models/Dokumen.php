<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumen extends Model
{
    //
    use HasFactory;

    protected $table = 'tb_dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $fillable = [
        'kartu_keluarga',
        'pendaftaran_id',
        'akta_kelahiran', 
        'surat_pindah'
    ];

    // Relasi ke Pendaftar
    public function pendaftar() : BelongsTo
    {
        return $this->belongsTo(Pendaftar::class, 'pendaftaran_id');
    }
}
