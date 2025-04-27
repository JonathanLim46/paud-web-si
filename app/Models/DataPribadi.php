<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataPribadi extends Model
{
    //
    use HasFactory;

    protected $table = 'tb_data_pribadi';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $fillable = [
        'nik', 
        'nis',
        'pendaftaran_id',
        'nama_lengkap', 
        'jenis_kelamin', 
        'tempat_lahir',
        'tanggal_lahir', 
        'agama', 
        'anak_ke', 
        'berat_badan',
        'tinggi_badan', 
        'lingkar_kepala',
        'alamat_rumah',
        'desa_kelurahan',
        'kecamatan',
        'kota_kabupaten',
        'provinsi',
        'kode_pos',
    ];

    public function pendaftar() : BelongsTo {
        return $this->belongsTo(Pendaftar::class, 'pendaftaran_id');
    }
}
