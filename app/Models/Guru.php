<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\JadwalPelajaran;

class Guru extends Model
{
    //
    use HasFactory;
    protected $table = 'tb_guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'user_id',
    ];
    protected $hidden = ['password']; 

    public static function boot()
    {
        parent::boot();

        static::creating(function ($guru) {
            $user = User::find($guru->user_id);
            if (!$user || $user->level !== 'guru') {
                throw new \Exception('User ID harus dari pengguna dengan level guru.');
            }
        });
    }

    public function jadwals(): HasMany{
        return $this->hasMany(JadwalPelajaran::class, 'guru_id');
    }
}
