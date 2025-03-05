<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    //
    protected $table = 'tb_aktivitas';
    protected $fillable = [
        'foto_aktivitas'
    ];
}
