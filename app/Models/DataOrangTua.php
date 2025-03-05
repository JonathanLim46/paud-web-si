<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataOrangTua extends Model
{
    //

    protected $table = 'tb_data_orang_tua';
    protected $primaryKey = 'id_orangTua';
    protected $fillable = [
        'nama_ayah', 
        'nik_ayah', 
        'nama_ibu', 
        'nik_ibu', 
        'nama_wali', 
        'nik_wali'
    ];

    public function pendaftar() : BelongsTo {
        return $this->belongsTo(Pendaftar::class);
    }
}
