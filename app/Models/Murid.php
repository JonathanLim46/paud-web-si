<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Murid extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_murid';
    protected $primaryKey = 'id_murid';
    protected $fillable = [
        'nama_lengkap', 'kelas_id', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 
        'agama', 'no_telp_orangTua', 'nama_ayah', 'nama_ibu', 'nama_wali'
    ];

    public function kelas(): BelongsTo{
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function nilai(): HasMany{
        return $this->hasMany(Nilai::class, 'murid_id');
    }
}
