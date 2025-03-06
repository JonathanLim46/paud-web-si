<?php

namespace App\Models;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataOrangTua extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_data_orang_tua';
    protected $primaryKey = 'id_orangTua';
    protected $fillable = [
        'pendaftaran_id',
        'nama_ayah', 
        'nik_ayah', 
        'nama_ibu', 
        'nik_ibu', 
        'nama_wali', 
        'nik_wali'
    ];

    public function pendaftar() : BelongsTo {
        return $this->belongsTo(Pendaftar::class, 'pendaftaran_id');
    }
}
