<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSekolah extends Model
{
    //
    use HasFactory;

    protected $table = 'tb_data_sekolah';
    protected $primaryKey = 'npsn';
    public $incrementing = false;
    protected $fillable = [
        'npsn',
        'pendaftaran_id',
        'nama_sekolah',
        'alamat_sekolah',
        'status_sekolah'
    ];

    public function pendaftar() : BelongsTo
    {
        return $this->belongsTo(Pendaftar::class, 'pendaftaran_id');
    }
}
