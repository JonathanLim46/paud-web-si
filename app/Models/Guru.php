<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kelas;
use App\Models\JadwalPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'user_id', 'jabatan', 'alamat_guru', 'pendidikan',
    ];
    protected $hidden = ['password']; 

    public function jadwals(): HasMany{
        return $this->hasMany(JadwalPelajaran::class, 'guru_id');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kelas(): HasOne{
        return $this->hasOne(Kelas::class, 'guru_id');
    }
}
