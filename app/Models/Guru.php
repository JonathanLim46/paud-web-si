<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'username',
        'kelas_id',
        'name',
        'password',
        'email',
        'no_telp'
    ];
    protected $hidden = ['password']; 

    public function kelas(): BelongsTo{
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
