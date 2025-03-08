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
        'kelas_id',
        'user_id'
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

    public function kelas(): BelongsTo{
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
