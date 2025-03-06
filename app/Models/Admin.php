<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    //
    use HasFactory;

    protected $table = 'tb_admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'username',
        'nama',
        'password',
        'email',
        'no_telp'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
