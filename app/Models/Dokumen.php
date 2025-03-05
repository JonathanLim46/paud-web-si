<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    //
    protected $table = 'tb_dokumen';
    protected $primaryKey = 'id_dokumen';
    protected $fillable = [
        'kartu_keluarga',
        'akta_kelahiran', 
        'surat_pindah'
    ];

    // Relasi ke Pendaftar
    public function pendaftar() : BelongsTo
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
