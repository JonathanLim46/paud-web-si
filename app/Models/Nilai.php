<?php

namespace App\Models;

use App\Models\Pendaftar;
use App\Models\KategoriNilai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    //
    protected $table = 'tb_nilai';
    protected $primaryKey = 'id_nilai';
    protected $fillable = [
        'deskripsi_nilai', 'kategori_id', 'murid_id'
    ];

    public function kategoriNilai(): BelongsTo{
        return $this->belongsTo(KategoriNilai::class);
    }

    public function murids(): BelongsTo{
        return $this->belongsTo(Pendaftar::class);
    }
}
