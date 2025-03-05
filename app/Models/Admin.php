<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
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
