<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriNilai extends Model
{
    //
    protected $table = 'tb_kategori_nilai';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama_kategori'
    ];

    protected function nilai(): HasMany{
        return $this->hasMany(Nilai::class);
    }
}
