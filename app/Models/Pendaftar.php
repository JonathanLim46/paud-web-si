<?php

namespace App\Models;

use App\Models\Dokumen;
use App\Models\DataPribadi;
use App\Models\DataSekolah;
use App\Models\DataOrangTua;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    //
    protected $table = 'tb_pendaftar';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'status_verifikasi',
        'no_telp',
        'nik',
        'orangTua_id',
        'dokumen_id',
        'npsn'
    ];

    public function dataPribadi() : HasOne{ 
        return $this->hasOne(DataPribadi::class);
    }

    public function dataOrangTua() : HasOne{ 
        return $this->hasOne(DataOrangTua::class);
    }

    public function dokumen() : HasOne{ 
        return $this->hasOne(Dokumen::class);
    }

    public function dataSekolah() : HasOne{ 
        return $this->hasOne(DataSekolah::class);
    }
}
