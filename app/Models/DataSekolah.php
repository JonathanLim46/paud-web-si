<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    //
    protected $table = 'tb_data_sekolah';
    protected $primaryKey = 'npsn';
    public $incrementing = false;
    protected $fillable = [
        'npsn',
        'pendaftaran_id',
        'alamat_sekolah',
        'jenjang_sekolah'
    ];

    public function pendaftar() : BelongsTo
    {
        return $this->belongsTo(Pendaftar::class);
    }
}
