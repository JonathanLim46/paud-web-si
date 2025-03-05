<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;

class DataPribadi extends Model
{
    //
    protected $table = 'tb_data_pribadi';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $fillable = [
        'nik', 
        'pendaftaran_id',
        'nama_lengkap', 
        'jenis_kelamin', 
        'tempat_lahir',
        'tanggal_lahir', 
        'agama', 
        'anak_ke', 
        'berat_badan',
        'tinggi_badan', 
        'lingkar_kepala'
    ];

    public function pendaftar() : BelongsTo {
        return $this->belongsTo(Pendaftar::class);
    }
}
