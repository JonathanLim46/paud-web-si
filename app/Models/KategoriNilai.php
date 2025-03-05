<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
